<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customization Detail</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="css/p_detail.css">
</head>
<body>
<?php include 'header.php'; ?>
<h5 class='text-center '>Select only those fields that you want to change</h5>
<?php
$id = $_GET['ID'];
            include 'config.php';
            $Record = mysqli_query($con, "SELECT * FROM tblproduct");
            while ($Row = mysqli_fetch_array($Record)) {
                $check_page = $Row['t-name'];
                if ($check_page === $id) {
                    if($id==='D1-C' || $id==='D2-C'){ 
                echo"
<div class='container-fluid'>

    <div class='row '>
        <div class='col-md-6  '>
            <img src='../admin/product/{$Row['t-image']}' width=100%>
        </div>
        <div class='col-md-6 '>
         
        <form action='customize-detail1.php' method='POST' enctype='multipart/form-data'>
        <label class='form-label'>Model Name</label> <input name='name' class='form-control' type=text value={$Row['t-name']} readonly>
        <label class='form-label'>Body Color</label> 
        <select  name='body-color' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='shine-black'>Shine Black</option>
        <option value='mat-black-Shape'>Mat Black</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>Golden</option>
        <option value='blue'>Blue</option>
        <option value='brown'>Brown</option>
        <option value='light-wood'>Light Wood</option>
        <option value='Dark Wood'>Dark Wood</option>
        </select>
        <label class='form-label'>Blade Colour</label> 
        <select  name='blade-color' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='shine-black'>Shine Black</option>
        <option value='mat-black-Shape'>Mat Black</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>Golden</option>
        <option value='blue'>Blue</option>
        <option value='brown'>Brown</option>
        <option value='light-wood'>Light Wood</option>
        <option value='Dark Wood'>Dark Wood</option>
        </select>

        <label class='form-label'>Blade Type</label> 
        <select  name='blade-type' class='form-select'>
        <option >Please-Select</option>
        <option value='D-Shape'>D-Shape</option>
        <option value='L-Shape'>L-Shape</option>
        <option value='Plain-Shape'>Plain-Shape</option>
        </select>

        <label class='form-label'>Brush Inner Design</label> 
        <select  name='color-inner' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='shine-black'>Shine Black</option>
        <option value='mat-black-Shape'>Mat Black</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>Golden</option>
        <option value='blue'>Blue</option>
        <option value='brown'>Brown</option>
        <option value='light-wood'>Light Wood</option>
        <option value='Dark Wood'>Dark Wood</option>
        </select>

        <label class='form-label'>Brush Outer Design</label> 
        <select  name='color-outer' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='shine-black'>Shine Black</option>
        <option value='mat-black'>Mat Black</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>Golden</option>
        <option value='blue'>Blue</option>
        <option value='brown'>Brown</option>
        <option value='light-wood'>Light Wood</option>
        <option value='Dark Wood'>Dark Wood</option>
        </select>

        <label class='form-label'>Winding</label>
        <select  name='winding' class='form-select'>
        <option >Please-Select</option>
        <option value='silver'>Silver</option>
        <option value='copper'>Copper</option>
        <option value='inverter'>Inverter</option>
        <option value='ac/dc'>AC/DC</option>
        <option value='dc'>DC</option>
        </select>

        <label class='form-label'>Plate Design</label> 
        <select  name='plate-design' class='form-select'>
        <option >Please-Select</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        </select>  
        
        <label class='form-label'>Salai</label> 
        <select  name='salai' class='form-select'>
        <option >Please-Select</option>
        <option value='Gold'>Gold</option>
       
        </select> 

        <label class='form-label'>Nok</label> 
        <select  name='nok' class='form-select'>
        <option >Please-Select</option>
        <option value='Gold'>Gold</option>
        
        </select> 

        <label class='form-label'>Side-Box</label> 
        <select  name='sidebox' class='form-select'>
        <option >Please-Select</option>
        <option value='light-wood'>Light Wood</option>
        <option value='dark-wood'>Dark Wood</option>
        
        </select>


        <label class='form-label'>Cup Design</label>
        <select  name='cup-design' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>golden</option>
        </select>

        <label class='form-label'>Canopy</label> 
        <select  name='canopy' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='off-white'>Off White</option>
        
        </select>
        <label class='form-label'>Description</label> <textarea name='descreption' class='form-control' placeholder='For any specific colour or design please write detail in description.' ></textarea>
        <label class='form-label'>Any Sample Image</label><input type='file' class='form-control' name='pimage' >
        <label class='form-label'>Name</label> <input name='C-name' class='form-control' type=text value='' placeholder='Enter Name'>
        <label class='form-label'>Contact no</label> <input name='contact' class='form-control' type=text value='' placeholder='Enter your number'>
        <label class='form-label'>Email</label> <input name='email' class='form-control' type=text value='' placeholder='Enter your Email'>
        <label class='form-label'>Address</label> <input name='address' class='form-control' type=text value='' placeholder='Enter your Address'>
        <input class='form-control btn btn-warning mt-2 mb-5' type='submit' name='submit'>


        </form>
        

        </div>
    </div>
</div>
";}
                  }
                  }

                
            ?>



                                        <!-- D5 -->


                                        
                                        <?php
$id = $_GET['ID'];
            include 'config.php';
            $Record = mysqli_query($con, "SELECT * FROM tblproduct");
            while ($Row = mysqli_fetch_array($Record)) {
                $check_page = $Row['t-name'];
                if ($check_page === $id) {
                    if($id==='D5-C'){ 
                echo"
<div class='container-fluid'>

    <div class='row '>
        <div class='col-md-6  '>
            <img src='../admin/product/{$Row['t-image']}' width=100%>
        </div>
        <div class='col-md-6 '>
         
        <form action='customize-detail1.php' method='POST' enctype='multipart/form-data'>
        <label class='form-label'>Model Name</label> <input name='name' class='form-control' type=text value={$Row['t-name']} readonly>
        <label class='form-label'>Body Color</label> 
        <select  name='body-color' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='shine-black'>Shine Black</option>
        <option value='mat-black-Shape'>Mat Black</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>Golden</option>
        <option value='blue'>Blue</option>
        <option value='brown'>Brown</option>
        <option value='light-wood'>Light Wood</option>
        <option value='Dark Wood'>Dark Wood</option>
        </select>
        <label class='form-label'>Blade Colour</label> 
        <select  name='blade-color' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='shine-black'>Shine Black</option>
        <option value='mat-black-Shape'>Mat Black</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>Golden</option>
        <option value='blue'>Blue</option>
        <option value='brown'>Brown</option>
        <option value='light-wood'>Light Wood</option>
        <option value='Dark Wood'>Dark Wood</option>
        </select>

        <label class='form-label'>Blade Type</label> 
        <select  name='blade-type' class='form-select'>
        <option >Please-Select</option>
        <option value='D-Shape'>D-Shape</option>
        <option value='L-Shape'>L-Shape</option>
        <option value='Plain-Shape'>Plain-Shape</option>
        </select>

        <label class='form-label'>Brush Inner Design</label> 
        <select  name='color-inner' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='shine-black'>Shine Black</option>
        <option value='mat-black-Shape'>Mat Black</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>Golden</option>
        <option value='blue'>Blue</option>
        <option value='brown'>Brown</option>
        <option value='light-wood'>Light Wood</option>
        <option value='Dark Wood'>Dark Wood</option>
        </select>

        <label class='form-label'>Brush Outer Design</label> 
        <select  name='color-outer' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='shine-black'>Shine Black</option>
        <option value='mat-black'>Mat Black</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>Golden</option>
        <option value='blue'>Blue</option>
        <option value='brown'>Brown</option>
        <option value='light-wood'>Light Wood</option>
        <option value='Dark Wood'>Dark Wood</option>
        </select>

        <label class='form-label'>Winding</label>
        <select  name='winding' class='form-select'>
        <option >Please-Select</option>
        <option value='silver'>Silver</option>
        <option value='copper'>Copper</option>
        <option value='inverter'>Inverter</option>
        <option value='ac/dc'>AC/DC</option>
        <option value='dc'>DC</option>
        </select>

        <label class='form-label'>Plate Design</label> 
        <select  name='plate-design' class='form-select'>
        <option >Please-Select</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        </select>  
        
        <label class='form-label'>Salai</label> 
        <select  name='salai' class='form-select'>
        <option >Please-Select</option>
        <option value='Gold'>Gold</option>
       
        </select> 

        <label class='form-label'>Nok</label> 
        <select  name='nok' class='form-select'>
        <option >Please-Select</option>
        <option value='Gold'>Gold</option>
        
        </select> 

        <label class='form-label'>Side-Box</label> 
        <select  name='sidebox' class='form-select'>
        <option >Please-Select</option>
        <option value='light-wood'>Light Wood</option>
        <option value='dark-wood'>Dark Wood</option>
        
        </select>


        <label class='form-label'>Cup Design</label>
        <select  name='cup-design' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='off-white'>Off White</option>
        <option value='golden'>golden</option>
        </select>

        <label class='form-label'>Canopy</label> 
        <select  name='canopy' class='form-select'>
        <option >Please-Select</option>
        <option value='white'>White</option>
        <option value='off-white'>Off White</option>
        
        </select>
        <label class='form-label'>Description</label> <textarea name='descreption' class='form-control' placeholder='For any specific colour or design please write detail in description.' ></textarea>
        <label class='form-label'>Any Sample Image</label><input type='file' class='form-control' name='pimage' >
        <label class='form-label'>Name</label> <input name='C-name' class='form-control' type=text value='' placeholder='Enter Name'>
        <label class='form-label'>Contact no</label> <input name='contact' class='form-control' type=text value='' placeholder='Enter your number'>
        <label class='form-label'>Email</label> <input name='email' class='form-control' type=text value='' placeholder='Enter your Email'>
        <label class='form-label'>Address</label> <input name='address' class='form-control' type=text value='' placeholder='Enter your Address'>
        <input class='form-control btn btn-warning mt-2 mb-5' type='submit' name='submit'>


        </form>
        

        </div>
    </div>
</div>
";}
                  }
                  }

                
            ?>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <?php include 'footer.php';  ?>
</body>
</html>


