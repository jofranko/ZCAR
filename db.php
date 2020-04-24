<?php

$db_host = "b7ncxfxzwxonsblshjek-mysql.services.clever-cloud.com";
$db_user= "u40wkasg5lvdfpad";
$db_password = "3anD8tL91W2pJlMDVsTg";
$db_name= "b7ncxfxzwxonsblshjek";

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

session_start();

?>
<!-- HOST, USER, PASSWORD, DB_NAME -->