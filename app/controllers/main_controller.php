<?php

$ctrl = (isset($_GET["page"])) ? $_GET["page"] : "";
switch ($ctrl) {
    default:
        control("app\\classes", "CalcController", "calc_and_render_template", ["user", "administartor"]);
        break;
    case "login":
        control(null, "LoginController", "login");
        break;
    case "credit_calc":
        control(null, "CalcController", "calc_and_render_template", ["user", "administartor"]);
        break;
    case "logout":
        control(null, "LoginController", "logout", ["user", "administartor"]);
        break;
}
