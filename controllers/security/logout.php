<?php
// load config
require_once dirname(__FILE__).'/../../config.php';

session_start();
session_destroy();


header("Location: login.php");
?>