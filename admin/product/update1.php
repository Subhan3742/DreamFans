
<?php
include 'config.php';
if(isset($_POST['submit'])){
    $id=$_POST['pid'];
    $product_name = $_POST['pname'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimage'];
     $img_loc = $_FILES['pimage']['tmp_name'];
    $img_name = $_FILES['pimage']['name'];
    $img_dest = "uploadimage/" . $img_name;
    move_uploaded_file($img_loc, $img_dest);

    $product_des = $_POST['detail'];
    
    $product_category = $_POST['ppage'];

    $query = "UPDATE `tblproduct` SET `t-name` = '$product_name', `t-price` = '$product_price', `t-image` = '$img_dest', `t-page` = '$product_category', `t_des` = '$product_des' WHERE id = $id";
    mysqli_query($con, $query);
    

    header('location:Adminpanel.php');




}



?>