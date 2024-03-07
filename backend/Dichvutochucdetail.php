<?php
ini_set('display_errors', 'off');
include "project.php";
$project = new projectFptHappy();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link rel="stylesheet" href="Dichvutochucdetail.css">
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

<div class="service-detail">
    <h2>Tour Information</h2>
    <p style="margin-left:50px"><strong>Price:</strong> $2,400,000</p>
    <p><strong>Duration:</strong> 1 day</p>
    <p><strong>Departure:</strong> 03/07/2024</p>
    <a href="Thanhtoandichvutochuc.php" style="margin-bottom:15px">BOOK NOW</a>
</div>

<div class="images">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators" >
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                <img src="./img(dvtochucdetail)/img1.jpg" class="d-block w-100" alt="...">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                <img src="./img(dvtochucdetail)/img2.jpg" class="d-block w-100" alt="...">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                <img src="./img(dvtochucdetail)/img3.jpg" class="d-block w-100" alt="...">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3">
                <img src="./img(dvtochucdetail)/img4.jpg" class="d-block w-100" alt="...">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4">
                <img src="./img(dvtochucdetail)/img5.jpg" class="d-block w-100" alt="...">

            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img(dvtochucdetail)/img1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img(dvtochucdetail)/img2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img(dvtochucdetail)/img3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img(dvtochucdetail)/img4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img(dvtochucdetail)/img5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="tour-details">
    <h3>Tour Program</h3>
    <p><strong>Transport:</strong> Car (7-seater)</p>
    <p><strong>Time:</strong> 1 day</p>
    <p><strong>Departure Date:</strong> 07/03/2024</p>
</div>

<div class="preparation">
    <h3>Game Organization Services</h3>
    <h3>Preparation</h3>
    <ul>
        <li>Each kayaker needs an appropriate-sized and fitting life jacket.</li>
        <li><strong>Helmet:</strong> A helmet helps protect your head when navigating waters.</li>
        <li><strong>Boat Control Tools:</strong>
            <ul>
                <li>Kayak paddle or double-bladed paddle for more precise control.</li>
            </ul>
        </li>
        <li><strong>Safety and Repair Equipment:</strong>
            <ul>
                <li>Spray bottle to dry the kayak if it gets waterlogged.</li>
                <li>Waterproof bag for discreet water storage.</li>
                <li>First aid kit.</li>
                <li>Kayak repair kit, including patches, glue, and waterproof tape.</li>
                <li><strong>Waterproof Bag:</strong> Waterproof bag to protect mobile phones, cameras, or other important items.</li>
                <li><strong>Storage Container:</strong> Container or waterproof bag to protect belongings from water.</li>
                <li><strong>Appropriate Clothing:</strong>
                    <ul>
                        <li>Waterproof or quick-drying clothing.</li>
                        <li>Hat to protect against sunlight.</li>
                        <li><strong>Sunglasses:</strong> Sunglasses help protect the eyes from the sun's glare.</li>
                        <li><strong>Sunscreen:</strong> Sunscreen to protect the skin from UV rays.</li>
                    </ul>
                </li>
                <li>Map and Compass if kayaking in areas with no GPS signal.</li>
            </ul>
        </li>
        <li><strong>Food and Water:</strong>

            <ul>
                <li>Enough drinking water to maintain health.</li>
                <li>Light and easy-to-prepare food.</li>
            </ul>
        </li>
        <li>Cleaning and Waste Tools:
            <ul>
                <li>Trash bags and waste bags.</li>
                <li>Hand sanitizer.</li>
            </ul>
        </li>
    </ul>

    <div class="card-deck">
        <div class="card">
            <img src="https://contents.mediadecathlon.com/p1820354/k$388329140c56ac8e23c0baf651813bde/image.jpg?f=250x250&format=auto" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <img src="https://geos-nature.org/wp-content/uploads/2018/10/pic-niclago-negro-620x412.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <img src="https://bmyc.vn/wp-content/uploads/2022/07/2.jpg" class="card-img-top" alt="...">
        </div>
    </div>
</div>

<div class="day-one">
    <h3>Schedule</h3>
    <p><strong>- Morning</strong></p>
    <ul>
        <li><strong>From 8:30 to 9:00:</strong> The tour company's car and guide pick up guests at the hotel in the Hanoi Old Quarter. Then depart to Ha Long Bay, stop in Hai Duong province for rest and sightseeing.</li>
        <li><strong>12:30:</strong> Arrive at Tuan Chau port, board the boat and enjoy various delicious drinks, then have lunch with traditional Vietnamese dishes. The boat starts moving, cruising on the bay to reach the legendary fishing village.</li>
    </ul>
    <div class="text-center">
        <img src="https://ik.imagekit.io/tvlk/blog/2023/06/dong-thien-cung-12-1024x768.jpg?tr=dpr-2,w-675" class="rounded" alt="...">
    </div>
</div>

<div class="day-two">
    <p><strong>- Afternoon</strong></p>
    <ul>
        <li><strong>1:00 PM:</strong> Guests experience kayaking or bamboo boat exploring the Thien Cung Cave. This place is known as the "paradise on earth" with surreal, magnificent beauty.</li>
        <li>The next destination in the 1-day Halong Bay tour is Stone Dog Island. This is a very famous place in Halong Bay, attracting tourists because of its unique and strange shape.</li>
        <li>If time permits, guests can take a small tour around the bay, admire the magnificent natural scenery, and enjoy the cool, fresh air.</li>
        <li>Then, return to Tuan Chau International Port by boat.</li>
        <li><strong>4:30 PM:</strong> Guests are taken back to Hanoi, with a 25-minute stop in Hai Duong.</li>
        <li><strong>Approximately 8:30 PM:</strong> Arrive in Hanoi, drop off guests at the hotel in the Old Quarter. The tour guide says goodbye and see you again in other journeys.</li>
    </ul>
    <div class="text-center">
        <img src="https://ik.imagekit.io/tvlk/blog/2023/06/dong-thien-cung-12-1024x768.jpg?tr=dpr-2,w-675" class="rounded" alt="...">
    </div>
</div>

<div class="footer">
    <div class="footer0">
        <div class="footer1">
            <img src="img/logo_footer.webp" alt="">
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
                    <a href="#">Instructions for use</a><br>
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
<script src="../../DoanKI1%20(1)/frontend/trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>