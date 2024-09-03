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
        <a href="order1.php" class="text-decoration-none text-center text-white"> <h2>Order</h2></a>
        </div>
        <div class="col-3 bg-warning m-2 p-3 shadow">
        <a href="order2.php" class="text-decoration-none text-center text-white"> <h2>Pending Order</h2></a>
        </div>
        <div class="col-3 bg-danger m-2 p-3 shadow">
        <a href="order3.php" class="text-decoration-none text-center text-white"> <h2>Delivered Order</h2></a>
        </div>
    </div>
</div>



<div class="main">
    <div class="table-responsive">
        <table class="table table-hover mt-4 ">
            <thead>
            <tr>
            <th>Order no</th>
                    <th>Name</th>
                    <th>Product</th>
                    <th>Phone</th>
                    <th>Postal Code</th>
                    <th>Address</th>
                    <th>Payment</th>
                    <th>P-Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include 'config.php';
            $record = mysqli_query($con, "SELECT * FROM `order`");
            while ($row = mysqli_fetch_array($record)) {
                $check_page = $row['accept'];
                if ($check_page === 'pending') {
                echo "
                <tr class='border'>
                <td class='border'>{$row['order-no']}</td>
                <td class='border'>{$row['name']}</td>
                <td class='border'>{$row['product']}</td>
                <td class='border'>{$row['phone']}</td>
                <td class='border'>{$row['postal-code']}</td>
                <td class='border'>{$row['address']}</td>
                <td class='border'>{$row['payment']}</td>
                <td class='border'>{$row['p-status']}</td>
                <td>
                <a href='deliver_btn.php?ID={$row['order-no']}'   class='btn btn-warning text-white'>Deliver</a>
                
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
