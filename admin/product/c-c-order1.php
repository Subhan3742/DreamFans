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
    <div class="col-3 bg-primary m-2 p-3 shadow">
        <a href="c-c-order1.php" class="text-decoration-none text-center text-white"> <h2>Order</h2></a>
        </div>
        <div class="col-3 bg-warning m-2 p-3 shadow">
        <a href="c-c-order2.php" class="text-decoration-none text-center text-white"> <h2>Pending Order</h2></a>
        </div>
        <div class="col-3 bg-danger m-2 p-3 shadow">
        <a href="c-c-order3.php" class="text-decoration-none text-center text-white"> <h2>Delivered Order</h2></a>
        </div>
    </div>
</div>



<div class="main">
    <div class="table-responsive">
        <table class="table table-hover mt-4 ">
            <thead>
            <tr>
            <th>Id</th>
            <th>Model Name</th>
            <th>Body Color</th>
            <th>Blade Color</th>
            <th>Blade Type</th>
            <th>Inner color</th>
            <th>Outer color</th>
            <th>Cup design</th>
            <th>Canopy</th>
            <th>Winding</th>
            <th>Plate design</th>
            <th>Salai</th>
            <th>Nok</th>
            <th>Side box</th>
            <th>Descreption</th>
            <th>Image</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include 'config.php';
            $record = mysqli_query($con, "SELECT * FROM `customized-order`");
            while ($row = mysqli_fetch_array($record)) {
                $check_page = $row['accept'];
              if ($check_page === 'order') {
                echo "
                <tr class='border'>
                <td class='border'>{$row['id']}</td>
                <td class='border'>{$row['model-name']}</td>
                <td class='border'>{$row['body-color']}</td>
                <td class='border'>{$row['blade-color']}</td>
                <td class='border'>{$row['blade-type']}</td>
                <td class='border'>{$row['color-inner']}</td>
                <td class='border'>{$row['color-outer']}</td>
                <td class='border'>{$row['cup-design']}</td>
                <td class='border'>{$row['canopy']}</td>
                <td class='border'>{$row['winding']}</td>
                <td class='border'>{$row['plate-design']}</td>
                <td class='border'>{$row['salai']}</td>
                <td class='border'>{$row['nok']}</td>
                <td class='border'>{$row['side-box']}</td>
                <td class='border'>{$row['descreption']}</td>
                <td><img width='auto' height='100px' src='../../user/{$row['image']}'></td>
                <td class='border'>{$row['name']}</td>
                <td class='border'>{$row['contact']}</td>
                <td class='border'>{$row['email']}</td>
                <td class='border'>{$row['address']}</td>
                <td>
                <a href='a_accept_btn.php?ID={$row['id']}'  class='btn btn-warning text-white'>Accept</a>
                
                </td>   
                </tr>
                ";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJopLbrdLWq8jTOEKKOYg1pDkhI6u"
        crossorigin="anonymous"></script>
</body>
</html>
