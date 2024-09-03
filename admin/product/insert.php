<?php
include 'config.php';

if(isset($_POST['submit'])){
    $product_name = $_POST['pname'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimage'];
     $img_loc = $_FILES['pimage']['tmp_name'];
    $img_name = $_FILES['pimage']['name'];
    $img_dest = "uploadimage/" . $img_name;
    move_uploaded_file($img_loc, $img_dest);


    $product_des = $_POST['detail'];
    $product_category = $_POST['ppage'];

    $query = "INSERT INTO `tblproduct` (`t-name`, `t-price`, `t-image`, `t-page`, `t_des`)
    VALUES ('$product_name', '$product_price', '$img_dest', '$product_category','$product_des')";
mysqli_query($con, $query);

header('location:Addproduct.php');



}



?>
