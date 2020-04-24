<?php 

include('db.php');

if(isset($_POST['user-log'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    $query = "SELECT * FROM users WHERE users.username=$username and users.password=$password";
    $result = mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['logfail']="Unsuccessful entry";
    }
    if($result){
        $_SESSION['logwell']="Successful entry";
        $_SESSION['loguser']=$username;
        header("Location: index.php");
    }
    
}

?>