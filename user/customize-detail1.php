<?php
include 'config.php';

if(isset($_POST['submit'])){
    $product_name = $_POST['name'];
    $product_body_color = $_POST['body-color'];
    $product_blade_color = $_POST['blade-color'];
    $product_blade_type = $_POST['blade-type'];
    $product_inner_color = $_POST['color-inner'];
    $product_outer_color = $_POST['color-outer'];
    $product_cup_design = $_POST['cup-design'];
    $product_canopy = $_POST['canopy'];
    $product_winding = $_POST['winding'];
    $product_plate_design = $_POST['plate-design'];
    $product_salai = $_POST['salai'];
    $product_nok = $_POST['nok'];
    $product_sidebox = $_POST['sidebox'];
    $product_descreption = $_POST['descreption'];
    $product_image = $_FILES['pimage'];
     $img_loc = $_FILES['pimage']['tmp_name'];
    $img_name = $_FILES['pimage']['name'];
    $img_dest = "uploadimage/" . $img_name;
    move_uploaded_file($img_loc, $img_dest);
    $product_customer_name = $_POST['C-name'];
    $product_contact = $_POST['contact'];
    $product_email = $_POST['email'];
    $product_address = $_POST['address'];



    $query = "INSERT INTO `customized-order` (`model-name`, `body-color`, `blade-color`, `blade-type`, `color-inner`, `color-outer`, `cup-design`, `canopy`, `winding`, `plate-design`, `salai`, `nok`, `side-box`, `descreption`, `image`, `name`, `contact`, `email`, `address`, `accept`)
VALUES ('$product_name', '$product_body_color', '$product_blade_color', '$product_blade_type', '$product_inner_color', '$product_outer_color', '$product_cup_design', '$product_canopy', '$product_winding', '$product_plate_design', '$product_salai', '$product_nok', '$product_sidebox', '$product_descreption', '$img_dest', '$product_customer_name', '$product_contact', '$product_email', '$product_address', 'order')";
mysqli_query($con, $query);


header('location:receipt.php');



}



?>