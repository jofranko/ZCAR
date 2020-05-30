<?php

include('db.php');

if(isset($_POST['booking'])){
    $bookdate = date("d-m-Y");
    $username = $_SESSION['loguser'];
    $time= $_POST['b_time'];
    $quantity= $_POST['b_quantity'];
    if ($time=='Hours') {
        $total=$quantity*5;
    }
    if ($time=='Days') {
        $total=$quantity*100;
    }
    $query = "INSERT INTO book (bookdate,username,email,username,password,identification,card_name,card_number,card_expiry_date,card_cvv) VALUES ('$first_name','$last_name','$email','$username','$password','$identification','$card_name','$card_number','$card_expiry_date','$card_cvv')";
    $result = mysqli_query($conn,$query);
    header("Location: index.php");

}
?>
