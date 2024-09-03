<?php
$id=$_GET['ID'];
include 'config.php';
mysqli_query($con,"DELETE FROM `tbluser` WHERE id =$id");
header('location:enduser.php');
?>