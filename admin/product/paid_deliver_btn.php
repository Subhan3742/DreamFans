<?php
$id = $_GET['ID'];
include 'config.php';

// Use prepared statements to prevent SQL injection
$query = "UPDATE `paid-order` SET `accept` = 'deliver' WHERE `order-no` = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    header('location:paidorder2.php');
} 


// Close the statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($con);
?>
