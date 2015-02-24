<!DOCTYPE html>
<html lang="en" manifest="./page.appcache">
	<head>
		<base href="<?=(htmlspecialchars(dirname($_SERVER["SCRIPT_NAME"])) == "/")?"":htmlspecialchars(dirname($_SERVER["SCRIPT_NAME"]));?>/" />

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Шабачка гимназија</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="//cdn.rawgit.com/nemanjan00/sabacka-gimnazija/f2ce6616bf06284a087ef401015039c178880f88/css/styles.css" rel="stylesheet">
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
								<li><a href="#">Такмичења</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Настава <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="#">Бивши ученици</a></li>
								<li><a href="#">Такмичења</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Колектив <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="#">Бивши ученици</a></li>
								<li><a href="#">Такмичења</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Упис <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="#">Бивши ученици</a></li>
								<li><a href="#">Такмичења</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Контакт <i class="glyphicon glyphicon-chevron-down"></i></a>

							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="#">Бивши ученици</a></li>
								<li><a href="#">Такмичења</a></li>
							</ul>
						</li>

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
							<ul class="dropdown-menu nav">
								<li><a href="#">Login</a></li>
								<li><a href="#">Profile</a></li>
								<li class="divider"></li>
								<li><a href="#">About</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav><!-- /.navbar -->

		<header>
			<img src="//res.cloudinary.com/nemanjan00/image/upload/v1424806894/gimnazija/logo.png">
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
							<img src="//res.cloudinary.com/nemanjan00/image/upload/v1424803852/gimnazija/skola_01.jpg" alt="First slide">
							<div class="container">
								<div class="carousel-caption">
									<h1>Такмичење из програмирања</h1>
									<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Прочитајте више... </a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="//res.cloudinary.com/nemanjan00/image/upload/v1424803851/gimnazija/skola_02.jpg" alt="Second slide">
							<div class="container">
								<div class="carousel-caption">
									<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="//res.cloudinary.com/nemanjan00/image/upload/v1424803852/gimnazija/skola_14.jpg" alt="Third slide">
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

						<img src="//res.cloudinary.com/nemanjan00/image/upload/v1424803852/gimnazija/skola_01.jpg" class="glavna">

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
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	</body>
</html>
