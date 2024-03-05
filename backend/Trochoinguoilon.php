<?php
session_start();
//kiểm tra session

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Trochoinguoilon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <script src="search.js"></script>

</head>
<body>
<header>
    <div class="header">
        <div class="header1">
            <img src="img/logo.webp" alt="logo">
            <label for="search">
                <input type="text" id="search" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <div id="searchResults">
                    <!-- Kết quả tìm kiếm hiển thị -->
                </div>
            </label>
            <div class="hotline">
                <i class="fa-solid fa-phone"></i>

                <p>Hotline<br>78910JQKA</p>
                <a href="cart.php" class="btn btn-outline"><i style="font-size: 30px; margin-top: 1px; margin-left: 10px; outline: none !important;" class="fa-solid fa-cart-shopping"></i></a>
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
        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width: 100%; background-color: #FEF7EF">
</header>
<div class="text">
    <div>
        <a href="home.php">Home  > </a>
        <p>Games</p>
    </div>
    <h2>GAMES FOR ADULTS</h2>
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
                <img src="https://gudgear.com/wp-content/uploads/2018/02/camping-activities-for-adults.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Experience a lively day of outdoor activities with games designed for adults, combining puzzles, team activities, and suburban fun.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQatPZOv88kmUUS0RRxrBXHZoF5Eb3oY5zANWV61epHxz8BSG6AJQ_tsyaqHh78nZEw36U&usqp=CAU" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Discover new locations and enjoy the natural atmosphere with outdoor games for adults, providing a relaxing and stimulating experience.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.theordinaryadventurer.com/wp-content/uploads/2019/10/IMG_2531-1024x768.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Create unique memories with friends through activities like camping, kayaking, and enjoying grilled food in the warm atmosphere of outdoor games</p>
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
        <a href="Trochoinguoilonchitiet.php">
            <img src="https://www.sukien-teambuilding.com/wp-content/uploads/to-chuc-teambuilding-buoi-toi.jpg" alt="">
        </a>
        <a href="Trochoinguoilonchitiet.php" class="name">Campfire Games</a>
        <h5 class="cost">
            <a href="Trochoinguoilonchitiet.php" class="buy-button">View Detail</a>
        </h5>
    </div>
    <div>
        <img src="https://vteambuilding.com/wp-content/uploads/2018/01/8.-Ban-nh%E1%BA%A1c-h%C3%B2a-t%E1%BA%A5u-1024x683.jpg" alt="" style="width: 280px; height: 200px;">
        <div class="name">Orchestra Harmony Game</div>
        <h5 class="cost"><a href="../frontend/Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20ban%20nhac%20hoa%20tau.docx" download="file.dox" class="buy-button">View Detail</a>
        </h5>
    </div>
    <div>
        <img src="https://bizweb.dktcdn.net/100/463/236/products/tro-choi-team-building-doan-ket-da-sua.png?v=1667918711933" alt="" style="width: 280px; height: 200px;">
        <div class="name">Team Wheel Game</div>
        <h5 class="cost">
            <a href="../frontend/Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20banh%20xe%20dong%20doi.docx"  download="file.dox" class="buy-button">View Detail</a>
        </h5>
    </div>
    <div>
        <img src="https://cdn.tgdd.vn//GameApp/1388369//bit-mat-bat-de-cach-2-800x450.png" alt="" style="width: 280px; height: 200px;">
        <div class="name">Blindfolded Goat Catching Game</div>
        <h5 class="cost">
            <a href="../frontend/Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20bit%20mat%20bat%20de.docx"  download="file.dox" class="buy-button">View Detail</a>
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
                    <a href="#">Game organization services</a><br><a href="#">Payment</a><br>
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
