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
  <li><a href="#" class="active">Kalkulator</a></li>
  <li><a href="<?php echo _CONTROLLERS_URL.'restricted.php'?>" >Dodatkowa strona</a></li>
  <li style="float:right;"><a href="<?php echo _CONTROLLERS_URL.'security/logout.php'?>" >Wyloguj się</a></li>
  <li style="float:right;"><a>Zalogowano jako: <?php echo $_SESSION["username"]; ?></a></li>
</ul>
<div class="row">
    <div class="col m2-5 d2-5"></div>
    <div class="col m1-5 d1-5">
    <form class="calc_form off-6" action="<?php  echo _CONTROLLERS_URL.'credit_calc.php';?>" method="post">
        <fieldset>
            <legend>Kalkulator kredytowy</legend>
            <div class="col m12">
                <label for="amount">Kwota: </label>
                <input class="_full-width" id="amount" type="number" name="amount"/>
            </div>
            <div class="col m12">
                <label for="years">Lata: </label>
                <input class="_full-width" id="years" type="number" name="years"/>
            </div>
            <div class="col m12">
                <label for="percentage">Oprocentowanie: </label>
                <input class="_full-width" id="percentage" type="number" name="percentage"/></br>
            </div>
            <input class="_primary button" type="submit" value="Oblicz" />
        </fieldset>
    </form>	

    <?php
if (isset($messages)) {
    if (count($messages) > 0) {
        echo '<div class="alert _warning _shadow _box message_box">';
        foreach ($messages as $key => $msg) {
            echo $msg.'</br>';
        }
        echo '</div>';
    }
}
?>
<?php 
echo $odsetki;
?>
<?php
if (isset($rate) && !is_nan($rate)) {
    echo <<<EOS
    <div class="alert _success _shadow _box message_box">
        Miesięczna rata: $rate
    </div>
    EOS;
}
?>

    </div>
    <div class="col m2-5 d2-5"></div>
</div>
</body>
</html>