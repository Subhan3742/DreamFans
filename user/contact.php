<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <?php include 'header.php'; ?>  
    <style>
        @media (max-width: 590px) {
            .info p{
                text-align:left;
            }
        }
        </style>
</head>
<body>
  

<div class="container-fluid ">
    <h1  class="text-center">Contact Us</h1>
<div class="row mt-5">
    <div class="col-md-6">
        <form action="contact1.php" method="POST">
        <label class='form-label'>Name</label> <input class='form-control' type=text value='' placeholder='Enter Name' name='name'>
        <label class='form-label'>Email</label> <input class='form-control' type=text value='' placeholder='Enter your Email' name='email'>
        <label class='form-label'>Phone Number</label> <input class='form-control' type=text value='' placeholder='Enter your Number' name='number'>
        <label class='form-label'>Message</label>  <textarea class='form-control' placeholder='Enter Your Message' name='message' ></textarea>
        <input type='submit' name='submit' value='Send' class='btn btn-danger px-5 py-2 my-3'>
        </form>
</div>
<div class="col-md-6 mt-2 info text-center">
    <h3>Contact Information</h3>
    <p><i class="fa-solid fa-location-dot"></i> M.I. Industry <br> 1&2-A, S.I.E, G.T. Road, Gujrat, Pakistan.</p>
    <p><i class="fa-solid fa-phone"></i> 03034665038</p>
    <p><i class="fa-solid fa-envelope"></i> dreamfan@gmail.com</p>
    <p><i class="fa-solid fa-business-time"></i> Saturday to Friday: 8:00 AM - 5:00 PM</p>
</div>




</div>
</div>








<?php 
include 'footer.php';
?>
</body>
</html>