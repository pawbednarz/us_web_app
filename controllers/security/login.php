<?php
// load config
require_once dirname(__FILE__).'/../../config.php';

$login = $_REQUEST['login'];
$password = $_REQUEST['password'];

function validate_login($login, $password) {
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

if (validate_login($login, $password)) {
    header("Location: "._APP_ROOT);
} else {
    include _VIEWS_URL."login_view.php";
}

?>