<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
<?php
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    processOrder();
}

function processOrder() {
    include 'config.php';

    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Postal = $_POST['postal'];
    $Address = $_POST['address'];
    $Product = $_POST['product'];
    $Total = $_POST['total'];
    $Order_id = $_POST['order-id'];
    $Accept = $_POST['accept'];

    $product_image = $_FILES['pimage'];
    $img_loc = $_FILES['pimage']['tmp_name'];
    $img_name = $_FILES['pimage']['name'];
    $img_dest = "uploadimage/" . $img_name;
    move_uploaded_file($img_loc, $img_dest);

    // Use prepared statements to prevent SQL injection
    $query = "INSERT INTO `paid-order`(`order-no`, `name`, `product`, `phone`, `postal-code`, `address`, `payment`, `p-status`, `image`, `accept`) VALUES (?, ?, ?, ?, ?, ?, ?, '[Paid]', ?, 'order')";
    $stmt = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($stmt, "isssssss", $Order_id, $Name, $Product, $Phone, $Postal, $Address, $Total, $img_dest);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                
                setTimeout(function() {
                    window.location.href = 'receipt.php';
                }, 1000); // Redirect after 1000 milliseconds (1 second)
              </script>";
        $_SESSION['cart'] = array();
        exit();
    } else {
        echo "<script>
                alert('Failed to place order. Please try again.');
                setTimeout(function() {
                    window.location href = 'index.php';
                }, 1000); // Redirect after 1000 milliseconds (1 second)
              </script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>
<div class="container-fluid py-5 mb-5 shadow">
    <div class="row justify-content-center  ">
        <h1 class="text-center">Bank Transfer</h1>
        <div class="col-md-3 border">
            <img src="images/hbl.png" width="30%">
            <h6>Account Number: 02907980837103</h6>
            <h6>IBAN PK00002079808327105</h6>
</div>
<div class="col-md-3 border">
            <img src="images/meezan.png" width="30%" ">
            <h6>Account Number: 02907980837103</h6>
            <h6>IBAN PK00002079808327105</h6>
</div>
<div class="col-md-3 border">
            <img src="images/ubl.png" width="30%">
            <h6>Account Number: 02907980837103</h6>
            <h6>IBAN PK00002079808327105</h6>
</div>
<p class="text-center mt-2"><b>NOTE: </b>After Successfully transaction Attach the transaction receipt in the form</P>
</div>
</div>
<div class="container mb-5">
    <div class="row">
        <div class="col-md-6">
            <form action="online-payment.php" method="POST" enctype="multipart/form-data" onsubmit="return processForm()">
                <?php
                $total = 0;
                $productDetails = "";

                // Check if the 'cart' session variable is set and is an array
                if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $value) {
                        $total += $value['productprice'] * $value['productquantity'];
                        // Concatenate product details
                        $productDetails .= "{$value['productname']} = {$value['productprice']} x {$value['productquantity']}, ";
                    }

                    // Remove the trailing comma and space
                    $productDetails = rtrim($productDetails, ', ');

                    // Display all array data in one text field
                    echo "<input class='form-control' type='hidden' name='product' value='$productDetails'>";
                } else {
                    echo "<p>No items in the cart</p>";
                }

                $_randomNumber = mt_rand(1, 10000);
                $total = $total + 300;
                echo "<input class='form-control' type='hidden' value='$total' name='total'>
                      <input class='form-control' type='hidden' value='$_randomNumber' name='order-id'>";
                ?>
                <input class="form-control" type="hidden" placeholder="accept" value="accept" name="accept" required>
                <label>Name</label>
                <input class="form-control" type="text" placeholder="Enter your name" value="" name="name" required>
                <label>Email</label>
                <input class="form-control" type="text" placeholder="Enter your email" value="" name="email" required>
                <label>Phone</label>
                <input class="form-control" type="text" placeholder="Enter your number" value="" name="phone" required>
                <label>Postal Code</label>
                <input class="form-control" type="text" placeholder="Enter your postal code" value="" name="postal" required>
                <label>Address</label>
                <input class="form-control" type="text" placeholder="Enter your Address" value="" name="address" required>
                <label class="form-label">Transaction Receipt </label>
                <input type="file" class="form-control" name="pimage" required>
                <button class="w-100 mt-2 btn btn-danger" name="order" type="submit">Place Order</button>
            </form>
        </div>
            

        <div class="col-md-4 ms-auto ">
            <?php
            echo "
                <div class='col text-center border shadow '>
                    <h2>Order no  $_randomNumber</h2>
                    <ul>";

            // Initialize total outside the loop
            $total = 0;

            // Check if the 'cart' session variable is set and is an array
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $value) {
                    // Accumulate the total inside the loop
                    $total += $value['productprice'] * $value['productquantity'];
                    echo "<li class='text-start'>{$value['productname']} = {$value['productprice']} , {$value['productquantity']}</li>";
                }
            } else {
                echo "<p>No items in the cart</p>";
            }

            echo "</ul>
                    <h6 class='text-start ms-3'>Delivery charges = 300 </h6>
                    <h1 class='bg-dark text-white mt-3'>Rs. " . number_format($total + 300, 2) . "</h1>
                </div>";
            ?>
        </div>
            
        


    </div>
 
</div>
<?php
include 'footer.php';
?>
</body>
</html>
