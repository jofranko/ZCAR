<?php

include('db.php');

if(isset($_POST['booking'])){
    $bookdate = date("d-m-Y");
    $username = $_SESSION['loguser'];
    $booktime= $_POST['b_time'];
    $quantity= $_POST['b_quantity'];
    if ($time=='Hours') {
        $total=$quantity*5;
    }
    if ($time=='Days') {
        $total=$quantity*100;
    }
    $query = "INSERT INTO book (bookdate,username,booktime,quantity) VALUES ('$bookdate','$username','$booktime','$quantity')";
    mysqli_query($conn,$query);
    header("Location: index.php");
}
?>
