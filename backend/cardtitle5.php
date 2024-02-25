<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
?>

<<<<<<< HEAD

=======
>>>>>>> a3a3c8a7fabf26de193bf5790584568b48c5a696
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
<<<<<<< HEAD

    .container {
        max-width: 600px;
        margin: 0 auto;
    }

    h1 {
        color: #333;
        text-align: center;
    }

    p {
        color: #555;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    strong {
        color: #333;
    }
=======
    .announcement {
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
>>>>>>> a3a3c8a7fabf26de193bf5790584568b48c5a696
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
<<<<<<< HEAD
</head>
<body>

<div class="container">
    <h1>Tết Holiday Notice</h1>

    <p>Dear customers/members,</p>

    <p>On the occasion of Lunar New Year, we would like to inform you of the holiday schedule as follows:</p>

    <ul>
        <li><strong>Start of holiday:</strong> Thursday, January 31, 2020, on the 30th day of the Lunar December of the year of Tan Suu.</li>
        <li><strong>Return to work:</strong> Monday, February 07, 2020, on the 8th day of the Lunar January of the year of Nhâm Dần.</li>
    </ul>

    <p>During the Tet holiday, we will not be able to receive and process orders. All orders and support requests will be processed after the return to work.</p>

    <p>If you need urgent support, please contact:</p>

    <ul>
        <li><strong>Hotline:</strong> 0123 456 789</li>
        <li><strong>Email:</strong> support@example.com</li>
    </ul>

    <p>Thank you for your support of FPT HAPPY throughout the past time. We wish you a New Year filled with Peace, Prosperity, and All Wishes Come True.</p>
=======

</head>
<body>


<div class="announcement">

    <h2>NOTICE OF VIETNAM NATIONAL DAY OFF SEPTEMBER 2, 2023</h2>
    <p><strong>76 Reviews</strong></p>
    <p>Announcement of the Vietnam National Day off September 2, 2023</p>

    <p>To our valued customers and partners,</p>
    <p>FPT HAPPY Co., Ltd. respectfully announces the schedule of the National Day off September 2, 2023 of its branches:</p>

    <!-- Content of holiday notice -->

    <p>Please note: We will temporarily suspend express delivery services at all 3 branches during the holiday.</p>

    <p>During the holiday, if you have any needs or questions, please send information via email or leave a message directly on our website. We will respond as soon as possible.</p>

    <p>FPT HAPPY Co., Ltd. wishes our customers and partners a happy, peaceful holiday full of joy with family and loved ones.</p>

    <p>Thank you and congratulations on the Vietnam National Day!</p>

    <p>FPT HAPPY Co., Ltd.</p>
>>>>>>> a3a3c8a7fabf26de193bf5790584568b48c5a696
</div>

<!-- Comment Section -->
<div class="comments">
    <h2>Comments</h2>
<<<<<<< HEAD
    <!-- Display comments here -->
=======

>>>>>>> a3a3c8a7fabf26de193bf5790584568b48c5a696

    <!-- Example comment -->
    <div class="comment">
        <p><strong>User:</strong> John Doe</p>
<<<<<<< HEAD
        <p><strong>Comment:</strong> Wishing FPT HAPPY Company a joyful holiday!</p>
=======
        <p><strong>Comment:</strong> Wishing FPT HAPPY Co., Ltd. a holiday full of joy!</p>
>>>>>>> a3a3c8a7fabf26de193bf5790584568b48c5a696
    </div>
</div>

<!-- Comment Form -->
<div class="comment-form">
    <h2>Add Comment</h2>
    <form action="#" method="post">
<<<<<<< HEAD
        <label for="username">User Name:</label>
=======
        <label for="username">Username:</label>
>>>>>>> a3a3c8a7fabf26de193bf5790584568b48c5a696
        <input type="text" id="username" name="username" required>

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

<<<<<<< HEAD
        <button type="submit">Submit Comment</button>
=======
        <button type="submit">Send Comment</button>
>>>>>>> a3a3c8a7fabf26de193bf5790584568b48c5a696
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
