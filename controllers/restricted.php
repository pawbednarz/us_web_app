<?php
require_once dirname(__FILE__).'/../config.php';
include _CONTROLLERS_DIR.'security/access_control.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty -> assign("controllers_url", _CONTROLLERS_URL);
$smarty -> assign("static_url", _STATIC_URL);
$smarty -> assign("username", $_SESSION["username"]);
$smarty -> display(_TPL_DIR."restricted.tpl");
?>