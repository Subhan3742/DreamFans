<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">


<link rel="stylesheet" href="css/card.css">
<style>
  a{
    font-family: 'Open Sans', sans-serif;
  }
  
  </style>




</head>
<body>
  <?php
  session_start();
  $count=0;
  if(isset($_SESSION['cart'])){
    $count=count($_SESSION['cart']);
  }
  ?>
  <b>
<div class="sticky-top">
<nav class="navbar navbar-expand-lg bg-white  ">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="index.php"><img src="images/nav.png" width="150px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav  ms-auto ">
        <a class="  nav-link " aria-current="page" href="index.php">Home</a>

          <!-- Drop Down-->
          
        
      

        <a class=' nav-link' href='customization.php'>Customize Fan</a>
        <a class="  nav-link" href="viewcart.php"> <i class="fa-solid fa-cart-shopping"></i> <?php echo $count ?></a>
       
        <?php
        if(isset($_SESSION['username'])){
            echo "<a class=' nav-link '>Hello, ".$_SESSION['username']. "</a>";
            echo "<a class=' nav-link' href='form/logout.php'>Logout</a>";
        }
  
    
        else
        {
          echo"
          <a class='  nav-link' href='#'>Hello,</a>
          <a class='  nav-link' href='form/login.php'>Login</a>
          ";
        }
        
       

?>
         <a class=' nav-link' href='contact.php'>Contact Us</a>
        <a class="  nav-link" href="#">About Us</a>
        <a class="  nav-link" href="policy.php">Policy</a>
       
      </div>
    </div>
  </div>
</nav>

</div> 
      </b> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>