<?php
include("../include/config.php");
include("../include/resources.class.php");
?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Admin panel</title>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Please Sign In</h3>
						</div>
						<div class="panel-body">
							<form role="form">
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
									</div>
									<div class="checkbox">
										<label>
											<input name="remember" type="checkbox" value="Remember Me">Remember Me
										</label>
									</div>
									<!-- Change this to a button or input when using this as a form -->
									<a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script async src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script async src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script async src="<?=$resources->getStaticResource("admin/js/metisMenu.min.js");?>"></script>

		<!-- Custom Theme JavaScript -->
		<script async src="<?=$resources->getStaticResource("admin/js/sb-admin-2.js");?>"></script>


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
			loadCSS("<?=$resources->getStaticResource("admin/css/metisMenu.min.css");?>");
			loadCSS("<?=$resources->getStaticResource("admin/css/sb-admin-2.css");?>");
			loadCSS("<?=$resources->getStaticResource("admin/css/font-awesome.min.css");?>");
		</script>
	</body>
</html>
