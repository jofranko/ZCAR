<?php

include('db.php');

if(isset($_POST['user-sign'])){
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $identification= $_POST['identification'];
    $card_name= $_POST['card_name'];
    $card_number= $_POST['card-number'];
    $card_expiry_date= $_POST['card_expiry_date'];
    $card_cvv= $_POST['card_cvv'];
    
    $query= "INSERT INTO users(first_name,last_name,email,username,password,identification,card_name,card_number,card_expiry_date,card_cvv) VALUES (:first_name,:last_name,:email,:username,:password,:identification,:card_name,:card_number,:card_expiry_date,:card_cvv)";
    $result=mysqli_query($conn,$query);
    if (!$result){
        $repetido1= "SELECT * FROM users WHERE users.username=$username";
        $abr1=mysqli_query($conn,$repetido1);
        $repetido2= "SELECT * FROM users WHERE users.email=$email";
        $abr2=mysqli_query($conn,$repetido2);
        if($abr1){
            $_SESSION['user_rep'] = 'Current username is used';
        }
        if($abr2){
            $_SESSION['email_rep'] = 'Current email is used';
        }
    }
    header("Location: index.php");
}
?>
