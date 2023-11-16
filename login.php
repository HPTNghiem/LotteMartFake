<?php
session_start();
if (isset($_POST['dangnhap']))
{
    include 'action.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
        }
        $stmt = $conn->prepare("SELECT * FROM taikhoan WHERE Email=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        // Kiểm tra mật khẩu
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['MatKhau'])) {
            $_SESSION['ID'] = $user['id'];
            $_SESSION['ROLE'] = $user['role'];
            $_SESSION['NAME'] = $user['email'];
            // Kiểm tra ROLE để xác định nơi chuyển hướng
            if ($_SESSION['ROLE'] == 'admin') {
                header("Location: adminpage.php");
            } else {
                header("Location: index.php");
            }

            } else {
                echo "Bạn đã nhập sai mật khẩu";
            }
        } else {
            echo "Tài khoản không tồn tại";
        }
        $_SESSION['username'] = $username;
        
}
if(isset($_POST['dangki']))
{
    include 'action.php';
    $name=$_POST["name"];
    $register_username = $_POST["register_username"];
    $register_password = $_POST["register_password"];
    $confirm_password = $_POST["confirm_password"];
    if ($register_password   !== $confirm_password) {
        echo "Password and Confirm Password do not match.";
    } else {
        $check_username_query = "SELECT * FROM taikhoan WHERE Email=?";
        $check_username_stmt = $conn->prepare($check_username_query);
        $check_username_stmt->bind_param("s", $register_username);
        $check_username_stmt->execute();
        $check_username_result = $check_username_stmt->get_result();
        if ($check_username_result->num_rows > 0) {
            echo "Tài khoản đã tồn tại";
        } else {
        $stmt = $conn->prepare("INSERT INTO taikhoan (Ten, Email, MatKhau) VALUES (?, ?, ?)");
        $hashed_password = password_hash($register_password, PASSWORD_DEFAULT);
        $stmt->bind_param("sss",$name, $register_username, $hashed_password);
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Registration failed. Please try again.";
        }

    }
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2>Sign in/up Form</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="login.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name"  name='name'/>
                <input type="email" placeholder="Email" name='register_username'/>
                <input type="password" placeholder="Password"  name='register_password'/>
                <input type="password" placeholder="Confirm Password"  name='confirm_password'/>
                <input type='submit' class="button" name="dangki" value='Đăng kí' />
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng tài khoản của bạn</span>
                <input type="email" placeholder="Email" name="username"/>
                <input type="password" placeholder="Password"  name="password"/>
                <a href="#">Forgot your password?</a>
                <input type='submit' class="button" name="dangnhap" value='Đăng nhập' />
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào bạn!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });
    </script>
</html>