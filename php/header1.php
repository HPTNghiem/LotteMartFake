<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i>Trang chủ
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
        
           echo '<div style="padding-left: 150px;"><span style="color: red;">'.$_SESSION['username']."</span></div><br/>";
       }
       ?>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <?php  if (isset($_SESSION['username']) && $_SESSION['username']){ ?>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <a href="login.php" class="ml-auto"> <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Đăng Xuất</button></a>
        <?php }else{?>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <div class="mr-auto"></div>
            <a href="login.php" class="ml-auto"> <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Đăng Nhập</button></a>
            <?php }?>
            <div class="mr-auto"></div>
            <form action="Search.php" class="form-inline my-2 my-lg-0 ml-auto" method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="search">
 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
    </form>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i>
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>
    </nav>
</header>
  <script type="text/javascript" src="jss.js" ></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>