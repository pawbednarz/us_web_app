<?php

function control($namespace, $controller, $method, $roles = null) {
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
