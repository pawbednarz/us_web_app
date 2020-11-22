<?php
require_once dirname(__FILE__)."/../config.php";
include $conf->controllers_dir.'security/access_control.php';
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty -> assign("controllers_url", $conf->controllers_url);
$smarty -> assign("static_url", $conf->static_url);
$smarty -> assign("username", $_SESSION["username"]);
$smarty -> display($conf->tpl_dir."restricted.tpl");
?>
