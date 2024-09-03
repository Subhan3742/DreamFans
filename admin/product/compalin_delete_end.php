<?php
$id=$_GET['ID'];
include 'config.php';
mysqli_query($con,"DELETE FROM `complain` WHERE id =$id");
header('location:complain.php');
?>