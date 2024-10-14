<?php
   
$host = "192.227.85.170"; 
$user = "midsupport_mid"; 
$pass = "MidDbano1"; 
$database = "midsupport_mid"; 
// Connecting to the Database 
$connect = @mysql_connect($host, $user, $pass) or die("could not connect to server"); 

// Selecting the Database for use 
$db_select = @mysql_select_db($database) or die("could not select the database"); 


?>
