<?php

$conn = mysqli_connect('b7ncxfxzwxonsblshjek-mysql.services.clever-cloud.com','u40wkasg5lvdfpad','3anD8tL91W2pJlMDVsTg','b7ncxfxzwxonsblshjek');

if($conn == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else{
	session_start();
}

?>
<!-- HOST, USER, PASS, DB_NAME -->