<?php 

include('db.php');

if(isset($_POST['c_d']) && !empty($_POST['c_d_id'])){
    $table = $_POST['c_d_table'];
    $id = $_POST['c_d_id'];
    if ($table == 'book') {
    	$query = "DELETE FROM book WHERE id = '$id'";
    	$result = mysqli_query($conn,$query);
    }elseif ($table == 'users') {
    	$query = "DELETE FROM users WHERE id = '$id'";
    	$result = mysqli_query($conn,$query);
    }else{
    	header("Location: control-error.php");
    }
}else{
    header("Location: crud.php");
}
?>