<?php
session_start();
$product_name = $_POST['t-name'];
$product_price = $_POST['t-price'];
$product_quantity = $_POST['quantity'];

// Check if quantity is not set or is less than or equal to 0
if (!isset($product_quantity) || $product_quantity <= 0) {
    echo "
    <script>
    alert('Please enter a valid quantity.');
    window.location.href='index.php';
    </script>
    ";
    exit(); // Exit the script if the quantity is invalid
}

if (isset($_POST['addcart'])) {
    // Check if $_SESSION['cart'] is set and is an array
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        $check_product = array_column($_SESSION['cart'], 'productname');

        if (in_array($product_name, $check_product)) {
            echo "
            <script>
            alert('Product already added');
            window.location.href='index.php';
            </script>
            ";
        } else {
            $_SESSION['cart'][] = array(
                'productname' => $product_name,
                'productprice' => $product_price,
                'productquantity' => $product_quantity
            );
            header("location:index.php");
        }
    } else {
        // If $_SESSION['cart'] is not set or not an array, initialize it as an empty array
        $_SESSION['cart'] = array();
        $_SESSION['cart'][] = array(
            'productname' => $product_name,
            'productprice' => $product_price,
            'productquantity' => $product_quantity
        );
        header("location:viewcart.php");
    }
}



// Check if the update button is pressed
    
if (isset($_POST['update'])) {
    $product_name_to_update = $_POST['item'];
    $new_quantity = $_POST['quantity'];

    foreach ($_SESSION['cart'] as $key => $product) {
        if ($product['productname'] === $product_name_to_update) {
            // Update the quantity of the specified product
            $_SESSION['cart'][$key]['productquantity'] = $new_quantity;
            break; // Exit the loop after updating the quantity
        }
    }

    header('Location: viewcart.php');
    exit(); // Make sure to exit after redirecting.
}



// Check if the product_id is set in the request
if (isset($_POST['remove'])) {
    $product_name_to_remove = $_POST['item'];

    if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $key => $product) {
            if ($product['productname'] === $product_name_to_remove) {
                unset($_SESSION['cart'][$key]);
                break; // Exit the loop after removing the product
            }
        }

        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    header('Location: viewcart.php');
    exit(); // Make sure to exit after redirecting.
}









?>
