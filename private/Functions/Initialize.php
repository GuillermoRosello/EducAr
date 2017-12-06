<?php
/*require_once('connect.php');
require_once('rand.php');
require_once('usados.php');
require_once('examen.php');
require_once('resultados.php');*/
ob_start(); // output buffering is turned on

// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("FUNCTIONS_PATH", dirname(__FILE__));
define("PRIVATE_PATH", dirname(FUNCTIONS_PATH));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a hardcoded value:
// define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
// define("WWW_ROOT", '');
// * Can dynamically find everything in URL up to "/public"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);
require_once('database.php');
require_once('query_functions.php');
require_once('functions.php');
$db = db_connect();
session_start();


?>
