<?php

include('db.php');

if(isset($_POST['user_sign'])){
    $first_name= $_POST['s_first_name'];
    $last_name= $_POST['s_last_name'];
    $email= $_POST['s_email'];
    $username= $_POST['s_username'];
    $password= $_POST['s_password'];
    $identification= $_POST['s_identification'];
    $card_name= $_POST['s_card_name'];
    $card_number= $_POST['s_card_number'];
    $card_expiry_date= $_POST['s_card_expiry_date'];
    $card_cvv= $_POST['card_cvv'];
    
    $test = "SELECT * FROM users WHERE username='$username'";
    $test_result = mysqli_query($conn,$test);
    $test2 = "SELECT * FROM users WHERE email='$email'";
    $test_result2 = mysqli_query($conn,$test2);
    if(mysqli_num_rows($test_result) > 0){
        $used_username='Current USERNAME is already used';
        $_SESSION["control"]=$used_username;
        header("Location: control.php");
    } elseif (mysqli_num_rows($test_result2) > 0) {
        $used_email='Current EMAIL is already used';
        $_SESSION["control"]=$used_email;
        header("Location: control.php");
    }else{
        $query = "INSERT INTO users (first_name,last_name,email,username,password,identification,card_name,card_number,card_expiry_date,card_cvv) VALUES ('$first_name','$last_name','$email','$username','$password','$identification','$card_name','$card_number','$card_expiry_date','$card_cvv')";
        $result = mysqli_query($conn,$query);
        $_SESSION["control"]='Account created successfully';
        header("Location: control.php");
    }
}
?>
