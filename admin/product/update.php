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
$id = $_GET['ID'];
include 'config.php';
$Record = mysqli_query($con, "SELECT * FROM tblproduct WHERE id = $id");
$data = mysqli_fetch_array($Record);
?>

<div class="row">
    <div class="col-md-6 m-auto text-center text-warning border">
        <h1>Product Update</h1>
    </div>
</div>

<form method="POST" action="update1.php" enctype="multipart/form-data">
    <div class="row ">
        <div class="col-md-6 m-auto border px-4 py-4">
            <label class="form-label">Product Name</label> 
            <input type="text" value="<?php echo $data['t-name']; ?>" class="form-control" name="pname">
            <label class="form-label">Product Price</label> 
            <input type="text" value="<?php echo $data['t-price']; ?>" class="form-control" name="pprice">
            <label class="form-label">Product image</label> 
            <input type="file" class="form-control" name="pimage">
            <img src="<?php echo $data['t-image']; ?>" style="height:160px"; />
            <input type="text" value="<?php echo $data['id']; ?>" class="form-control" name="pid">
            
            <select name="ppage" class="form-select">
                <option value="Home">Home</option>
                <option value="Pedestal">Pedestal</option>
                <option value="Bracket">Bracket</option>
                <option value="Ceiling">Ceiling</option>
            </select>
            <label class="form-label">Product Detail</label> 
        <textarea class='form-control'  value="<?php echo $data['t_des']; ?>"   name='detail'></textarea>
            <button name="submit" class="form-control mt-4 bg-danger">Update</button>
        </div>
    </div>
</form>

</body>
</html>


