<?php
require('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$sub = $_POST['sub'];
$message = $_POST['message'];

$query = "INSERT INTO `conntact`( `name`, `email`, `subject`, `phone`, `message`) 
        VALUES ('$name','$email','$phone_number','$sub','$message')" ;

$exe = mysqli_query($conn, $query);
if($exe){
    echo "innserted";
}
else{
    echo "failed";
}
?>