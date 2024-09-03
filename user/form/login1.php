<?php

$con = mysqli_connect('localhost', 'root', '', 'tblproduct');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['already'])) {

    echo "
    <script>
    window.location.href='register.php';
    </script>
    ";

}
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $result=mysqli_query($con," SELECT * FROM `tbluser` WHERE (name='$name' OR email='$name') AND password='$password'");
    if(mysqli_num_rows($result)){
        echo"
        <script>
        alert('Successful Login');
        window.location.href='../index.php';
        </script>
        ";
$_SESSION['username']=$name;

    }

else{
    echo"
        <script>
        alert('incorrect email/username/password');
        window.location.href='login.php';
        </script>
        ";
}


}
?>