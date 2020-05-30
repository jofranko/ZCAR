<?php 

include('db.php');

if(isset($_POST['user_log']) && !empty($_POST['l_username']) && !empty($_POST['l_password'])){
    $username= $_POST['l_username'];
    $password= $_POST['l_password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['logwell']=true;
        $_SESSION['loguser']=$username;
        header("Location: index.php");
    }else{
    	header("Location: control-login.php");
    }
}else{
    header("Location: control-login.php");
}
?>