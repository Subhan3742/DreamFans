<?php
$id=$_GET['ID'];
include 'config.php';
mysqli_query($con,"DELETE FROM `adminuser` WHERE id =$id");
header('location:adminuser.php');
?>

