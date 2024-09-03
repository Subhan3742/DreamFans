<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .main {
            padding: 20px;
        }

        @media (max-width: 576px) {
            .navbar-nav {
                margin-top: 10px;
            }

            .fs-5 {
                margin-top: 10px;
            }
        }
    </style>
</head>



<body>

<?php
include 'header.php';
?>


    
    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-3 bg-warning m-5 p-3 shadow">
        <a href="Addproduct.php" class="text-decoration-none text-center text-white"> <h2>ADD Post</h2></a>
        </div>
    </div>
</div>



    <div class="table-responsive">
        <table class="table table-hover mt-4 ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Page</th>
               
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include 'config.php';
            $record = mysqli_query($con, "select * from tblproduct");
            while ($row = mysqli_fetch_array($record)) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['t-name']}</td>
                    <td>{$row['t-price']}</td>
                    <td><img width='auto' height='100px' src='{$row['t-image']}'></td>
                    <td>{$row['t-page']}</td>
                    
                    <td>
                        <a href='update.php?ID={$row['id']}' class='btn btn-warning text-white'>Update</a>
                        <a href='delete.php?ID={$row['id']}' class='btn btn-danger '>Delete</a>
                    </td>
                    
                </tr>
                ";
            }
            ?>
            </tbody>
        </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJopLbrdLWq8jTOEKKOYg1pDkhI6u"
        crossorigin="anonymous"></script>
</body>
</html>
