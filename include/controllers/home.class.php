<?php
class home extends controller{
	public function __construct(){
		parent::__construct();

		ob_start();
?>
		<div class="sadrzaj container">
			<div class="row">
				<div id="myCarousel" class="col col-sm-12 carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?=$this->getDynamicResource("gimnazija/skola_01.jpg");?>" alt="First slide">
							<div class="container">
								<div class="carousel-caption">
									<h1>Добродошли</h1>
									<p>Контакт:<br>
										sabackagimnazija@gmail.com<br>
										sabackagimnazia@ptt.rs<br>
										тел:015 350286<br>
										Директор: 015 360570</p>
									<p><a class="btn btn-lg btn-primary youtube" href="http://www.youtube.com/watch?v=drknOAAANwo" role="button">Погледајте видео... </a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="<?=$this->getDynamicResource("gimnazija/skola_02.jpg");?>" alt="Second slide">
							<div class="container">
								<div class="carousel-caption">
									<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="<?=$this->getDynamicResource("gimnazija/skola_14.jpg");?>" alt="Third slide">
							<div class="container">
								<div class="carousel-caption">
									<h1>One more for good measure.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div><!-- /.carousel -->

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

		$page = new page($content);

		$page->render();

	}
}
