<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require_once ('php/header1.php');
?>
<?php
include 'action.php';
session_start();
$searchTerm = $_GET['search']; 
	$min_length = 1;
	if(strlen($searchTerm)>=$min_length){
        $searchTerm=htmlspecialchars($searchTerm);
        $query="SELECT * FROM producttb WHERE product_name LIKE '%$searchTerm%'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0)
        {
            while($results = mysqli_fetch_array($result)){
            echo '<div class="container"><div class="row text-center py-5">
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="' . $results['product_image'] . '" alt="Image1" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">' . $results['product_name'] . '
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <h5>
                            <span class="price">' . $results['product_price'] . 'đ</span>
                        </h5>
                        <a href="details.php?details=' . $results['id'] . '" class="badge badge-primary p-2">Details</a>
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                        <input type="hidden" name="product_id" value="' . $results['id'] . '">
                    </div>
                </div>
            </form>
        </div></div></div>';
         }
        }
        else echo "No result";
    }else  echo "Nhap vao toi thieu".$min_length;
 ?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="jss.js" ></script>
</body>
</html>