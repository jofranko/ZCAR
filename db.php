<?php
define('DB_HOST', 'b7ncxfxzwxonsblshjek-mysql.services.clever-cloud.com');
define('DB_USER', 'u40wkasg5lvdfpad');
define('DB_PASSWORD', '3anD8tL91W2pJlMDVsTg');
define('DB_NAME', 'b7ncxfxzwxonsblshjek');


$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());	
} else{
	session_start();
}

if(isset($_POST['user_log'])){
    $username= $_POST['f_l_username'];
    $password= md5(md5($_POST['f_l_password']));

    $query = "SELECT * FROM users WHERE users.username='$username' AND users.password='$password'";
    $result = mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['logfail']='Unsuccessful entry';
    }
    if($result){
        $_SESSION['logwell']='Successful entry';
        $_SESSION['loguser']=$username;
    }
    header("Location: index.php");
}

?>