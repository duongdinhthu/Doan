<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location: login.php");
    exit;
}
include "project.php";
$studentManager = new projectFptHappy();
$username = $_POST['username'];
$password = $_POST['password'];

$password2 = $_POST['password2'];
$password3 = $_POST['password3'];
if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password2'])&&isset($_POST['password3'])){
    if (isset($password)){
        if ($password2===$password3){
            $studentManager->changePassword($username,$password,$password2,);
        }else{
            echo"The 2 new passwords do not match, please try again ";
        }
    }else{
        echo"Password has not been entered yet";
    }
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
    <link rel="stylesheet" href="changePassword.css">
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

                <p>Hotline<br>8910JQKA</p>
            </div>
        </div>
        <div class="d-flex">
            <a href="../frontend/home.html" class="btn btn-outline">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Games</button>
                <div class="dropdown-content">
                    <a href="../frontend/Trochoitreem.html">Kids</a>
                    <a href="../frontend/Trochoigiadinh.html">Family</a>
                    <a href="../frontend/Trochoinguoilon.html">Adults</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                    <a href="../frontend/Docanhan.html">Personal items</a>
                    <a href="../frontend/Dothietyeu.html">Essentials</a>
                    <a href="../frontend/Thucpham.html">Food</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="../frontend/Dichvutrongoi.html">Packages</a>
                    <a href="../frontend/Dichvutour.html"> Tours</a>
                    <a href="../frontend/Dichvutochuc.html">Organizing</a>
                </div>
            </div>
            <a href="../frontend/tintuc.html" class="btn btn-outline">News</a>
            <a href="../frontend/lienhe.html" class="btn btn-outline">Contact</a>
            <a href="login.php" class="btn btn-outline">Login</a>
        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width: 100%; background-color: #FEF7EF">
</header>
<div class="text">
    <div>
        <a href="../frontend/home.html">Home  > </a>
        <p>Accounts</p>
    </div>
    <h2>CHANGE PASSWORD</h2>
    <hr/>
</div>
<form action="" method="post" >
    <input type="hidden" name="choice" value="2">
<<<<<<< HEAD
    <label for="username">Username:</label>
    <input name="username" type="text" id="username" required class="form-control">
    <label for="password">Old password:</label>
    <input name="password" type="password" id="password" required class="form-control">

    <label for="password2">Enter your new password:</label>
    <input name="password2" type="password" id="password2" required class="form-control">
    <label for="password3">Enter the new password again:</label>
    <input name="password3" type="password" id="password3" required class="form-control">
=======
    <label for="username" style="display: none">Username:</label>
    <input name="username" type="text" id="username" placeholder="Username" required><br>
    <label for="password" style="display: none">Old password:</label>
    <input name="password" type="password" id="password" placeholder="Old password" required><br>
    <label for="password1" style="display: none">Enter the old password again:</label>
    <input name="password1" type="password" id="password1" placeholder="New password" required><br>
    <label for="password2" style="display: none">Enter your new password:</label>
    <input name="password2" type="password" id="password2" required><br>
    <label for="password3" style="display: none">Enter the new password again:</label>
    <input name="password3" type="password" id="password3" required><br>
>>>>>>> 6e944ea614ebb0ae20e09c71ccba9a77b01c4209
    <br>
    <button type="submit" class="btn btn-primary">Change Password</button>
    <a href="login.php" class="btn btn-success">Re-Login</a>
    <a href="home.php" class="btn btn-primary">Return to home page</a>
</form>
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




