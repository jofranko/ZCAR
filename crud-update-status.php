<?php 

include('db.php');

if(isset($_POST['status']) && !empty($_POST['c_u_s_id'])){
    $id = $_POST['c_u_s_id'];
    $status = $_POST['c_u_s_status'];
    if ($status == 'Waiting') {
        $query = "UPDATE book SET status = '$status' WHERE id = '$id'";      
        $result = mysqli_query($conn,$query);
        header("Location: crud-read-book.php");   
    }elseif ($status == 'Taken') {
        $query = "UPDATE book SET status = '$status' WHERE id = '$id'";      
        $result = mysqli_query($conn,$query);
        header("Location: crud-read-book.php");   
    }elseif ($status == 'Returned') {
        $query = "UPDATE book SET status = '$status' WHERE id = '$id'";      
        $result = mysqli_query($conn,$query);
        header("Location: crud-read-book.php");   
    }
}else{
    header("Location: control-error.php");
}
?>