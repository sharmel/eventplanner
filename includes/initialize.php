<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : 
	define('SITE_ROOT', DS.'wamp'.DS. 'www'.DS.'eventplanner_new');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// load basic functions next so that everything after can use them
require_once('functions.php');



//load core objects





?>