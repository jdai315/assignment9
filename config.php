<?php
/* Database credentials */
define('DB_SERVER', '66.147.242.186');
define('DB_USERNAME', 'urcscon3_juneau');
define('DB_PASSWORD', 'coffee1N');
define('DB_NAME', 'urcscon3_juneau');
 
/* Attempt to connect to MySQL database */
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>