<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>

<?php
session_start();
if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
    header("location: /E-Store/admin/form/login.php");
    exit();
}
?>


<body>

<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php"><img src="../../user/images/nav.png" width="200px" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-white">
            <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Hello <?php echo $_SESSION['admin']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/E-Store/admin/form/logout.php">LOGOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../user/index.php">USERPANEL</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJopLbrdLWq8jTOEKKOYg1pDkhI6u"
        crossorigin="anonymous"></script>
</body>
</html>