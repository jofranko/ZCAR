<?php 

include('db.php');

if(isset($_POST['user_log'])){
    $username= $_POST['l_username'];
    $password= $_POST['l_password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);
    if($result==true){
        $_SESSION['logwell']=true;
        $_SESSION['loguser']=$result;
    } else{
        $_SESSION['logwell']=false;
    }
    header("Location: index.php");
}

?>