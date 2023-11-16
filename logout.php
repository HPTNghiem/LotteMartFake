<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
    echo "Bạn đã đăng xuất thành công";
    echo "<br>";
}

?>
<a href="index.php">Quay về trang chủ</a>