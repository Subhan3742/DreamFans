<?php
include 'config.php';

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Message = $_POST['message'];

    $query = "INSERT INTO `complain`( `name`, `email`, `phone`, `message`)
     VALUES (' $Name','$Email ',' $Number ',' $Message ')";
   
mysqli_query($con, $query);

header('location:contact.php');



}



?>
