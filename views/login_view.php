<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo _STATIC_URL."css/main.css"; ?>" />
		<noscript><link rel="stylesheet" href="<?php echo _STATIC_URL."css/noscript.css"; ?>" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="landing.html">Landing</a></li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Kalkulator kredytowy</h1>
							</header>
							<div class="content">
								<ul class="actions">
									<form method="post" action="<?php  echo _CONTROLLERS_URL.'security/login.php';?>">
										<div class="fields">
											<div class="field">
												<label for="login">Login</label>
												<input type="text" name="login" id="login" />
											</div>
	
											<div class="field">
												<label for="password">Hasło</label>
												<input type="text" name="password" id="password" />
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Zaloguj" class="primary" /></li>
										</ul>
									</form>
								</ul>
							</div>
						</div>
					
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Paweł Bednarz</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>
			</div>

			<!-- TODO add message handling -->

		<!-- Scripts -->
			<script src="<?php echo _STATIC_URL."js/jquery.min.js"; ?>"></script>
			<script src="<?php echo _STATIC_URL."js/jquery.scrolly.min.js"; ?>"></script>
			<script src="<?php echo _STATIC_URL."js/jquery.scrollex.min.js"; ?>"></script>
			<script src="<?php echo _STATIC_URL."js/browser.min.js"; ?>"></script>
			<script src="<?php echo _STATIC_URL."js/breakpoints.min.js"; ?>"></script>
			<script src="<?php echo _STATIC_URL."js/util.js"; ?>"></script>
			<script src="<?php echo _STATIC_URL."js/main.js"; ?>"></script>

	</body>
</html>