<?php
session_start();

include "project.php";
$loginPermissions = new projectFptHappy();
$username=$_POST['username'];
$password=$_POST['password'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginPermissions->accountAdmin($username,$password);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../frontend/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>

</head>
<body>
<header>
    <div class="header">
        <div class="header1">
            <img src="img/logo.webp" alt="logo">
            <label>
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </label>
            <div class="hotline">
                <i class="fa-solid fa-phone"></i>
                <p>Hotline<br>8910JQKA</p>
            </div>
        </div>
        <div class="d-flex">
            <a href="../frontend/home.html" class="btn btn-outline">Trang chủ</a>
            <div class="menu">
                <ul>
                    <li><a href="home.html">Trò chơi</a>
                        <ul class="ul">
                            <li><a href="../frontend/Trochoitreem.html"> Trẻ em</a></li>
                            <li><a href="../frontend/Trochoigiadinh.html">Gia đình</a></li>
                            <li><a href="../frontend/Trochoinguoilon.html">Người lớn</a></li>
                        </ul>
                    </li>
                    <li><a href="home.html">Sản phẩm</a>
                        <ul class="ul">
                            <li><a href="../frontend/Docanhan.html">Đồ cá nhân</a></li>
                            <li><a href="../frontend/Dothietyeu.html">Đồ thiết yếu</a></li>
                            <li><a href="../frontend/Thucpham.html">Thực phẩm</a></li>
                        </ul>
                    </li>
                    <li><a href="home.html">Dịch vụ</a>
                        <ul class="ul">
                            <li><a href="../frontend/Dichvutrongoi.html">Trọn gói</a></li>
                            <li><a href="../frontend/Dichvutour.html"> Tour</a></li>
                            <li><a href="../frontend/Dichvutochuc.html">Tổ chức</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="../frontend/tintuc.html" class="btn btn-outline">Tin tức</a>
            <a href="../frontend/lienhe.html" class="btn btn-outline">Liên hệ</a>
            <a href="../backend/login.php" class="btn btn-outline">Đăng nhập </a>

        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width:100%;">
</header>
<form action="" method="post" >
    <label for="username">Username:</label>
    <input name="username" type="text" id="username" required class="form-control">
    <label for="password">Password:</label>
    <input name="password" type="password" id="password" required class="form-control">
    <br>
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="register2.php" class="btn btn-success">Register</a>
    <a href="changePassword.php" class="btn btn-warning">changePassword</a>
</form>
<div class="footer">
    <div class="footer0">
        <div class="footer1">
            <img src="img/logo.webp" alt="">
            <div class="icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
            <p>ĐĂNG KÝ NHẬN TIN</p>
            <label>
                <input type="email" placeholder="Nhập địa chỉ email">
                <button>GỬI</button>
            </label>
            <div class="contact">
                <i class="fa-solid fa-location-dot"></i>
                <p>.................................</p>
            </div>
            <div class="contact">
                <i class="fa-solid fa-phone"></i>
                <p>0910JQKA</p>
            </div>
            <div class="contact">
                <i class="fa-solid fa-headphones"></i>
                <p>support@gmail.com</p>
            </div>
        </div>
        <div class="footer2">
            <div class="paysupport">
                <div class="Support">
                    <h3>VỀ CHÚNG TÔI</h3><br>
                    <a href="#">Công ty</a><br>
                    <a href="#">Địa chỉ</a><br>
                    <a href="#">Số điện thoại</a><br>
                    <a href="#">Liên kết</a><br>
                </div>
                <div class="Support">
                    <h3>HỖ TRỢ KHÁCH HÀNG</h3><br>
                    <a href="#">Liên hệ</a><br>
                    <a href="#">Xử lý khiếu nại</a><br>
                    <a href="#">Hướng dẫn sử dụng</a><br>
                    <a href="#">Bảo hành, đổi trả</a><br>
                    <a href="#">Liên hệ</a><br>
                </div>
                <div class="Support">
                    <h3>DỊCH VỤ</h3><br>
                    <a href="#">Sản phẩm</a><br>
                    <a href="#">Dịch vụ tổ chức trò chơi</a><br>
                    <a href="#">Thanh toán</a><br>
                </div>
            </div>
            <div class="pay">
                <h3>HÌNH THỨC THANH TOÁN</h3>
                <button></button>
                <button></button>
                <button></button>
                <button></button>
            </div>
        </div>
    </div>
    <hr/>
    <p class="license">@ Bản quyền thuộc về ... | Cung cấp bởi ...</p>
</div>
<script src="trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

