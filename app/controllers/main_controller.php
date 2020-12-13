<?php

$ctrl = (isset($_GET["page"])) ? $_GET["page"] : "";
switch ($ctrl) {
    case "credit_calc":
        $calc_controller = new \app\classes\CalcController();
        $calc_controller->calc_and_render_template();
        break;
    default:
        $calc_controller = new \app\classes\CalcController();
        $calc_controller->render_template();
        break;
}
