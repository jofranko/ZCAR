<?php

include('db.php');

if(isset($_POST['booking']) && !empty($_POST['b_time']) && !empty($_POST['b_quantity'])){
    $bookdate = date("d-m-Y");
    $username = $_SESSION['loguser'];
    $booktime= $_POST['b_time'];
    $quantity= $_POST['b_quantity'];
    if ($booktime=='Hours' || $booktime=='hours') {
        $total=$quantity*5;
    }elseif ($booktime=='Days' || $booktime=='days') {
        $total=$quantity*100;
    }else{
        $booktime='Hours'
        $total=$quantity*5;
    }
    $query = "INSERT INTO book (bookdate,username,booktime,quantity,total) VALUES ('$bookdate','$username','$booktime','$quantity','$total')";
    $result = mysqli_query($conn,$query);
    header("Location: index.php");
}else{
    header("Location: control-error.php");
}
?>
