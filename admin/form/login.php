<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

<div class="row">
   <div class="col-md-6 m-auto text-center text-warning border">
    <h1>Login
    </h1>
   </div>
</div>



<form method="POST" action="login1.php" >
        
        <div class="row ">
           <div class="col-md-6 m-auto border px-4 py-4">

        <label class="form-label">User Name</label> 
        <input type="text" class="form-control" name="username">
        <label class="form-label">User Password</label> 
        <input type="text" class="form-control" name="password">
       
        

  <button  name="submit"  class="form-control mt-4 bg-danger">Sign In</button>
        
</div>
</div>
    </form>
</body>
</html>