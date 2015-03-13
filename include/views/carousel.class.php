<?php
class carousel extends view{
	private $content;
	private $carousel;
	private $carouselContent;

	public function __construct(){
		parent::__construct();
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function render(){
?>
<div class="sadrzaj container">
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
</div>
<?php
	}
}
