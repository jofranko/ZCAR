<?php 

include('db.php');

if(isset($_POST['c_u']) && !empty($_POST['c_u_id']) && !empty($_POST['c_u_data'])){
    $table = $_POST['c_u_table'];
    $id = $_POST['c_u_id'];
    $column_book = $_POST['c_u_column_book'];
    $column_users = $_POST['c_u_column_users'];
    $data = $_POST['c_u_data'];
    if ($table == 'book') {
        if ($column_book == 'bookdate') {
            $query = "UPDATE book SET bookdate = '$data' WHERE id = '$id'";      
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_book == 'username') {
            $query = "UPDATE book SET username = '$data' WHERE id = '$id'";       
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_book == 'booktime') {
            $query = "UPDATE book SET booktime = '$data' WHERE id = '$id'";     
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_book == 'quantity') {
            $query = "UPDATE book SET quantity = '$data' WHERE id = '$id'";        
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_book == 'total') {
            $query = "UPDATE book SET total = '$data' WHERE id = '$id'";        
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }else{
            header("Location: control-error.php");
        }book
    }elseif ($table == 'users') {
        if ($column_users == 'first_name') {
            $query = "UPDATE users SET first_name = '$data' WHERE id = '$id'";      
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'last_name') {
            $query = "UPDATE users SET last_name = '$data' WHERE id = '$id'";       
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'email') {
            $query = "UPDATE users SET email = '$data' WHERE id = '$id'";       
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'username') {
            $query = "UPDATE users SET username = '$data' WHERE id = '$id'";        
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'password') {
            $query = "UPDATE users SET password = '$data' WHERE id = '$id'";        
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'identification') {
            $query = "UPDATE users SET identification = '$data' WHERE id = '$id'";      
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'card_name') {
            $query = "UPDATE users SET card_name = '$data' WHERE id = '$id'";       
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'card_number') {
            $query = "UPDATE users SET card_number = '$data' WHERE id = '$id'";     
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'card_expiry_date') {
            $query = "UPDATE users SET card_expiry_date = '$data' WHERE id = '$id'";        
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }elseif ($column_users == 'card_cvv') {
            $query = "UPDATE users SET card_cvv = '$data' WHERE id = '$id'";        
            $result = mysqli_query($conn,$query);
            header("Location: crud.php");   
        }else{
            header("Location: control-error.php");
        }
    }else{
    	header("Location: control-error.php");
    }
}else{
    header("Location: crud.php");
}
?>