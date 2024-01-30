<?php

//kiểm tra session


include "project.php";
$register = new projectFptHappy();

$username = $_POST['username'];
$password= $_POST['password'];

if(isset($username)&&isset($password)){
    $student = $register->addAcountAdmin($username,$password);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Title</title>
</head>
<body>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
<div class="d-flex">
    <img src="../img/Nội dung đoạn văn bản của bạn.png" alt="trangchu">
    <a href="home.php" class="btn btn-outline" >Trang chủ</a>
    <div class="dropdown mr-1">
        <button type="button" class="btn btn-outline dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
            Trò chơi
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="Trochoitreem.php">Trò chơi cho trẻ em</a>
            <a class="dropdown-item" href="Trochoigiadinh.php">Trò chơi cho gia đình</a>
            <a class="dropdown-item" href="Trochoinguoilon.php">Trò chơi cho người lớn</a>
        </div>
    </div>
    <div class="dropdown mr-1">
        <button type="button" class="btn btn-outline dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
            Sản phẩm
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="Docanhan.php">Đồ cá nhân</a>
            <a class="dropdown-item" href="Dothietyeu.php">Đồ thiết yếu</a>
            <a class="dropdown-item" href="Thucpham.php">Thực phẩm dã ngoại</a>
        </div>
    </div>
    <div class="dropdown mr-1">
        <button type="button" class="btn btn-outline dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
            Dịch vụ
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="Dichvutrongoi.php">Dịch vụ trọn gói</a>
            <a class="dropdown-item" href="Dichvutour.php">Dịch vụ tour theo số người</a>
            <a class="dropdown-item" href="Dichvutochuc.php">Dịch vụ tổ chức trò chơi</a>
        </div>
    </div>
    <a href="cart.php" class="btn btn-outline">Giỏ hàng</a>
    <a href="tintuc.php" class="btn btn-outline">Tin tức</a>
    <a href="baiviet.php" class="btn btn-outline">Bài viết</a>
    <button type="button" class="btn btn-outline" onclick="Login()">Đăng nhập</button>
</div>
<div class="search">
    <label>
        <input type="text" placeholder="Search">
        <button><i class="fa-solid fa-magnifying-glass"></i></button>
    </label>
</div>
<form action="" method="post">
    <label for="username">Username:</label>
    <input name="username" type="text" id="username" required class="form-control" >
    <label for="password">Password:</label>
    <input name="password" type="password" id="password" required class="form-control">
    <br>
    <button type="submit" class="btn btn-primary">Register</button>
    <a href="login.php" class="btn btn-success">Go back to login</a>
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






