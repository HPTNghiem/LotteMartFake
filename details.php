<?php

session_start();

include 'action.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        fieldset {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 20px;
            width: 300px;
        }
        legend {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
    require_once ('php/header1.php');
?>
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <hr>

                <div class="container">
        <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="index.php" method="post">
                    <div class="card shadow">
                        <div>
                           <img src="<?php echo $vphoto; ?>" alt="Image1" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $vname; ?>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <h5>
                                <span class="price"><?php echo $vprice; ?>đ</span>
                            </h5>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
            <a href="index.php">Quay lại trang chủ</a>
        </div>
        <fieldset><?php echo $vdetails ?></fieldset>
            </div>
        </div>
    </div>
</div>
</body>
</html>