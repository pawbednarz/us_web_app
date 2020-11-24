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
		<link rel="stylesheet" href="{$static_url}css/main.css" />
		<noscript><link rel="stylesheet" href="{$static_url}css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				{block name=menu}
<header id="header" class="alt">
	<a href="<?php echo _APP_ROOT.'/index.php'?>" class="logo"><strong>Kalkulator kredytowy</strong></a>
	<nav>
		<a href="#menu">Menu</a>
    </nav>
</header>

<nav id="menu">
	<ul class="links">
		<li><a href="{$controllers_url}credit_calc.php">Kalkulator</a></li>
	</ul>
</nav>
{/block}
				
				
				<!-- Banner -->
				<section id="banner" class="major">
					<div class="inner">
							{block name=content}Error{/block}
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

		<!-- Scripts -->
			<script src="{$static_url}js/jquery.min.js"></script>
			<script src="{$static_url}js/jquery.scrolly.min.js"></script>
			<script src="{$static_url}js/jquery.scrollex.min.js"></script>
			<script src="{$static_url}js/browser.min.js"></script>
			<script src="{$static_url}js/breakpoints.min.js"></script>
			<script src="{$static_url}js/util.js"></script>
			<script src="{$static_url}js/main.js"></script>

	</body>
</html>
