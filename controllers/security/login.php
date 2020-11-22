<?php
// load config
require_once dirname(__FILE__)."/../../config.php";
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';

$login = $_REQUEST['login'];
$password = $_REQUEST['password'];

function validate_login($login, $password, &$messages) {
    // if there are no login and password parameter user displays view first time to login
    if (!(isset($login) && isset($password))) {
        return false;
    }

    if ($login == "" ) {
        $messages[] = "Nie podano loginu";
    }
    if ($login == "") {
        $messages[] = "Nie podano hasła";
    }

    if (count($messages) > 0) return false;

    if ($login == "admin" && $password == "admin") {
        session_start();
        $_SESSION["role"] = "admin";
        $_SESSION["username"] = "admin";
        return true;
    }

    if ($login == "user" && $password == "user") {
        session_start();
        $_SESSION["role"] = "user";
        $_SESSION["username"] = "user";
        return true;
    }

    $messages[] = "Niepoprawny login lub hasło";
    return false;
}

$messages = array();

if (validate_login($login, $password, $messages)) {
    header("Location: ".$conf->app_root);
} else {
    $smarty = new Smarty();
    $smarty -> assign("controllers_url", $conf->controllers_url);
    $smarty -> assign("static_url", $conf->static_url);
    $smarty -> assign("messages", $messages);
    $smarty -> display($conf->tpl_dir."login.tpl");
}
?>
