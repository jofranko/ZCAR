<?php 

include('db.php');

if(isset($_POST['user_log'])){
    $username= $_POST['l_username'];
    $password= $_POST['l_password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['logwell']=true;
        $_SESSION['loguser']=$username;
    }else{
    	header("Location: control/control-login.php");
    }
}
?>