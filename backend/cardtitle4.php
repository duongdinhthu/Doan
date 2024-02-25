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
</head>
<body>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Dichvutochuc.css">
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
            <a href="home.html" class="btn btn-outline">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Games</button>
                <div class="dropdown-content">
                    <a href="Trochoitreem.html"> Kids</a>
                    <a href="Trochoigiadinh.html">Family</a>
                    <a href="Trochoinguoilon.html">Adults</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                    <a href="Docanhan.html">Personal items</a>
                    <a href="Dothietyeu.html">Essentials</a>
                    <a href="Thucpham.html">Food</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="Dichvutrongoi.html">Package</a>
                    <a href="Dichvutour.html"> Tour</a>
                    <a href="Dichvutochuc.html">Organize</a>
                </div>
            </div>
            <a href="tintuc.html" class="btn btn-outline">News</a>
            <a href="lienhe.html" class="btn btn-outline">Contact</a>
            <a href="../backend/login.php" class="btn btn-outline">Login</a>

        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width: 100%">
</header>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 20px;
    }
    .news {
        max-width: 800px;
        margin: 0 auto;
        background-color: #f8f8f8;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333;
    }
    p {
        color: #555;
    }
    .comments {
        margin-top: 20px;
    }
    .comment {
        background-color: #f3f3f3;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .comment p {
        margin: 0;
    }
    .comment-form {
        margin-top: 20px;
    }
    .comment-form label {
        display: block;
        margin-bottom: 8px;
    }
    .comment-form input,
    .comment-form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .comment-form button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .comment-form button:hover {
        background-color: #45a049;
    }
</style>
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
            <a href="home.html" class="btn btn-outline">Home</a>
            <div class="menu">
                <ul>
                    <li><a href="home.html">Games</a>
                        <ul class="ul">
                            <li><a href="Trochoitreem.html"> Kids</a></li>
                            <li><a href="Trochoigiadinh.html">Family</a></li>
                            <li><a href="Trochoinguoilon.html">Adults</a></li>
                        </ul>
                    </li>
                    <li><a href="home.html">Products</a>
                        <ul class="ul">
                            <li><a href="Docanhan.html">Personal Items</a></li>
                            <li><a href="Dothietyeu.html">Essentials</a></li>
                            <li><a href="Thucpham.html">Food</a></li>
                        </ul>
                    </li>
                    <li><a href="home.html">Services</a>
                        <ul class="ul">
                            <li><a href="Dichvutrongoi.html">Packages</a></li>
                            <li><a href="Dichvutour.html"> Tour</a></li>
                            <li><a href="Dichvutochuc.html">Organization</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="tintuc.html" class="btn btn-outline">News</a>
            <a href="lienhe.html" class="btn btn-outline">Contact</a>
            <a href="../backend/login.php" class="btn btn-outline">Log In </a>

        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width:100%;">
</header>
<div class="news">
    <h1>NEWS</h1>
    <h2>Outdoor Gear Store Ho Chi Minh City</h2>
    <p><strong>202 Reviews</strong></p>
    <p>Location of outdoor gear store in Ho Chi Minh City Saigon</p>

    <!-- Content of the news about the outdoor gear store -->

    <p>To find out more details and shop, you can visit FPT HAPPY store at the following address:</p>
    <p>Address: 369/1K Dinh Bo Linh, Ward 26, Binh Thanh District, Ho Chi Minh City.</p>
    <p>Website: <a href="https://dioutdoor.vn" target="_blank">https://dioutdoor.vn</a></p>
    <p>Contact hotline: 0979.729.140</p>

    <p>Buy and receive goods at stores and warehouse points:</p>
    <ul>
        <li>Outdoor Đi Store: 25 Luu Quy Ky, Hoa Cuong Bac Ward, Hai Chau District, Da Nang</li>
        <li>Ho Chi Minh City Warehouse: 369/1K Dinh Bo Linh, Binh Thanh District, Ho Chi Minh City</li>
        <li>Hanoi Warehouse: TDP Tan Xuan 3, Xuan Dinh, Bac Tu Liem, Hanoi</li>
    </ul>
    <p>Please contact before visiting FPT HAPPY warehouses in Hanoi and Ho Chi Minh City for guidance. FPT HAPPY sincerely thank you.</p>
</div>

<!-- Comment Section -->
<div class="comments">
    <h2>Comments</h2>
    <!-- Display comments here -->

    <!-- Example comment -->
    <div class="comment">
        <p><strong>User:</strong> John Doe</p>
        <p><strong>Comment:</strong> Wishing FPT HAPPY Company a joyful holiday!</p>
    </div>
</div>

<!-- Comment Form -->
<div class="comment-form">
    <h2>Add Comment</h2>
    <form action="#" method="post">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required>

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <button type="submit">Submit Comment</button>
    </form>
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
                <input type="email" placeholder="Enter your email address">
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

<<<<<<< HEAD
=======

>>>>>>> a3a3c8a7fabf26de193bf5790584568b48c5a696
