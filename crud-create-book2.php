<?php

include('db.php');

if(isset($_POST['booking']) && !empty($_POST['b_date']) && !empty($_POST['b_user']) && !empty($_POST['b_quantity'])){
    $bookdate = $_POST['b_date'];
    $username = $_POST['b_user'];
    $booktime = $_POST['b_time'];
    $quantity = 
    if ($booktime == 'Hours') {
        $total=$quantity*5;
    }elseif ($booktime == 'Days') {
        $total = $quantity*100;
    }
    $status =$ _POST['b_status'];
    $query = "INSERT INTO book (id,bookdate,username,booktime,quantity,total,status) VALUES (NULL,'$bookdate','$username','$booktime','$quantity','$total','$status')";
    $result = mysqli_query($conn,$query);
    header("Location: crud-create-book.php");
}else{
    header("Location: control-error.php");
}
?>
