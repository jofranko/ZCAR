<?php 

if(isset($_POST['user_log'])){

    require_once('db.php');
    $username= $_POST['l_username'];
    $password= $_POST['l_password'];

    $query = mysqli_query($conn,"SELECT * FROM users WHERE users.username='$username' AND users.password='$password'");
    $result = mysqli_num_rows($query);
    if($result>0){
        session_start();
        $_SESSION['logwell']=true;
        $_SESSION['loguser']=$username;
        header("Location: book.php");
    }else{
        $alert = "Wrong username or password"
        header("Location: index.php");
    }
}

?>