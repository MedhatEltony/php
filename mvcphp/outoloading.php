<?php


define('APP_PATH', dirname(realpath(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);

define('CONTROLLERS_PATH', APP_PATH . DS . 'controllers');
define('MODELS_PATH', APP_PATH . DS . 'models');



$root = dirname(realpath(__FILE__));

$path = get_include_path() . PS . CONTROLLERS_PATH . PS . MODELS_PATH;
set_include_path($path);
echo '<br>';
echo __FILE__;
echo '<br>';
echo $root . '<br>' . $path;


function __autoload($className)
{

    require strtolower($className) . 'class.php';
}

//spl_autoload_register(MyAutoloder);
