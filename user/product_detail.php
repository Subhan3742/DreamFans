<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Detail</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="css/p_detail.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<style>
p{
   font-family: 'Roboto', sans-serif; 
}
h2{
   font-family: 'Roboto', sans-serif; 
}
h4{
   font-family: 'Roboto', sans-serif; 
}

   </style>
</head>
<body>
<?php include 'header.php'; ?>
<?php
$id = $_GET['ID'];
            include 'config.php';
            $Record = mysqli_query($con, "SELECT * FROM tblproduct");
            while ($Row = mysqli_fetch_array($Record)) {
                $check_page = $Row['id'];
                if ($check_page === $id) {
                echo"
<div class='container-fluid'>
<div class='row '>
<div class='col-md-6  '>
<img src='../admin/product/{$Row['t-image']}' width=100%>
</div>
<div class='col-md-6 '>
<h2 >
{$Row['t-name']}</br>

</h2>
<h4>Price: {$Row['t-price']}</h4>
<p>
{$Row['t_des']}
</p>
<form action='insertcart.php' method='POST'>
                                    <input type='hidden' name='t-name' value='{$Row['t-name']}'>
                                    <input type='hidden' name='t-price' value='{$Row['t-price']}'>
                                    <input type='number' name='quantity' value='' min='1' max='100' placeholder='Qty'><br>
                                    <input type='submit' name='addcart' value='Add To Cart' class='btn btn-danger text-center p-2 mt-1'>

</form>
                                    </div>
</div>
</div>
";
                  }
                  }

               include 'footer.php';   
            ?>
</body>
</html>


