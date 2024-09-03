<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
   
    <form action="login1.php" method="POST" class="w-50 m-auto shadow px-3 py-3 ">
    <h1 class="text-danger text-center font-monospace">Log IN</h1>
<div class="mb-3">
            <label>Name</label> <input name="name" type="text" placeholder="Enter Your Name" class="form-control" />
</div>

<div class="mb-3">
            <label>Password</label> <input name="password" type="text" placeholder="Enter Password" class="form-control"/>
</div>
<button name="submit" class="w-100  btn btn-warning mb-3 font-monospace">
    login
</button>
<button class="w-100  btn btn-danger " name="already">
   Register
</button>
</form>
</body>
</html>