
<?php
$configDB = array();
$configDB["host"]     = "localhost";
$configDB["port"]     = 3307;
$configDB["database"] = "computer_store";
$configDB["username"] = "root";
$configDB["password"] = "";

define("HOST", "localhost");
define("DB_PORT", 3307);
define("DB_NAME", "computer_store");
define("DB_USER", "root");
define("DB_PASS", "");

define('ROOT', dirname(dirname(__FILE__)));
// Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://" . $_SERVER['SERVER_NAME']);
?>
