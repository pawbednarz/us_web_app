<?php
define("_SERVER_NAME", "192.168.8.165");
define("_SERVER_URL", "https://"._SERVER_NAME);
define("_APP_ROOT", "/us_web_app");
define("_APP_URL", _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));
define("_VIEWS_URL", _ROOT_PATH.'/views/');
define("_CONTROLLERS_URL", _APP_URL.'/controllers/');
define("_CONTROLLERS_DIR", _ROOT_PATH.'/controllers/');
define("_STATIC_URL", _APP_URL.'/static/');
define("_TPL_URL", _APP_URL.'/templates/');
define("_TPL_DIR", _ROOT_PATH.'/templates/');
?>