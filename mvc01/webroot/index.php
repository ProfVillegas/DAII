<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('WEBROOT', 'http://localhost/daii/mvc06');
define('VIEWS_PATH', ROOT.DS.'views');

require_once(ROOT.DS.'lib'.DS.'init.php');

App::run(str_replace("/daii/mvc06","",$_SERVER['REQUEST_URI']));