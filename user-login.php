<?php 

include('db.php');

if(isset($_POST['user_log'])){
    $username= $_POST['l_username'];
    $password= $_POST['l_password'];

    $query = "SELECT * FROM users WHERE users.username='$username' AND users.password='$password'";
    $result = mysqli_query($conn,$query);
    if(isset($result)){
        $_SESSION['logwell']=true;
        $_SESSION['loguser']=$result;
    } else{
        $_SESSION['logwell']=false;
    }
    header("Location: index.php");
}

?>