<?php

/**
 * Setting Ourput Buffering
 */
ob_start();

/**
 * Error Handling
 */
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
/**
 * Turn off register globals
 * only php 5.3 and less
 */
ini_set('register_globals', 0);

/**
 * Define App Constants
 */
//shortcuts
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);
//domain related constant
define('HOST_NAME', 'http://' .  $_SERVER['HTTP_HOST'] . '/');
define('CSS_DIR', HOST_NAME . '_css/');
// Paths
define('APP_PATH', realpath(dirname(__FILE__)) . DS);
define('TEMPLATE_PATH', APP_PATH . 'App' . DS . '_template' . DS);
define('LIB_PATH', APP_PATH . 'App/_lib'. DS);
define('MODELS_PATH', APP_PATH . 'App/_models' . DS);
//Database Credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'project');
define('DB_USER', 'web');
define('DB_PASS', 'P@ssw0rd');
/**
 * Set the paths that the php use to find called classes
 */
//define  the new paths . . . .
$path = get_include_path() . PS . LIB_PATH . PS . MODELS_PATH ;
//set the nes paths
set_include_path($path);
//define the  autoload function
function myAutoload($class)
{
    require_once strtolower($class) . '.class.php';
}
spl_autoload_register('myAutoload');
$dbh = Database::getInstance();
$template = new Template();
$template->setCSS();

#$dir = opendir(APP_PATH.'App/_css');
##while($file = "Resource id #4"){
#    echo $file . '<br>';
#}
echo $dir;
 $user = new User;
 $user->username = 'amine4';
 $user->password = md5('amine');
 $user->email = 'amine24@gmail.com';
 $user->address = 'martil morocco';
 $user->gender = 1;
 $user->status = 1;
 $user->activation = md5($user->email . $user->username);
 $user->privilege = 1;
 $user->lastlogin = date('d-m-y H:m:s');
 $user->add();

 /**
 * Call the template
 */
require_once TEMPLATE_PATH . 'header.tpl';
require_once TEMPLATE_PATH . 'nav.tpl';
require_once TEMPLATE_PATH . 'banner.tpl';
require_once TEMPLATE_PATH . 'pageBody.tpl';
require_once TEMPLATE_PATH . 'footer.tpl';
/**
 * End Buffering And Send the Output
 */
ob_flush();
