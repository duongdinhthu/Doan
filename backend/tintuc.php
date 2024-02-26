<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Title</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="tintuc.css">
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

                <p>Hotline<br>78910JQKA</p>
            </div>
        </div>
        <div class="d-flex">
            <a href="home.php" class="btn btn-outline">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Games</button>
                <div class="dropdown-content">
                    <a href="Trochoitreem.php">Kids</a>
                    <a href="Trochoigiadinh.php">Family</a>
                    <a href="Trochoinguoilon.php">Adults</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                    <a href="Docanhan.php">Personal items</a>
                    <a href="Dothietyeu.php">Essentials</a>
                    <a href="Thucpham.php">Food</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="Dichvutrongoi.php">Packages</a>
                    <a href="Dichvutour.php"> Tours</a>
                    <a href="Dichvutochuc.php">Organizing</a>
                </div>
            </div>
            <a href="tintuc.php" class="btn btn-outline">News</a>
            <a href="lienhe.php" class="btn btn-outline">Contact</a>
            <a href="user.php" class="btn btn-outline">Account</a>
            <a href="cart.php" class="btn btn-outline">Shopping Cart</a>

        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width:100%;">
</header>
<div class="text">
    <div>
        <a href="home.php">Home  > </a>
        <p>News</p>
    </div>
    <h2>NEWS</h2>
    <hr/>
</div>
<div class="allcard">
    <div class="card text-center">
        <div class="img-card">
            <img src="imageTinTuc/img200.webp"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">ANNOUNCEMENT OF VIETNAM NATIONAL DAY HOLIDAY 2/9/2023
            </h5>

            <p class="card-text">  To our valued customers and partners, FPT HAPPY Company respectfully announces the schedule of the 2/9/2023 National Day holiday for its branches: Ho Chi Minh City branch: …</p>
            <a href="cardtitle1.php" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    <div class="card text-center">
        <div class="img-card">
            <img src="imageTinTuc/img201.webp"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Camping Equipment Store – Ho Chi Minh City Outdoor Activities
            </h5>
            <p class="card-text">Camping and outdoor activities have long been familiar to many people. With outdoor activities focusing on nature, helping improve significantly mental and physical health, camping has becom... </p>
            <a href="cardtitle2.php" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    <div class="card text-center">
        <div class="img-card">
            <img src="imageTinTuc/img202.webp"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">FPT HAPPY Announces Lunar New Year Holiday Schedule of the Year of the Tiger 2022

            </h5>
            <p class="card-text">Greetings, Joining in the atmosphere of welcoming the New Year of the Tiger 2022 nationwide, FPT HAPPY wishes you a New Year full of Peace – Prosperity – Fortune… </p>
            <a href="cardtitle3.php" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    <div class="card text-center">
        <div class="img-card">
            <img src="imageTinTuc/img203.webp"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tet Nguyen Dan Lunar New Year Holiday Schedule of the Year of the Buffalo 2021
            </h5>
            <p class="card-text">Greetings, Joining in the atmosphere of welcoming the New Year of the Buffalo 2021 nationwide, FPT HAPPY wishes you a New Year full of Peace – Prosperity – Fortune… </p>
            <a href="cardtitle4.php" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    <div class="card text-center">
        <div class="img-card">
            <img src="imageTinTuc/img204.webp"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tet Canh Ty Lunar New Year Holiday Schedule of the Year of the Rat 2020
            </h5>
            <p class="card-text">Greetings, Joining in the atmosphere of welcoming the New Year of the Rat 2020 nationwide, FPT HAPPY wishes you a New Year full of Peace – Prosperity – Fortune… </p>
            <a href="cardtitle5.php" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</div>
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
            <p>SUBSCRIBE TO NEWSLETTER</p>
            <label>
                <input type="email" placeholder="Enter email address">
                <button>SEND</button>
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
                    <h3>ABOUT US</h3><br>
                    <a href="#">Company</a><br>
                    <a href="#">Address</a><br>
                    <a href="#">Phone number</a><br>
                    <a href="#">Links</a><br>
                </div>
                <div class="Support">
                    <h3>CUSTOMER SUPPORT</h3><br>
                    <a href="#">Contact</a><br>
                    <a href="#">Handling complaints</a><br>
                    <a href="#">Usage guide</a><br>
                    <a href="#">Warranty, returns</a><br>
                    <a href="#">Contact</a><br>
                </div>
                <div class="Support">
                    <h3>SERVICES</h3><br>
                    <a href="#">Products</a><br>
                    <a href="#">Game organization services</a><br>
                    <a href="#">Payment</a><br>
                </div>
            </div>
            <div class="pay">
                <h3>PAYMENT METHODS</h3>
                <button></button>
                <button></button>
                <button></button>
                <button></button>
            </div>
        </div>
    </div>
    <hr/>
    <p class="license">@ Copyright belongs to ... | Provided by ...</p>
</div>
<script src="trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
