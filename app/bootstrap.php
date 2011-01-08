<?php

define('LF', chr(10));

define('DEBUG_PRODUCTION',	0);
define('DEBUG_DEBUG', 1);
define('DEBUG_VERBOSE',	2);

if (!defined('DEBUG_LEVEL')) {
	define('DEBUG_LEVEL', DEBUG_VERBOSE);
}
if (DEBUG_LEVEL > DEBUG_PRODUCTION) {
	error_reporting(E_ALL + E_STRICT);
	ini_set('display_errors', 'yes');
	ini_set('display_startup_errors', 'yes');
} else {
	error_reporting(0);
}

require __DIR__.'/lib/Franklin.php';