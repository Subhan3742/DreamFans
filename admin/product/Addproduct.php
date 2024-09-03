<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<?php
include 'header.php';
?>
<div class="row">
   <div class="col-md-6 m-auto text-center text-warning border">
    <h1>Product Detail</h1>
   </div>
</div>



<form method="POST" action="insert.php" enctype="multipart/form-data">
        
        <div class="row ">
           <div class="col-md-6 m-auto border px-4 py-4">

        <label class="form-label">Product Name</label> 
        <input type="text" class="form-control" name="pname">
        <label class="form-label">Product Price</label> 
        <input type="text" class="form-control" name="pprice">
        <label class="form-label">Product image</label> 
        <input type="file" class="form-control" name="pimage">
        <label class="form-label mt-2">Select page category</label> 

        <select  name="ppage" class="form-select">
    <option value="Home">Home</option>
    <option value="ceiling-silver">ceiling-silver</option>
    <option value="ceiling-copper">ceiling-copper</option>
    <option value="ceiling-inverter">ceiling-inverter</option>
    <option value="ceiling-ac/dc">ceiling-ac/dc</option>
    <option value="ceiling-dc">ceiling-dc</option>
    <option value="rod">rod</option>
    <option value="heater">heater</option>
    <option value="iron">iron</option>
    <option value="exhaust-6">exhaust-6</option>
    <option value="exhaust-8">exhaust-8</option>
    <option value="exhaust-10">exhaust-10</option>
    <option value="exhaust-12">exhaust-12</option>
    <option value="bracket-silver">bracket-silver</option>
    <option value="bracket-copper">bracket-copper</option>
    <option value="pedestal-silver">pedestal-silver</option>
    <option value="pedestal-copper">pedestal-copper</option>
    <option value="pedestal-dc">pedestal-dc</option>
    <option value="customize-ceiling">customize-ceiling</option>
    <option value="customize-pedestal">customize-pedestal</option>

        </select>
        <label class="form-label">Product Detail</label> 
        <textarea class='form-control' placeholder='Enter Detail' name='detail' ></textarea>
  <button  name="submit"  class="form-control mt-4 bg-danger">Upload</button>
        
</div>
</div>
    </form>
</body>
</html>