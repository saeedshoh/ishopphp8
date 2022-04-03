<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . "/public");
define("APP", ROOT . "/app");
define("CPRE", ROOT . "/vendor/wfm");
define("HELPERS", ROOT . "/vendor/wfm/helpers");
define("CACHE", ROOT . "/tmp/cache");
define("LOGS", ROOT . "/tmp/log");
define("CONFIF", ROOT . "/tmp/config");
define("LAYOUT", "ishop");
define("PATH", "http://ishop.loc");
define("ADMIN", "http://ishop.loc/admin");
define("NO_IMAGE", "uploads/no-image.jpg");


require_once ROOT . "/vendor/autoload.php";
