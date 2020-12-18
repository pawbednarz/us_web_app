<?php

function control($namespace, $controller, $method, $roles = null) {
    if (isset($roles)) {
        if (!in_array($_SESSION["role"], $roles)) {
            header("Location: " . getConfig()->app_root . "?page=login");
            exit;
        }
    }
    if (empty($namespace)) {
        $controller = "app\\classes\\".$controller;
    } else {
        $controller = $namespace . "\\" . $controller;
    }
    include_once getConfig()->root_path . DIRECTORY_SEPARATOR . $controller . ".class.php";
    $ctrl = new $controller;
    if (is_callable(array($ctrl, $method))) {
        $ctrl->$method();
    }
    exit;
}
