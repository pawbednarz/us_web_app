<?php
// load config
require_once dirname(__FILE__)."/../config.php";
require_once $conf->root_path."/classes/CalcController.class.php";

$calc_controller = new CalcController();
$calc_controller->initialize();
