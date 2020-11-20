<?php include _CONTROLLERS_URL.'security/access_control.php'; ?>
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

				<!-- Header -->
					<header id="header" class="alt">
						<a href="<?php echo _APP_ROOT.'/index.php'?>" class="logo"><strong>Kalkulator kredytowy</strong></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="<?php echo _CONTROLLERS_URL."credit_calc.php"; ?>">Kalkulator</a></li>
							<li><a href="<?php echo _CONTROLLERS_URL."restricted.php"; ?>">Zastrzeżona podstrona</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="<?php echo _CONTROLLERS_URL."security/logout.php"; ?>" class="button fit">Wyloguj</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h2>Oblicz ratę kredytu</h2>
							</header>
							<div class="content">
								<div class="row">
									<ul class="actions col-6">
										<form method="post" action="<?php  echo _CONTROLLERS_URL.'credit_calc.php';?>">
											<div class="fields">
												<div class="field">
												<label for="amount">Kwota: </label>
													<input type="text" name="amount" id="amount" />
												</div>
												<div class="field">
													<label for="years">Lata: </label>
													<input type="text" name="years" id="years" />
												</div>
												<div class="field">
													<label for="percentage">Oprocentowanie: </label>
													<input type="text" name="percentage" id="percentage" />
												</div>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Oblicz" class="primary" /></li>
											</ul>
										</form>
									</ul>
									<div class="col-6 messages">
										<?php 
										if (isset($messages)){
											if (count($messages) > 0) { 
												echo <<<EOS
												<h4>Błąd:</h4>
													<ul class="alt error">
												EOS;
														foreach($messages as $key => $msg){
															echo "<li>".$msg."</li>";
														}
												echo <<<EOS
													</ul>
												EOS;
											}
										} 
										
										if (isset($rate) && !is_nan($rate)) {
											echo <<<EOS
												<h4>Wynik:</h4>
													<ul class="alt success">
														<li>Miesięczna rata: $rate</li>
													</ul>
												EOS;
										}
										?>
									</div>
								</div>
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