<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'header.php';

    // Consider removing this if it's not needed here
    if(isset($_SESSION['username'])){
        echo "
        <div class='container-fluid'>
            <div class='row text-center'>
                <div class='col'>
                    <h1>My Cart</h1>
                </div>
            </div>
        </div>

        <div class='container'>
            <div class='row'>
                <div class='col-lg-8'>
                    <table class='table table-responsive'>
                        <thead>
                            <th>Serial no</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            
                            <th>Action</th>
                        </thead>
                        <tbody>";

        $total = 0;
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key => $value){
                $ptotal = $value['productprice'] * $value['productquantity'];
                $total += $value['productprice'] * $value['productquantity'];
                $key = $key + 1;
                echo "
                <form action='insertcart.php' method='POST'>
                    <tr>
                        <td>$key</td>
                        <td><input type='hidden' name='t-name' value='$value[productname]' />$value[productname]</td>
                        <td><input type='hidden' name='t-price' value='$value[productprice]' />$value[productprice]</td>
                        <td><input type='number' style='width:40px;' name='quantity' value='$value[productquantity]' /></td>
                        
                        <td>
                            <button name='update' class='btn btn-warning me-2'>Update</button>
                            <button name='remove' class='btn btn-danger'>Delete</button>
                        </td>
                        <td><input type='hidden' name='item' value='$value[productname]'></td>
                    </tr>
                </form>";
            }
        }

        echo "
                        </tbody>
                    </table>
                </div>
                <div class='col-lg-4 text-center border shadow'>
                    <h3>Total</h3>
                    <ul>";
        foreach ($_SESSION['cart'] as $value) {
            echo "<li>{$value['productname']} - Rs. " . number_format($value['productprice'], 2) . "</li>";
        }
        echo "</ul>
                    <h1 class='bg-dark text-white mt-3'>Rs. " . number_format($total, 2) . "</h1>
                    <a href='payment-method.php'><button class='btn btn-primary mt-3'>PROCEED TO CHECKOUT</button></a>
                </div>
            </div>
        </div>";
    } else {
        header('location:form/login.php');
    } echo"
    <div class='container py-5 my-5'></div>
    ";
    include 'footer.php';
    ?>
</body>
</html>
