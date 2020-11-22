<?php
// load config
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

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
    header("Location: "._APP_ROOT);
} else {
    $smarty = new Smarty();
    $smarty -> assign("controllers_url", _CONTROLLERS_URL);
    $smarty -> assign("static_url", _STATIC_URL);
    $smarty -> assign("messages", $messages);
    $smarty -> display(_TPL_DIR."login.tpl");
}
?>