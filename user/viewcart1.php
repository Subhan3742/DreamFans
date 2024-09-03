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

    // Use prepared statements to prevent SQL injection
    $query = "INSERT INTO `order`(`order-no`, `name`, `product`, `phone`, `postal-code`, `address`, `payment`, `p-status`, `accept`)
    VALUES (?, ?, ?, ?, ?, ?, ?, '[un-paid]', 'order')";
$stmt = mysqli_prepare($con, $query);

mysqli_stmt_bind_param($stmt, "issssss", $Order_id, $Name, $Product, $Phone, $Postal, $Address, $Total);

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
                    window.location.href = 'index.php';
                }, 1000); // Redirect after 1000 milliseconds (1 second)
              </script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="viewcart1.php" method="POST" onsubmit="return processForm()">
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
                <input class="form-control" type='text' placeholder="Enter your Address" value="" name="address" required>

                </br>
                

                <button class="w-100 mt-2 btn btn-danger" name="order" type="submit">Place Order</button>
            </form>
        </div>

        <script>
    function processForm() {
        var checkbox1 = document.getElementById('checkbox1');
        var checkbox2 = document.getElementById('checkbox2');
        var name = document.getElementsByName('name')[0].value;
        var email = document.getElementsByName('email')[0].value;
        var phone = document.getElementsByName('phone')[0].value;
        var postal = document.getElementsByName('postal')[0].value;
        var address = document.getElementsByName('address')[0].value;

        if (name === '' || email === '' || phone === '' || postal === '' || address === '') {
            alert('Please fill in all required fields.');
            return false; // Prevent the form submission
        }

    }
</script>

        <div class="col-md-4 ms-auto">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
