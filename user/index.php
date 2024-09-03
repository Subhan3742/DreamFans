<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
   
    <?php include 'header.php'; ?>
    
<style>
   
   

.img-cus button{
    position: relative;
    top:-50px;
}




@media (max-width: 590px) {
    .img-cus button{
        font-size:12px;
    }
    .img-cus img{
        width:70%;
    }
    .card{
    width: 12rem;
}

}
@media screen and (min-width: 601px) and (max-width: 987px) {
   
    .card{
    width: 17rem;
}
@media screen and (min-width: 988px)  {


    .card{
    width: 18rem;
    }

}






 </style>   
   
  <link rel="stylesheet" href="css/dropdown.css">  
  
</head>

<body>
<!-- -->


<div class="container drp">
<div class="row">
<div class="col-1">

<div class="dropdown">
<button class="dropbtn "><i class="fa-solid fa-bars"></i></button>
<div class="dropdown-content">
<a href="ceiling-category1.php">Ceiling Fan</a>
<a href="pedestal-category.php">Pedestal Fan</a>
<a href="bracket-category.php">Bracket Fan</a>
<a href="exhaust-category.php">Exhaust</a>

<div class="sub-menu">
<a href="heater.php">Heater</a>
<a href="iron.php">Iron</a>
<a href="rod.php">Rod</a>
</div>
</div>
</div>



</div>
</div>


</div>







    <div class="conatiner-fluid  hero-image mb-5">
        <div class="row justify-content-center">
            <div class="col text-center hero-image-col">
                <img src="images/dream-cover.jpeg" width="75%"   >
</div>
</div>
</div> 



 
    <!-- Category -->
    
    <?php
   include 'category.php';
   ?>

    <!-- slider  -->


    <?php
   include 'slider.php';
   ?>






                    <!--    Card   -->

    <div class="container-fluid">
     <div class="row text-center  ">
        <div class="col p-5">
            <h2 style="font-family: 'Open Sans', sans-serif;">Shop Now</h2>
        </div>
     </div>
     <div class="col-md-12 main-col">
        <div class="row ">
            <?php
            include 'config.php';
            $Record = mysqli_query($con, "SELECT * FROM tblproduct");
            while ($Row = mysqli_fetch_array($Record)) {
                $check_page = $Row['t-page'];
                if ($check_page === 'Home') {

                    echo "
                    <div class=' col-sm-6 col-md-6 col-lg-3 mb-3  card-width '>
                        <form action='insertcart.php' method='POST'>
                        <a href='product_detail.php?ID={$Row['id']}' class='text-decoration-none'>
                            <div class='card shadow m-auto' >
                                <img src='../admin/product/{$Row['t-image']}' class='card-img-top image-fullscreen'>
                                <div class='card-body text-center'>
                                    <h5 class='card-title '>{$Row['t-name']}</h5>
                                    <p class='card-text'>RS: {$Row['t-price']} </p>
                                    
                                </div>
                            </div>
                            </a>
                        </form>
                    </div>
                    ";
                }
            }
            ?>
        </div>
    </div>
</div>
<!--  Certificates -->

<div class="conatiner-fluid">
<h2 class ="text-center mt-3" style="font-family: 'Open Sans', sans-serif;">Certifications</h2>
<div class="row">
<div class="col">
<img src="images/certificates.png" width="100%" >
</div>
</div>
</div>



<!--  Customization -->


<a href="customization.php">
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5 img-cus text-center mt-3 mb-5">
            
            <img src="images/sketch1cust.png" width="100%" >
            <button class="btn btn-danger " style="width: 100%; font-family: 'Open Sans', sans-serif;">Click if you want to customize your Fan</button>
        </div>
    </div>
</div>
        </a>




<?php 
include 'footer.php';
?>
</body>
</html>
