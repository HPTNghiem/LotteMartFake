<?php
include 'action.php';
session_start();
$query = 'SELECT * FROM producttb';
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"   
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require_once ("php/header.php"); ?>
<div class="container">
        <div class="row text-center py-5">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="index.php" method="post">
                    <div class="card shadow">
                        <div>
                           <img src="<?php echo $row['product_image']; ?>" alt="Image1" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name']; ?>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <h5>
                                <span class="price"><?php echo $row['product_price']; ?>đ</span>
                            </h5>
                            
                            <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a>
                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart">
                            </i>
                             <input type="hidden" name='product_id' value='<?= $row['id']; ?>'>
                        </div>
                    </div>
                </form>
            </div>
            <?php }?>
        </div>
</div>
<main class="main"></main>
                    <footer id="footer" class="footer bg-light">
                        <div class="footer-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 mb-3"><div class="d-none d-md-block"><h3 class="fontsize-18">Về LOTTE Mart</h3>
                                        <ul class="list-unstyled fontsize-14 list-color-dark-gray"><li><a title="Giới Thiệu" href="/vi-nsg/about-us">Giới Thiệu</a></li>
                                            <li><a title="Chính Sách Bảo Mật" href="/vi-nsg/privacy">Chính Sách Bảo Mật</a></li><li><a title="Điều kiện &amp; Điều khoản" href="/vi-nsg/dieu-kien-dieu-khoan-chuong-trinh-khach-hang-thanh-vien">Điều kiện &amp; Điều khoản</a>
                                        </li>
                                    </ul></div><div class="d-block d-md-none">
                                                <h3 class="fontsize-18">Liên kết trang web</h3><div class="dropdown dropdown-type row g-0 align-items-center">
                                                    <button class="dropdown-toggle dropdown-toggle col text-start" data-bs-toggle="dropdown" type="button" aria-expanded="true">Về LOTTE Mart</button>
                                                    <div class="dropdown-menu w-100">
                                                        <ul class="menu-content checked-type"><li><a title="Giới Thiệu" href="/vi-nsg/about-us">Giới Thiệu</a></li>
                                                            <li><a title="Chính Sách Bảo Mật" href="/vi-nsg/privacy">Chính Sách Bảo Mật</a></li>
                                                            <li><a title="Điều kiện &amp; Điều khoản" href="/vi-nsg/dieu-kien-dieu-khoan-chuong-trinh-khach-hang-thanh-vien">Điều kiện &amp; Điều khoản</a></li></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3 mb-4m"><div class="d-none d-md-block">
                                                <h3 class="fontsize-18">Chăm Sóc Khách Hàng</h3>
                                                <ul class="list-unstyled fontsize-14 list-color-dark-gray"><li><a title="Câu Hỏi Thường Gặp" href="/vi-nsg/faq">Câu Hỏi Thường Gặp</a></li>
                                                    <li><a title="Quản Lý Tài Khoản" href="/vi-nsg/account-management">Quản Lý Tài Khoản</a>
                                                </li><li><a title="Chính Sách Mua Hàng" href="/vi-nsg/shipping-delivery">Chính Sách Mua Hàng</a></li><li><a title="Đổi Trả Và Hoàn Tiền" href="/vi-nsg/exchange-refund">Đổi Trả Và Hoàn Tiền</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-block d-md-none"><div class="dropdown dropdown-type row g-0 align-items-center">
                                            <button class="dropdown-toggle dropdown-toggle col text-start" data-bs-toggle="dropdown" type="button" aria-expanded="true">Chăm Sóc Khách Hàng</button>
                                            <div class="dropdown-menu w-100">
                                                <ul class="menu-content checked-type">
                                                    <li>
                                                        <a title="Câu Hỏi Thường Gặp" href="/vi-nsg/faq">Câu Hỏi Thường Gặp</a>
                                                    </li>
                                                    <li>
                                                        <a title="Quản Lý Tài Khoản" href="/vi-nsg/account-management">Quản Lý Tài Khoản</a>
                                                    </li>
                                                    <li>
                                                        <a title="Chính Sách Mua Hàng" href="/vi-nsg/shipping-delivery">Chính Sách Mua Hàng</a>
                                                    </li>
                                                    <li>
                                                        <a title="Đổi Trả Và Hoàn Tiền" href="/vi-nsg/exchange-refund">Đổi Trả Và Hoàn Tiền</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 mb-4m">
                                    <h3 class="fontsize-18">Phương Thức Thanh Toán</h3>
                                    <div class="mb-3">
                                        <img class="mb-1 me-3s" src="Image/visa.png" alt="" width="40"/>
                                        <img class="mb-1 me-3s" src="Image/mastercard.png" alt="" width="50"/>
                                        <img class="mb-1 me-3s" src="Image/jcb.png" alt="" width="40"/>
                                        <br class="mob-h"/>
                                        <img class="mb-1 me-3s" src="Image/cash.png" alt="" width="40"/>
                                        <img class="mb-1 me-3s" src="Image/atm.png" alt="" width="42"/>
                                        <img class="mb-1 me-3s" src="Image/momo.png" alt="" width="36"/>
                                        <br class="mob-h"/>
                                    </div>
                                        <h3 class="fontsize-18">Chứng Nhận Bởi</h3>
                                        <p class="mb-1"><a href="http://online.gov.vn/Home/WebDetails/51612?AspxAutoDetectCookieSupport=1" target="_blank">
                                            <img alt="Đã thông báo Bộ Công Thương" src="Image/bqp1.png" width="148" height="48" decoding="async" data-nimg="1" loading="lazy" style="color:transparent"/>
                                        </a>
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 mb-4m">
                                    <h3 class="fontsize-18">Kết Nối Với Chúng Tôi</h3>
                                    <div class="socials-link mb-3">
                                        <a href="https://www.facebook.com/LotteMartVN" target="_blank">
                                            <img alt="" src="Image/fb.png" width="48" height="48" decoding="async" data-nimg="1" class="mb-2 me-3s" loading="lazy" style="color:transparent"/></a>
                                            <a href="https://www.youtube.com/channel/UCNhksIAgeG6t_r2wviCwCfg" target="_blank">
                                                <img alt="" src="Image/youtube.png" width="48" height="48" decoding="async" data-nimg="1" class="mb-2 me-3s" loading="lazy" style="color:transparent"/></a>
                                                <a href="https://www.tiktok.com/@lottemart_vn" class="mb-2" target="_blank">
                                                    <img alt="" src="Image/tiktok.png" width="48" height="48" decoding="async" data-nimg="1" class="mb-2" loading="lazy" style="color:transparent"/>
                                                </a>
                                            </div>
                                            <h3 class="fontsize-18">Tải Ứng Dụng LOTTE Mart</h3>
                                            <div class="row row-cols-auto row-cols-lg-1 gx-2"><div class="col mb-2">
                                                <a href="https://apps.apple.com/us/app/lotte-mart-vietnam/id6447617674" target="_blank" title="App Store">
                                                    <img alt="App Store" src="Image/appstore.svg" width="152" height="44" decoding="async" data-nimg="1" loading="lazy" style="color:transparent"/>
                                                </a>
                                            </div>
                                            <div class="col mb-0"><a href="https://play.google.com/store/apps/details?id=vn.ldcc.martonline" target="_blank" title="Google Play">
                                                <img alt="Google Play" src="Image/googleplay.svg" width="152" height="44" decoding="async" data-nimg="1" loading="lazy" style="color:transparent"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"><h3 class="fontsize-18">CÔNG TY CỔ PHẦN TRUNG TÂM THƯƠNG MẠI LOTTE VIỆT NAM</h3>
                                <div class="fontsize-14">
                                    <p>
                                        <strong>Trụ sở chính: </strong> <!-- -->469 Nguyễn Hữu Thọ, Phường Tân Hưng, Quận 7, Thành phố Hồ Chí Minh</p>
                                        <p>
                                            <strong>Giờ hoạt động: </strong> 8:00 - 21:00</p>
                                            <p class="mb-3"><i class="icons icon-headphone me-1"></i> 
                                            <strong class="me-3">0901 057 057</strong>
                                            <i class="icons icon-mail me-2"></i> 
                                            <a class="btn-link" href="mailto:info@lotte.vn">info@lotte.vn</a>
                                            <img src="Image/kakaotalk.png" alt="Kakao Talk" width="16" class="ms-3 me-2"/>
                                            <span>KakaoTalk ID: <strong>hotline07</strong>
                                        </span>
                                    </p>
                                    <p class="mb-4">Giấy chứng nhận Đăng ký kinh doanh số 0304741634 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh cấp lần đầu ngày 24/10/2006 và sửa đổi lần thứ 21 ngày 22/08/2023</p>
                                    <hr class="mb-4"/>
                                    <p class="txt-grayer">© 2023 - Bản quyền của Công ty Cổ phần Trung Tâm Thương Mại LOTTE Việt Nam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                </footer>
                                                <div class="aside-offcanvas d-flex align-items-center">
                                                    <div class="group-off-1 position-relative ">
                                                        <button class="btn btn-toggle btn-offcanvas position-absolute d-flex align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><span class="icons icon-arrow-left"></span>
                                                        </button>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="jss.js" ></script>
</body>
</html>