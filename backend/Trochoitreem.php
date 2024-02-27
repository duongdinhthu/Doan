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
    <title>Title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Trochoitreem.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
        <p>Games</p>
    </div>
    <h2>GAMES FOR KID</h2>
    <hr/>
</div>
<div class="img_header">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.saisivahospital.com/wp-content/uploads/2020/01/children-development.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Explore Creating Memories for Childhood - Outdoor Games for Beloved Children.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=https://www.counsellinginmelbourne.com.au/wp-content/uploads/2023/03/The-Importance-of-Play-for-Child-Development-small.jpg"" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Play, Learn, Discover - Colorful Outdoor Experience.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.parents.com/thmb/VK_eMsHSWaYAAAuaFnyO88r_mh0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-901208614-2000-9d4cdf4d1ad94fcb97ca78d67836a9d8.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Children, Stay Away from Computers, Explore Nature with Outdoor Games.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="product-boxes">
    <div>
        <a href="Trochoitreemchitiet.php">
            <img src="https://www.cleanipedia.com/images/5iwkm8ckyw6v/5RHBi0UiJNDQ95B1sXp1ao/f767c121fee347d130c344dde308f931/Ymlnc3RvY2stZ2lybHMtaW4tcGlsbG93LWZvcnQtMTk3ODc4NjMwLmpwZw/900w/tr%C3%B2-ch%C6%A1i-trong-nh%C3%A0-cho-b%C3%A9.jpg" alt="" style="width: 280px;">
        </a>
        <a href="Trochoitreemchitiet.php" class="name">Building Forts Game</a>
        <h5 class="cost">
            <a href="Trochoitreemchitiet.php" class="buy-button">View Detail</a>
        </h5>
    </div>
    <div>
        <img src="https://cdn.chanhtuoi.com/uploads/2022/11/do-vui-cho-be-2-1667719108.jpg" alt="">
        <a href="#" class="name">Riddle Game</a>
        <h5 class="cost">
            <a href="https://docs.google.com/document/d/13hWikpcOE2PUWF-1Pv0leeBFxlhP9uqo/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="buy-button">View Detail</a>
        </h5>
    </div>
    <div>
        <img src="https://monkeymedia.vcdn.com.vn/upload/web/storage_web/21-03-2022_09:53:06_bo-do-choi-domino-go-thong-minh.jpg" alt="">
        <a href="#" class="name">Domino Game</a>
        <h5 class="cost">
            <a href="https://docs.google.com/document/d/1OP6Pzfu6zhNJYQzNjP13URofOqqc2kQn/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="buy-button">View Detail</a>
        </h5>
    </div>
    <div>
        <img src="https://salt.tikicdn.com/cache/w400/ts/product/8f/9b/38/c45b8a495d5a8227eaeb6d82d0210a11.jpg" alt="">
        <a href="#" class="name">Blowing Mini Game</a>
        <h5 class="cost">
            <a href="https://docs.google.com/document/d/1kmpRagK0o-av29N5KJma02oy9qfSkh2m/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="buy-button">View Detail</a>
        </h5>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
