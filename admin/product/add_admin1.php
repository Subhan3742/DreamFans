<?php 


if (isset($_POST['submit'])) {
    $Name = $_POST['username'];
    $Password = $_POST['password'];
    include 'config.php';
$query = "INSERT INTO `adminuser` (`A-Name`,`A-Password`) 
                  VALUES (?, ?)";

        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "ss", $Name, $Password);
        mysqli_stmt_execute($stmt);

        echo "
        <script>
        alert('Registration successful');
        window.location.href='adminuser.php';
        </script>
        ";
}
        ?>