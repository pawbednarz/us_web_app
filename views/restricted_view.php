<?php include _CONTROLLERS_URL.'security/access_control.php'; ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" type="text/css" href="<?php echo _STATIC_URL."beauter.min.css"; ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo _STATIC_URL."custom.css"; ?>"/>
</head>
<body>
<ul class="topnav" id="myTopnav2">
  <li><a href="#beauter" class="brand">Kalkulator kredytowy</a></li>
  <li><a href="<?php echo _CONTROLLERS_URL.'credit_calc.php'; ?>">Kalkulator</a></li>
  <li><a class="active" href="<?php echo _CONTROLLERS_URL.'restricted.php'?>" >Dodatkowa strona</a></li>
  <li style="float:right;"><a href="<?php echo _CONTROLLERS_URL.'security/logout.php'?>" >Wyloguj się</a></li>
  <li style="float:right;"><a>Zalogowano jako: <?php echo $_SESSION["username"]; ?></a></li>
</ul>
<h1>Strona dostępna tylko dla zalogowanych użytkowników</h1>

</body>
</html>