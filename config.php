<?php
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'db_profiteer');
define('DB_SERVER', '172.20.4.236');
define('DB_USERNAME', 'sachinpandey');
define('DB_PASSWORD', 'S@ch!nP@321');
define('DB_NAME', 'db_grab_prod');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

#contract with grab
define('CLIENT_PERORDER', '60');
define('RIDER_PERORDER', '50');
?>