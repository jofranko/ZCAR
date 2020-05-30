<?php 

if(isset($_POST['email'] && !empty($_POST['c_name']) && !empty($_POST['c_email']) && !empty($_POST['c_message'])) {
    $to = "jofranko@uninorte.edu.co";
    $header = "From:".$_POST['c_email'];
    $subject = $_POST['c_name'];
    $message = $_POST['c_message'];
    mail($to,$subject,$message,$header);
    header("Location: contact.html");
}else{
        header("Location: control-error.html");
    
}
?>