<?php

ini_set('error_reporting', E_ALL | E_STRICT);   // !! change to 0 after debug
ini_set('display_errors', 1);                   // !! change to 0 after debug

//Timezone--------------------------------
date_default_timezone_set('Europe/Brussels');

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PWD', '');
define ('DB_NAME', 'db_concerts');
define ('MYSQL_DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8');

?>