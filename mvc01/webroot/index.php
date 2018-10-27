<?php
define('RUTA_LOCAL',explode('/webroot',$_SERVER['PHP_SELF'])[0]);
define('DS', '/');
define('ROOT', dirname(dirname(__FILE__)));
define('WEBROOT', 'http://localhost'.RUTA_LOCAL);
define('VIEWS_PATH', ROOT.DS.'views');

require_once(ROOT.DS.'lib'.DS.'init.php');
echo "<pre style='display:none;'>";
print_r($_SERVER);
echo "</pre>";
App::run(str_replace(RUTA_LOCAL,"",$_SERVER['REQUEST_URI']));


/*
//TEST


$test=App::$db->query('show tables');
echo "<pre>";

print_r($test);

*/