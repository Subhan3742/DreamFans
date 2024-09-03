<?php

$con = mysqli_connect('localhost', 'root', '', 'tblproduct');

$adminName = $_POST['username'];
$adminPassword = $_POST['password']; // Fixed the missing '$_POST' here

$query = "SELECT * FROM `adminuser` WHERE `A-Name` = '$adminName' AND `A-Password` = '$adminPassword'";

$result = mysqli_query($con, $query);
session_start();


if (mysqli_num_rows($result)) { 

    $_SESSION['admin']=$adminName;
    echo "
    <script>
    alert('Login Successful'); // Changed 'Alert' to 'alert' and fixed typo 'Sucessful' to 'Successful';
    window.location.href='../product/dashboard.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Login Fail'); // Changed 'Alert' to 'alert'
    window.location.href='login.php';
    </script>
    ";
}

?>


