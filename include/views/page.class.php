<?php
class page extends view{
	private $content;
	private $carousel;
	private $carouselContent;

	public function __construct(){
		parent::__construct();

		$this->carousel = false;
	}

	public function setCarouselContent($content){
		$this->carousel = true;
		$this->carouselContent = $content;
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function render(){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<?=(htmlspecialchars(dirname($_SERVER["SCRIPT_NAME"])) == "/")?"":htmlspecialchars(dirname($_SERVER["SCRIPT_NAME"]));?>/" />

		<link href="<?=$this->getStaticResource("img/favicon.ico");?>" rel="icon" type="image/x-icon" />

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Шабачка гимназија</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Pragma" content="no-cache">

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Шабачка гимназија</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">О школи <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="/istorijat">Историјат</a></li>
								<li><a href="/skola-danas">Школа данас</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ученици <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="/bivsi-ucenici">Бивши ученици</a></li>
								<li><a href="/takmicenja">Такмичења</a></li>
								<li class="menu-item dropdown dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ученички парламент</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Обавештења</a>
											<a href="#">Чланови</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Настава <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li class="menu-item dropdown dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Редовна</a>
									<ul class="dropdown-menu">
										<li class="menu-item dropdown dropdown-submenu">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Предмет</a>
											<ul class="dropdown-menu">
												<li>
													<a href="#">Професор</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item dropdown dropdown-submenu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Секције</a>
									<ul class="dropdown-menu">
										<li>
											<a target="_blank" href="http://filmska-sekcija.sabackagimnazija.edu.rs">Филмска</a>
											<a target="_blank" href="http://debata.sabackagimnazija.edu.rs/">Дебатни Клуб</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Колектив <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="/direktor">Директор</a></li>
								<li><a href="/strucna-sluzba">Стручна служба</a></li>
								<li><a href="/profesori">Професори</a></li>
								<li><a href="/sekretarijat">Секретаријат</a></li>
								<li><a href="/pomocno-osoblje">Помоћно особље</a></li>
								<li><a href="/skolski-odbor">Школски одбор</a></li>
								<li><a href="/savet-roditelja">Савет родитеља</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Упис <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="/smerovi">Смерови</a></li>
								<li><a href="/pripremna-nastava">Припремна настава</a></li>
							</ul>
						</li>

						<li><a href="/kontakt">Контакт</a></li>

					</ul>
					<ul class="nav navbar-right navbar-nav desni">
						<li class="dropdown nav">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
							<ul class="dropdown-menu" style="padding:12px;">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
									</span>
								</div><!-- /input-group -->
							</ul>
						</li>
						 <li class="dropdown nav">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
							<ul class="dropdown-menu" style="padding:12px;">
								<form method="POST" action="./admin">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Корисничко име...">
									</div><!-- /input-group -->
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
										<input type="password" class="form-control" placeholder="Шифра...">
									</div><!-- /input-group -->
									<br>
									<button class="btn btn-primary btn-block" type="submit">Пријави се</button>
								</form>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav><!-- /.navbar -->

<?php
if($this->carousel){
?>
		<header>
			<a href="/"><img src="<?=$this->getStaticResource("img/logo.png");?>"></a>
		</header>

<?=$this->carouselContent;?>

<?php
}
?>

		<?=$this->content;?>

		<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script async src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

		<script async src="<?=$this->getStaticResource("js/scripts.js");?>"></script>

		<script>
			/*!
			loadCSS: load a CSS file asynchronously.
			[c]2014 @scottjehl, Filament Group, Inc.
			Licensed MIT
			*/
			function loadCSS( href, before, media, callback ){
				"use strict";
				// Arguments explained:
				// `href` is the URL for your CSS file.
				// `before` optionally defines the element we'll use as a reference for injecting our <link>
				// By default, `before` uses the first <script> element in the page.
				// However, since the order in which stylesheets are referenced matters, you might need a more specific location in your document.
				// If so, pass a different reference element to the `before` argument and it'll insert before that instead
				// note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
				var ss = window.document.createElement( "link" );
				var ref = before || window.document.getElementsByTagName( "script" )[ 0 ];
				var sheets = window.document.styleSheets;
				ss.rel = "stylesheet";
				ss.href = href;
				// temporarily, set media to something non-matching to ensure it'll fetch without blocking render
				ss.media = "only x";
				ss.onload = callback || function() {};
				// inject link
				ref.parentNode.insertBefore( ss, ref );
				// This function sets the link's media back to `all` so that the stylesheet applies once it loads
				// It is designed to poll until document.styleSheets includes the new sheet.
				function toggleMedia(){
					var defined;
					for( var i = 0; i < sheets.length; i++ ){
						if( sheets[ i ].href && sheets[ i ].href.indexOf( href ) > -1 ){
							defined = true;
						}
					}
					if( defined ){
						ss.media = media || "all";
					}
					else {
						setTimeout( toggleMedia );
					}
				}
				toggleMedia();
				return ss;
			}

			loadCSS("//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css");
			loadCSS("<?=$this->getStaticResource("css/styles.css");?>");
		</script>

		<script src="//cdn.rawgit.com/abhinayrathore/Bootstrap-Youtube-Popup-Player-Plugin/master/bootstrap.youtubepopup.js"></script>

		<script>
			$(function () {
				$(".youtube").YouTubeModal({autoplay:1});
			});
		</script>
	</body>
</html>
<?php
	}
}
