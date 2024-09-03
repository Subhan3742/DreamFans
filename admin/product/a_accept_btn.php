<?php
$id = $_GET['ID'];
include 'config.php';

// Use prepared statements to prevent SQL injection
$query = "UPDATE `customized-order` SET `accept` = 'pending' WHERE `id` = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

// Check if the update was successful
if (mysqli_stmt_affected_rows($stmt) > 0) {
    header('location:c-c-order1.php');
} 

// Close the statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($con);
?>
