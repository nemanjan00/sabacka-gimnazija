<?php
class home extends controller{
	public function __construct($parms){
		parent::__construct();

		ob_start();
?>
		<div class="sadrzaj container">
			<div class="row">
					<!--<div class="col col-sm-12">
					<div class="panel">
						<div class="panel-body">
								You may want to put some news here <span class="glyphicon glyphicon-heart-empty"></span>
						</div>
					</div>
				</div>-->

				<div class="col col-sm-12">
					<div class="panel post">
						<h1>Велики успех наших ученика на Државном такмичењу из математике</h1>
						<p>Додато: 03.03.2015.</p>

						<img src="<?=$this->getDynamicResource("gimnazija/takmicari.jpg");?>" class="glavna">

						На <strong>Државном такмичењу из математике</strong>, одржаном 28.2.2015. године у Зајечару, наши ученици су постигли ОДЛИЧАН резултат.
						<strong>Младен Самарџић </strong>и <strong>Радоица Драшкић</strong>, ученици 4. разреда освојили су <strong>ПРВУ НАГРАДУ</strong>, а <strong>Вукашин Божић</strong>, ученик 2.разреда освојио је <strong>ТРЕЋУ НАГРАДУ</strong>.
						Посебно је важно напоменути да су Младен и Радоица овим резултатом обезбедили учешће на <strong>Српској математичкој олимпијади</strong> !!!
						Честитамо ученицима и њиховим професорима <strong>Мирјани Ћорилић</strong> и <strong>Синиши Мозетићу</strong> !!!!!!

						<br><br>

						<button class="btn btn-lg btn-primary">Прочитајте више...</button>
						<br><br>
					</div>
				</div>
			</div>

			<nav>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
						</li>
					</ul>
				</nav>

			<footer class="panel">&copy; Шабачка гимназија <?=date("Y");?> | CDN спонзорисао <a target="_blank" href="https://www.maxcdn.com/">MaxCDN</a> | Технички реализовао <a target="_blank" href="http://nemanjan00.com">Немања Недељковић</a></footer>
		</div>
<?php
		$content = ob_get_clean();

		$page = $this->loadView("page");

		$page->setContent($content);
		$page->render();

	}
}
