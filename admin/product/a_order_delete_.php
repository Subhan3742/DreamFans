<?php
$id = $_GET['ID'];
include 'config.php';

// Use a prepared statement to delete the record
$stmt = mysqli_prepare($con, "DELETE FROM `customized-order` WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

// Redirect to the desired page
header('location:c-c-order3.php');
exit;
?>
