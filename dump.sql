CREATE SEQUENCE vesti_id_seq
	START WITH 1
	INCREMENT BY 1
	NO MINVALUE
	NO MAXVALUE
	CACHE 1;

CREATE TABLE vesti (
	id integer DEFAULT nextval('vesti_id_seq'::regclass) NOT NULL,
	title text,
	tumbnail text,
	content text,
	"time" text
);

INSERT INTO vesti VALUES (1, 'Велики успех наших ученика на Државном такмичењу из математике', 'gimnazija/takmicari.jpg', 'На <strong>Државном такмичењу из математике</strong>, одржаном 28.2.2015. године у Зајечару, наши ученици су постигли ОДЛИЧАН резултат.
<br><strong>Младен Самарџић </strong>и <strong>Радоица Драшкић</strong>, ученици 4. разреда освојили су <strong>ПРВУ НАГРАДУ</strong>, а <strong>Вукашин Божић</strong>, ученик 2.разреда освојио је <strong>ТРЕЋУ НАГРАДУ</strong>.
<br>Посебно је важно напоменути да су Младен и Радоица овим резултатом обезбедили учешће на <strong>Српској математичкој олимпијади</strong> !!!
<br>Честитамо ученицима и њиховим професорима <strong>Мирјани Ћорилић</strong> и <strong>Синиши Мозетићу</strong> !!!!!!', '1425920589');
INSERT INTO vesti VALUES (2, 'Обавештење за ученике који долазе на припремну наставу из енглеског језика', '', 'Обавештење за ученике који долазе на припремну наставу из енглеског језика', '');

SELECT pg_catalog.setval('vesti_id_seq', 2, true);

ALTER TABLE ONLY vesti
	ADD CONSTRAINT vesti_pkey PRIMARY KEY (id);
