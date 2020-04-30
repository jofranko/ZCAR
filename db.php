<?php

$DB_HOST = "b7ncxfxzwxonsblshjek-mysql.services.clever-cloud.com";
$DB_USER = "u40wkasg5lvdfpad";
$DB_PASSWORD = "3anD8tL91W2pJlMDVsTg";
$DB_NAME = "b7ncxfxzwxonsblshjek";

$conn = new @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());	
} else{
	session_start();
}

?>