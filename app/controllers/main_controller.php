<?php

$ctrl = (isset($_GET["page"])) ? $_GET["page"] : "";
switch ($ctrl) {
    default:
        control("app\\classes", "CalcController", "calc_and_render_template", ["user", "administrator"]);
        break;
    case "login":
        if (!isset($_SESSION["username"]) && !isset($_SESSION["role"])) {
            control(null, "LoginController", "login");
        }
        header("Location: " . getConfig()->app_root . "?page=credit_calc");
        break;
    case "credit_calc":
        control(null, "CalcController", "calc_and_render_template", ["user", "administrator"]);
        break;
    case "admin_only":
        control(null, "AdminOnly", "renderTemplate", ["administrator"]);
        break;
    case "logout":
        control(null, "LoginController", "logout", ["user", "administrator"]);
        break;
}
