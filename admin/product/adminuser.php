<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<?php
include 'header.php';
?>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-3 bg-warning m-5 p-3 shadow">
        <a href="add_admin.php" class="text-decoration-none text-center text-white"> <h2>ADD ADMIN</h2></a>
        </div>
    </div>
</div>
    
<div class="table-responsive">
        <table class="table table-hover mt-4 ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include 'config.php';
            $record = mysqli_query($con, "select * from adminuser");
            while ($row = mysqli_fetch_array($record)) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['A-Name']}</td>
                    <td>{$row['A-Password']}</td>
                    <td>
                        
                        <a href='delete_admin.php?ID={$row['id']}' class='btn btn-danger '>Delete</a>
                    </td>
                    
                </tr>
                ";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>