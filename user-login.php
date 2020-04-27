<?php 

include('db.php');

if(isset($_POST['user_log'])){
    $username= $_POST['f_l_username'];
    $password= $_POST['f_l_password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
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