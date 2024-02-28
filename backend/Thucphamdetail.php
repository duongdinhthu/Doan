<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$username=$_SESSION["username"];
$sl ='1';
$id = $_GET['id'];
$gia = $_GET['gia'];

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $cart = $project-> checkProductByCart($username,$id,$sl,$gia);

}
$product = $project->getAllProduct3();

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
    <link rel="stylesheet" href="Dothietyeudetail.css">
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
        <p>Products</p>
    </div>
    <h2>DETAIL FOOD PRODUCT</h2>
    <hr/>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:300px;height:200px;margin-top:30px">
    <ol class="carousel-indicators" >
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
            <img src="https://cf.shopee.vn/file/2004a66f48abb8ff17e17144d2b14db5" class="d-block w-100" alt="...">

        </li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1">
            <img src="https://vn-test-11.slatic.net/p/3328c8c438f3c620ce9a8652f19b3e0e.jpg" class="d-block w-100" alt="...">

        </li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2">
            <img src="https://cf.shopee.vn/file/88d53e7b880288bb10628d9d75038f21" class="d-block w-100" alt="...">

        </li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpT97k5zUc2VW0G7KsS2IakfzCu_bYaRYHowyazLqqQJqr9HTgNqf6rUBsc70qK4HPvW4&usqp=CAU" class="d-block w-100" alt="...">
        </li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4">
            <img src="https://cf.shopee.vn/file/b1441a313fb6fa121f72c6ce50c3f144" class="d-block w-100" alt="...">

        </li>
    </ol>

    <script src="Dothietyeudetail.js"></script>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cf.shopee.vn/file/2004a66f48abb8ff17e17144d2b14db5" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://vn-test-11.slatic.net/p/3328c8c438f3c620ce9a8652f19b3e0e.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cf.shopee.vn/file/88d53e7b880288bb10628d9d75038f21" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpT97k5zUc2VW0G7KsS2IakfzCu_bYaRYHowyazLqqQJqr9HTgNqf6rUBsc70qK4HPvW4&usqp=CAU" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cf.shopee.vn/file/b1441a313fb6fa121f72c6ce50c3f144" class="d-block w-100" alt="...">
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
<script src="Dothietyeudetail.js"></script>
<div class="product-detail">
    <div class="product-title">Concentrated tomatoes</div>
    <div class="price">$2.99<span class="discount-price">$4</span></div>
    <div class="product-info">
        <p><strong>Type:</strong> Vegetables</p>
        <p><strong>Origin:</strong> Vietnam</p>
        <p><strong>Delivery:</strong> Nationwide</p>
        <p><strong>Payment:</strong> Cash on delivery</p>
        <p><strong>Return/Exchange policy:</strong> Free</p>
        <p><strong>Warranty:</strong> Not applicable</p>
    </div>
    <div class="availability">
        <p><strong>Status:</strong> In stock</p>
    </div>
    <div class="buttons">
        <a href="Thucphamdetail.php?action=add&id=<?php echo$id ?>&<?php echo$sl ?>&gia=<?php echo$gia ?>" class="btn">Buy now</a>
    </div>
</div>

<div class="navigation-bar">
    <a onclick="showContent('product-info')" style="color:#ffffff; cursor: pointer">Product Information</a>
    <a onclick="showContent('shipping-policy')" style="color:#ffffff; cursor: pointer">Shipping Policy</a>
    <a onclick="showContent('return-warranty')" style="color:#ffffff; cursor: pointer">Return & Warranty</a>
    <a onclick="showContent('payment-methods')" style="color:#ffffff; cursor: pointer">Payment Methods</a>
</div>
<div class="main-content">
    <div id="product-info" class="content-section">
        <h2>Product Information</h2>
        <h3>Product Features:</h3>
        <ul>
            <li>Weight: 200g</li>
            <li>Expiration date: 12 months from the production date</li>
            <li>Origin: Vietnam</li>
            <li>Ingredients: 100% natural tomatoes, no preservatives</li>
        </ul>
    </div>

    <div id="shipping-policy" class="content-section">
        <h2>Shipping Policy</h2>
        <ul>
            <li>
                We provide nationwide shipping services. Shipping fees will be calculated based on the delivery address and the shipping method you choose.
            </li>
            <li>
                The estimated delivery time is from 3 to 5 working days after the order is confirmed.
            </li>
        </ul>
    </div>

    <div id="return-warranty" class="content-section">
        <h2>Return/Exchange Policy and Warranty</h2>
        <ul>
            <li>
                We accept returns/exchanges within 30 days from the date of receipt of the goods. The product must be intact, unused, and undamaged.
            </li>
            <li>
                If the product has any manufacturing defects, we will be responsible for repairing or replacing the product free of charge within the warranty period.
            </li>
        </ul>
    </div>

    <div id="payment-methods" class="content-section">
        <h2>Payment Methods</h2>
        <ul>
            <li>
                We offer various payment methods such as credit/debit card payment, PayPal, and bank transfer.
            </li>
        </ul>
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
<script src="../../DoanKI1%20(1)/frontend/trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
