<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null :
    define('SITE_ROOT', DS.'var'.DS.'www'.DS.'html'.DS.'PHP'.DS.'photo_gallery');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");
require_once(LIB_PATH.DS."user.php");
require_once(LIB_PATH.DS."photograph.php");

?>
