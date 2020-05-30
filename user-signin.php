<?php

include('db.php');

if(isset($_POST['user_sign']) && !empty($_POST['s_first_name']) && !empty($_POST['s_last_name']) && !empty($_POST['s_email']) && !empty($_POST['s_username']) && !empty($_POST['s_password']) && !empty($_POST['s_identification']) && !empty($_POST['s_card_name']) && !empty($_POST['s_card_number']) && !empty($_POST['s_card_expiry_date']) && !empty($_POST['s_card_cvv'])){
    $first_name= $_POST['s_first_name'];
    $last_name= $_POST['s_last_name'];
    $email= $_POST['s_email'];
    $username= $_POST['s_username'];
    $password= $_POST['s_password'];
    $identification= $_POST['s_identification'];
    $card_name= $_POST['s_card_name'];
    $card_number= $_POST['s_card_number'];
    $card_expiry_date= $_POST['s_card_expiry_date'];
    $card_cvv= $_POST['s_card_cvv'];
    
    $test = "SELECT * FROM users WHERE username='$username'";
    $test_result = mysqli_query($conn,$test);
    $test2 = "SELECT * FROM users WHERE email='$email'";
    $test_result2 = mysqli_query($conn,$test2);
    if(mysqli_num_rows($test_result) > 0){
        header("Location: control-username.php");
    } elseif (mysqli_num_rows($test_result2) > 0) {
        header("Location: control-email.php");
    }else{
        $query = "INSERT INTO users (id,first_name,last_name,email,username,password,identification,card_name,card_number,card_expiry_date,card_cvv) VALUES (NULL,'$first_name','$last_name','$email','$username','$password','$identification','$card_name','$card_number','$card_expiry_date','$card_cvv')";
        $result = mysqli_query($conn,$query);
        header("Location: control-created.php");
    }
}else{
    header("Location: control-error.php");
}
?>
