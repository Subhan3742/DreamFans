<?php

$con = mysqli_connect('localhost', 'root', '', 'tblproduct');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['already'])) {

    echo "
    <script>
    window.location.href='login.php';
    </script>
    ";
}
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $Dup_Email = mysqli_prepare($con, "SELECT * FROM `tbluser` WHERE email = ?");
    mysqli_stmt_bind_param($Dup_Email, "s", $Email);
    mysqli_stmt_execute($Dup_Email);
    mysqli_stmt_store_result($Dup_Email);

    $Dup_Username = mysqli_prepare($con, "SELECT * FROM `tbluser` WHERE name = ?");
    mysqli_stmt_bind_param($Dup_Username, "s", $Name);
    mysqli_stmt_execute($Dup_Username);
    mysqli_stmt_store_result($Dup_Username);

    // Check for duplicate email
    if (mysqli_stmt_num_rows($Dup_Email) > 0) {
        echo "
        <script>
        alert('This email is already taken');
        window.location.href='register.php';
        </script>
        ";
    } elseif (mysqli_stmt_num_rows($Dup_Username) > 0) {
        // Check for duplicate username
        echo "
        <script>
        alert('This username is already taken');
        window.location.href='register.php';
        </script>
        ";
    } else {
        // Insert the new user
        $query = "INSERT INTO `tbluser` (`name`, `email`, `number`, `password`) 
                  VALUES (?, ?, ?, ?)";

        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $Name, $Email, $Number, $Password);
        mysqli_stmt_execute($stmt);

        echo "
        <script>
        alert('Registration successful');
        window.location.href='login.php';
        </script>
        ";
    }

    mysqli_close($con);
}
?>
