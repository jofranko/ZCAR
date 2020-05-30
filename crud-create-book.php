<?php 
include('db.php') 

if(isset($_POST['c_c_b_']) && !empty($_POST['c_c_b_user']) && !empty($_POST['c_c_b_date']) && !empty($_POST['c_c_b_time']) && !empty($_POST['c_c_b_quantity'])){
    $bookdate = $_POST['c_c_b_user'];
    $username = $_POST['c_c_b_date'];
    $booktime = $_POST['c_c_b_time'];
    $quantity = $_POST['c_c_b_quantity'];
    if ($booktime == 'Hours') {
        $total=$quantity*5;
    }elseif ($booktime == 'Days') {
        $total = $quantity*100;
    }
    $query = "INSERT INTO book (id,bookdate,username,booktime,quantity,total) VALUES (NULL,'$bookdate','$username','$booktime','$quantity','$total')";
    $result = mysqli_query($conn,$query);
    header("Location: crud.php");
}else{
    header("Location: control-error.php");
}
?>