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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link rel="stylesheet" href="Dothietyeudetail.css">
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

<div id="card-body">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:300px;height:200px;margin-top:30px">
        <ol class="carousel-indicators" >
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5.jpg?v=1634875258950" class="d-block w-100" alt="...">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-2.jpg?v=1634875260253" class="d-block w-100" alt="...">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-3.jpg?v=1634875261313" class="d-block w-100" alt="...">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-4.jpg?v=1634875262273" class="d-block w-100" alt="...">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-5.jpg?v=1634875263327" class="d-block w-100" alt="...">

            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5.jpg?v=1634875258950" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-2.jpg?v=1634875260253" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-3.jpg?v=1634875261313" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-4.jpg?v=1634875262273" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-5.jpg?v=1634875263327" class="d-block w-100" alt="...">
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

    <div class="product-detail" style="margin-top:10px">
        <div class="product-title">Morakniv Companion Spark Stainless Steel Survival Knife - Black</div>
        <div class="price">$299.99 <span class="discount-price">$350</span></div>
        <div class="product-info">
            <p><strong>Type:</strong> Survival knife</p>
            <p><strong>Manufacturer:</strong> Updating</p>
            <p><strong>Delivery:</strong> Nationwide</p>
            <p><strong>Payment:</strong> Cash on delivery</p>
            <p><strong>Return/Exchange Policy:</strong> Free</p>
            <p><strong>Warranty:</strong> 10 years</p>
        </div>
        <div class="availability">
            <p><strong>Status:</strong> Out of stock <span class="out-of-stock">(Contact for more details)</span></p>
        </div>

        <div class="buttons">
            <a href="DothietyeuDetail.php?action=add&id=<?php echo$id ?>&<?php echo$sl ?>&gia=<?php echo$gia ?>" class="btn">Add to cart</a>
        </div>
    </div>

    <div class="navigation-bar">
        <a onclick="showContent('product-info')" style="color:#ffffff; cursor: pointer">Product Information</a>
        <a onclick="showContent('shipping-policy')" style="color:#ffffff; cursor: pointer">Shipping Policy</a>
        <a onclick="showContent('return-warranty')" style="color:#ffffff; cursor: pointer">Return & Warranty</a>
        <a onclick="showContent('payment-methods')" style="color:#ffffff; cursor: pointer">Payment Methods</a>
    </div>


    <!-- Corresponding content sections -->
    <div id="product-info" class="content-section">
        <h2>Waterproof 6-Inch Survival Knife - Made in Japan</h2>

        <h3>Technical Specifications</h3>
        <ul>
            <li><strong>Origin:</strong> The product is manufactured and originated from Japan, known for high quality and advanced manufacturing techniques.</li>
            <li><strong>Expiration Date:</strong> The knife has a long expiration date when properly stored and used. There is no specific expiration date due to emphasis on proper storage and maintenance.</li>
        </ul>

        <h3>Technical Details</h3>
        <ul>
            <li><strong>Blade Material:</strong> The blade is made of high-quality stainless steel, resistant to corrosion and retains sharpness for a long time.</li>
            <li><strong>Knife Handle:</strong> The handle is made of waterproof and impact-resistant material to ensure durability in all weather conditions.</li>
            <li><strong>Blade Length:</strong> 6 inches, ideal for survival and outdoor cutting tasks.</li>
        </ul>

        <h3>Design Features</h3>
        <ul>
            <li><strong>Blade Design:</strong> Drop-point design facilitates various cutting tasks.</li>
            <li><strong>Knife Handle:</strong> Features an anti-slip structure for safety during use.</li>
            <li><strong>Knife Sheath:</strong> Includes a safety lock to securely hold the knife and prevent accidents.</li>
        </ul>

        <h3>Benefits</h3>
        <ul>
            <li><strong>Versatility:</strong> Suitable for various purposes such as wood cutting, cooking, or outdoor cutting tasks.</li>
            <li><strong>Survival:</strong> An essential tool for survival activities and camping.</li>
            <li><strong>Durability:</strong> Designed with materials and features to withstand harsh conditions and long-term use.</li>
        </ul>
    </div>

    <div class="content-section" id="shipping-policy">
        <header>
            <h1 style="color: #f29f33">Shipping Policy</h1>
        </header>

        <div>
            <h2 style="text-align: start">1. Shipping Fee</h2>
            <ul>
                <li>
                    We provide free shipping for orders over $50. For orders under $50, the shipping fee will depend on the delivery address and the shipping method you choose.
                </li>
            </ul>
        </div>

        <div>
            <h2 style="text-align: start">2. Delivery Time</h2>
            <ul>
                <li>
                    Delivery time may vary depending on the delivery address and the selected shipping method. Typically, we aim to deliver within 3-5 business days from the date of order.
                </li>
            </ul>
        </div>

        <div>
            <h2 style="text-align: start">3. Shipping Methods</h2>
            <ul>
                <li>
                    We support various shipping methods, including Standard Shipping, Express Shipping, and International Shipping. You can choose the most suitable method for your needs when placing an order.
                </li>
            </ul>
        </div>

        <div>
            <h2 style="text-align: start">4. Returns/Exchanges</h2>
            <ul>
                <li>
                    We accept returns/exchanges within 30 days from the date of receipt. For more details and instructions on returns/exchanges, please read our Return/Exchange Policy.
                </li>
            </ul>
        </div>
    </div>

    <div class="content-section" id="return-warranty">
        <header>
            <h1>Return & Warranty Policy</h1>
        </header>

        <div>
            <h2 style="text-align: start">1. Returns/Exchanges</h2>
            <ul>
                <li>
                    We accept returns/exchanges within 30 days from the date of receipt. To request a return/exchange, please contact us via the email address or phone number provided on our Contact page. The returned/exchanged items must be in new and undamaged condition.
                </li>
            </ul>
        </div>

        <div>
            <h2 style="text-align: start">2. Warranty</h2>
            <ul>
                <li>
                    All products are warranted for the specified period. If the product has any manufacturing defects, we will be responsible for repairing or replacing the product. To request warranty service, please contact our support department.
                </li>
            </ul>
        </div>

        <div>
            <h2 style="text-align: start">3. Return & Warranty Conditions</h2>
            <ul>
                <li>The product must be returned in its original packaging and unused condition.</li>
                <li>No returns/exchanges are applicable for discounted or special promotion items.</li>
                <li>We are not responsible for loss or damage during the return/exchange shipping process.</li>
            </ul>
        </div>

    </div>

    <div class="content-section" id="payment-methods">

        <header><h1>Payment Methods</h1></header>
        <ul>
            <li>
                We offer various payment methods to ensure convenience for our customers. Choose the payment method that suits you best:
            </li>
        </ul>

        <div id="creditCard">
            <h2 style="text-align: start">1. Credit Card</h2>
            <ul>
                <li>
                    Payment by credit/debit card. We accept Visa, MasterCard, and American Express.
                </li>
            </ul>
        </div>

        <div id="payPal">
            <h2 style="text-align: start">2. PayPal</h2>
            <ul>
                <li>
                    Payment via PayPal, a secure and convenient online payment method.
                </li>
            </ul>
        </div>


        <div id="bankTransfer">
            <h2 style="text-align: start">3. Bank Transfer</h2>
            <ul>
                <li>
                    Direct bank transfer to our account. Account information will be provided when you choose this method.
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
                <p>SUBSCRIBE</p>
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
                        <a href="#">Phone Number</a><br>
                        <a href="#">Links</a><br>
                    </div>
                    <div class="Support">
                        <h3>CUSTOMER SUPPORT</h3><br>
                        <a href="#">Contact</a><br>
                        <a href="#">Handling Complaints</a><br>
                        <a href="#">User Guide</a><br>
                        <a href="#">Warranty, Returns</a><br>
                        <a href="#">Contact</a><br>
                    </div>
                    <div class="Support">
                        <h3>SERVICES</h3><br>
                        <a href="#">Products</a><br>
                        <a href="#">Game Organization Services</a><br>
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
        <p class="license">@ Copyright by ... | Provided by ...</p>
    </div>
    <script src="Dothietyeudetail.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
