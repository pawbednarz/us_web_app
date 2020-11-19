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
<div class="row">
    <div class="col s0-5 m3 d4"></div>
    <div class="col s12 m6 d4">
    <form class="calc_form" action="<?php  echo _CONTROLLERS_URL.'security/login.php';?>" method="post">
        <fieldset>
            <legend>Zaloguj się</legend>
            <div class="col m12">
                <label for="login">Login </label>
                <input class="_full-width" id="login" type="text" name="login"/>
            </div>
            <div class="col m12">
                <label for="password">Hasło </label>
                <input class="_full-width" id="password" type="password" name="password"/>
            </div>
            <input class="_primary button" type="submit" value="Zaloguj" />
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
    </div>
    <div class="col s0-5 m3 d4"></div>
</div>
</body>
</html>