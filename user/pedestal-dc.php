<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedestal DC</title>
    <?php include 'header.php'; ?>
</head>
<body>
    
<div class="col-md-12">
        <div class="row">
            <?php
            include 'config.php';
            $Record = mysqli_query($con, "SELECT * FROM tblproduct");
            while ($Row = mysqli_fetch_array($Record)) {
                $check_page = $Row['t-page'];
                if ($check_page === 'pedestal-dc') {

                    echo "
                    <div class='col-md-6 col-lg-3 mb-3'>
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
   <?php
include 'footer.php';
?>
</body>
</html>
