<?php
ini_set('display_errors', 'off');
include "project.php";
$project = new projectFptHappy();

$id = $_GET['id'];
$product = $project->getAllProduct6();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Dichvutochucdetail.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link rel="stylesheet" href="Dichvutour.css">
    <link rel="stylesheet" href="Dichvutochuc.css">
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
    <div class="servicedetail">
        <p style="margin-left:50px"><strong>Price:</strong> 99$</p>
        <p><strong>Duration:</strong> 1 day</p>
        <p><strong>Departure:</strong> 07/03/2024</p>
        <a href="Thanhtoandichvutour.php?id=<?php echo $id ?>" style="margin-bottom:15px">BOOK NOW</a>
    </div>
</div>

<div class="images">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img(dvtourdetail)/img1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img(dvtourdetail)/img2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img(dvtourdetail)/img3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img(dvtourdetail)/img4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img(dvtourdetail)/img5.jpg" class="d-block w-100" alt="...">
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
    <p>Transport: Car (7-seater)</p>
    <p>Time: 1 day</p>
    <p>Departure Date: 07/03/2024</p>
</div>

<div class="preparation">
    <h3>Package Services</h3>
    <h3>Preparation</h3>
    <ul>
        <li>
            <strong>Camping Equipment:</strong>
            <ul>
                <li>Quality camping tent with enough space for everyone.</li>
                <li>Camping drill to set up the tent.</li>
                <li>Sleeping bags and tent mats.</li>
                <li>Headlamp or portable lamp for easy movement in the dark.</li>
            </ul>
        </li>
        <li><strong>Food and Water</strong>:
            <ul>
                <li>Provisions such as packaged food, biscuits, canned meat.</li>
                <li>Cooking utensils such as gas stove or barbecue.</li>
                <li>Enough drinking water for everyone and emergency water reserves.</li>
            </ul>
        </li>
        <li><strong>Personal Items and Medical</strong>:
            <ul>
                <li>Personal toiletries such as toothpaste, toilet paper, soap.</li>
                <li>Basic medical support kit with cotton, antiseptic, bandages.</li>
                <li>Personal medication (if any).</li>
            </ul>
        </li>
        <li><strong>Clothing and Outdoor Gear</strong>:
            <ul>
                <li>Backup clothing based on weather.</li>
                <li>Comfortable and appropriate footwear for the environment.</li>
                <li>Water bottle or reusable water bottle.</li>
            </ul>
        </li>
        <li><strong>Temperature Control Tools</strong>:
            <ul>
                <li>Waterproof sleeping bag or warm sleeping bag.</li>
                <li>Windproof and rainproof jacket.</li>
            </ul>
        </li>
        <li><strong>Fire Group Tools</strong>:
            <ul>
                <li>Spices, light food for cooking on fire.</li>
                <li>Stove or gas stove.</li>
                <li>Firelighter or lighter.</li>
            </ul>
        </li>
    </ul>
    <div class="card-deck">
        <div class="card" style="width:200px;height:300px; margin-left:50px">
            <img src="https://chothueleutrai.com/wp-content/uploads/2021/09/thiet-bi-can-thiet-khi-di-cam-trai.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card" style="width:200px;height:300px;">
            <img src="https://armyhaus.com/wp-content/uploads/2019/01/Complete-camping-essentials-810x402.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card" style="width:200px;height:300px; margin-right:50px">
            <img src="https://duylinhfood.com/wp-content/uploads/2021/05/z2506097803692_38e60b1934c6ea59b860822351ab4580-533x400.jpg" class="card-img-top" alt="...">
        </div>
    </div>
</div>



<div class="day-one">
    <h3>Camping Itinerary at Dau Tieng Lake - Day 1: Move to Dau Tieng Lake and camp overnight</h3>
    <ul>
        <p><strong>Morning:</strong></p>
        <li>From 6:30 to 7:30: Wake up early, have breakfast and pack luggage at Hoang Mai hotel (Tay Ninh).</li>
        <li>From 7:45 to 8:45: We will pick you up to prepare for the move (by family car) to Dau Tieng Lake. Estimated travel time is about 1 hour (from 7:45 to 8:45).</li>
        <li>From 8:45 to 9:00: After arriving at the lake, everyone prepares their luggage and boards the boat to the campsite.</li>
        <li>From 9:00 to 10:00: Enjoy, explore the beautiful scenery of the lake area.</li>
    </ul>

    <div class="text-center">
        <img src="https://tropiad.com/wp-content/uploads/2022/09/Kinh-nghie%CC%A3%CC%82m-du-li%CC%A3ch-Ho%CC%82%CC%80-Da%CC%82%CC%80u-Tie%CC%82%CC%81ng.jpg" class="rounded" alt="...">
    </div>
</div>

<div class="day-two">
    <p><strong>Noon - Afternoon:</strong></p>
    <ul>
        <li>From 10:00 to 12:30: After arriving at the lake shore, everyone eats lunch together, which has been prepared in advance, or you can also buy some specialties from Tay Ninh at the nearby store to enjoy. After lunch, you and your group will set up the Dau Tieng Lake Camp, change clothes, and take pictures "live" with the beautiful lake view.</li>
        <li>From 13:00 to 16:30: In the afternoon, everyone can row a boat on the lake and participate in fishing with local people. If you want to swim, you can also immerse yourself in the clear water of Dau Tieng Lake. Note when swimming in the lake, you should wear a life jacket and safety equipment for your body.</li>
        <li>From 16:30 to 17:30: Back to the camp, you can go cycling, collect firewood, and prepare dinner together under the guidance of the organizers. In particular, if you love photography, do not miss the beautiful moment of sunset on the lake.</li>
    </ul>

    <p><strong>Evening:</strong></p>
    <ul>
        <li>From 17:30 to 19:00: In the evening, everyone participates in BBQ party activities by the lake. Experience the feeling of being a chef, and enjoy your own delicious barbecue dishes in the midst of nature. After dinner, everyone will gather around the campfire to share stories, sing and play team building games.</li>
        <li>From 19:00 to 21:00: Free time for relaxing, chatting, and playing group games at the campfire. Before going to bed, you will have a cup of hot tea and enjoy the cool breeze from the lake.</li>
        <li>From 21:00 onwards: Good night everyone, rest and prepare for the next morning's activities.</li>
    </ul>
    <div class="text-center">
        <img src="https://goldencoto.vn/wp-content/uploads/2022/03/nha-hang-sua-khu-tiec-bbq-bai-bien-3.png" class="rounded" alt="...">
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
