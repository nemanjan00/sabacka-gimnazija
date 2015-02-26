<?php
include("./include/config.php");
include("./include/resources.class.php");
?>
<!DOCTYPE html>
<html lang="en" manifest="./page.appcache">
	<head>
		<base href="<?=(htmlspecialchars(dirname($_SERVER["SCRIPT_NAME"])) == "/")?"":htmlspecialchars(dirname($_SERVER["SCRIPT_NAME"]));?>/" />

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
				<a class="navbar-brand" href="#">Шабачка гимназија</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">О школи <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="#">Историјат</a></li>
								<li><a href="#">Школа данас</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ученици <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="#">Бивши ученици</a></li>
								<li class="menu-item"><a href="#">Такмичења</a></li>
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
											<a href="#">Филмска</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Колектив <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="#">Директор</a></li>
								<li><a href="#">Стручна служба</a></li>
								<li><a href="#">Професори</a></li>
								<li><a href="#">Секретаријат</a></li>
								<li><a href="#">Помоћно особље</a></li>
								<li><a href="#">Школски одбор</a></li>
								<li><a href="#">Савет родитеља</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Упис <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="#">Бивши ученици</a></li>
								<li><a href="#">Такмичења</a></li>
							</ul>
						</li>

						<li><a href="#">Контакт</a></li>

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
								<form method="POST" action="./admin/login.php">
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" placeholder="Корисничко име...">
									</div><!-- /input-group -->
									<br>
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-asterisk"></i></span>
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

		<header>
			<img src="<?=$resources->getStaticResource("img/logo.png");?>">
		</header>

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
							<img src="<?=$resources->getDynamicResource("gimnazija/skola_01.jpg");?>" alt="First slide">
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
							<img src="<?=$resources->getDynamicResource("gimnazija/skola_02.jpg");?>" alt="Second slide">
							<div class="container">
								<div class="carousel-caption">
									<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="<?=$resources->getDynamicResource("gimnazija/skola_14.jpg");?>" alt="Third slide">
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
					 <div class="panel">
						<h1>Наслов</h1>
						<p>Додато: 15.05.2014</p>

						<img src="<?=$resources->getDynamicResource("gimnazija/skola_01.jpg");?>" class="glavna">

						<h2>Поднаслов</h2>
						Тотам рем апериам, еаqуе ипса qуае аб илло инвенторе веритатис ет qуаси арчитецто беатае витае дицта сунт еxплицабо. Немо еним ипсам волуптатем qуиа волуптас сит аспернатур аут одит аут фугит, сед qуиа цор магни долорес еос qуи ратионе волуптатем сеqуи несциунт. Неqуе порро qуисqуам ест, qуи долорем ипсум qуиа долор сит амет, цонсецтетур, адиписци велит, сед qуиа нон нумqуам еиус моди темпора инцидунт ут лаборе ет долоре магнам алиqуам qуаерат волуптатем. Ут еним ад минима вениам, qуис нострум еxерцитатионем уллам цорпорис сусципит лабориосам, ниси ут алиqуид еx еа цоммоди цонсеqуатур?
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

			<footer class="panel">&copy; Шабачка гимназија <?=date("Y");?></footer>
		</div>

		<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script async src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

		<script async src="<?=$resources->getStaticResource("js/scripts.js");?>"></script>

		<script src="https://cdn.rawgit.com/abhinayrathore/Bootstrap-Youtube-Popup-Player-Plugin/master/bootstrap.youtubepopup.js"></script>

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
			loadCSS("<?=$resources->getStaticResource("css/styles.css");?>");

			$(function () {
				$(".youtube").YouTubeModal({autoplay:0});
			});
		</script>

	</body>
</html>
