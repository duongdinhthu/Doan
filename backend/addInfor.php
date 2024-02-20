<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$username = $_SESSION["username"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name1 = $_POST['name'];
    $phone1 = $_POST['phone'];
    $address1 = $_POST['address'];
    $update = $project->updateInforCustomer($name1,$phone1,$address1,$username);
    echo"<h2>Added information successfully</h2>";
    echo"$username,$name1,$phone1,$address1";
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
    <link rel="stylesheet" href="home.css">
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
            <a href="home.html" class="btn btn-outline">Trang chủ</a>
            <div class="menu">
                <ul>
                    <li><a href="home.html">Trò chơi</a>
                        <ul class="ul">
                            <li><a href="Trochoitreem.html"> Trẻ em</a></li>
                            <li><a href="Trochoigiadinh.html">Gia đình</a></li>
                            <li><a href="Trochoinguoilon.html">Người lớn</a></li>
                        </ul>
                    </li>
                    <li><a href="home.html">Sản phẩm</a>
                        <ul class="ul">
                            <li><a href="Docanhan.html">Đồ cá nhân</a></li>
                            <li><a href="Dothietyeu.html">Đồ thiết yếu</a></li>
                            <li><a href="Thucpham.html">Thực phẩm</a></li>
                        </ul>
                    </li>
                    <li><a href="home.html">Dịch vụ</a>
                        <ul class="ul">
                            <li><a href="Dichvutrongoi.html">Trọn gói</a></li>
                            <li><a href="Dichvutour.html"> Tour</a></li>
                            <li><a href="Dichvutochuc.html">Tổ chức</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="tintuc.html" class="btn btn-outline">Tin tức</a>
            <a href="lienhe.html" class="btn btn-outline">Liên hệ</a>
            <a href="../backend/login.php" class="btn btn-outline">Đăng nhập </a>

        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width:100%;">
</header>
<h2>
    More information to become a member and receive attractive offers</h2>
<form action="" method="post">
    <div class="form-group">
        <label for="name">Your name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="phone">Your phone number:</label>
        <input type="number" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="address">Your address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="logout.php" class="btn btn-danger ">Log out</a>
    <a href="changePassword.php" class="btn btn-warning">changePassword</a>
</form>

<div class="footer">
    <div class="footer1">
        <img src="img/Nội%20dung%20đoạn%20văn%20bản%20của%20bạn.png" alt="">
        <div class="social">
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-youtube"></i>
            <i class="fa-brands fa-square-twitter"></i>
        </div>
        <p>ĐĂNG KÝ NHẬN TIN</p>
        <label>
            <input type="email" placeholder="Nhập địa chỉ Email">
            <button type="submit">GỬI</button>
        </label>
        <div class="splpe">
            <i class="fa-solid fa-location-dot"></i>
            <p>.................................</p>
        </div>
        <div class="splpe">
            <i class="fa-solid fa-phone"></i>
            <p>0910JQKA</p>
        </div>
        <div class="splpe">
            <i class="fa-solid fa-headphones"></i>
            <p>support@gmail.com</p>
        </div>
    </div>
    <div class="footer2">
        <div class="info">
            <div class="hotro">
                <p>VỀ CHÚNG TÔI</p>
                <a href="#">Trang chủ</a>
                <a href="#">Về chúng tôi</a>
                <a href="#">Sản phẩm</a>
                <a href="#">Dịch vụ cho thuê</a>
                <a href="#">Tin tức</a>
                <a href="#">Sản phẩm của Camp</a>
                <a href="#">Liên hệ</a>
            </div>
            <div class="hotro">
                <p>HỖ TRỢ KHÁCH HÀNG</p>
                <a href="#">Trang chủ</a>
                <a href="#">Về chúng tôi</a>
                <a href="#">Sản phẩm</a>
                <a href="#">Dịch vụ cho thuê</a>
                <a href="#">Tin tức</a>
                <a href="#">Sản phẩm của Camp</a>
                <a href="#">Liên hệ</a>
            </div>
            <div class="hotro">
                <p>DỊCH VỤ</p>
                <a href="#">Trang chủ</a>
                <a href="#">Về chúng tôi</a>
                <a href="#">Sản phẩm</a>
                <a href="#">Dịch vụ cho thuê</a>
                <a href="#">Tin tức</a>
                <a href="#">Sản phẩm của Camp</a>
                <a href="#">Liên hệ</a>
            </div>
        </div>
        <div class="thanhtoan">
            <button></button>
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>
</div>
<script src="trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
