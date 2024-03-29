<?php
session_start();
ini_set('display_errors', 'off');
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
include "project.php";
$loginPermissions = new projectFptHappy();
$server = "Localhost:3306";    //your ip and port
$user = "root";                            //username by default give it root
$password = "";                                   // default password is empty
$databse = "fpthappy";             // database name

$conn = mysqli_connect($server, $user, $password, $databse);

if ($conn) {
    echo "<p hidden='hidden'>ok</p>";
} else {
    echo "";
}
$username=$_POST['username'];
$password=$_POST['password'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginPermissions->accountAdmin($username,$password);
}
if (isset($_GET['id'])  && isset($_GET['gia']) && isset($_GET['sl'])) {
    $id=$_GET['id'];
    $gia=$_GET['gia'];
    $sl=$_GET['sl'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $loginPermissions->accountCustomer1($username,$password,$id,$gia,$sl);
    }
}

if (isset($_GET['action'])&&isset($_GET['id'])  && isset($_GET['gia']) && isset($_GET['sl'])) {
    $id=$_GET['id'];
    $gia=$_GET['gia'];
    $sl=$_GET['sl'];
    $use=$_GET['user']
    ?>
    <script>
        swal({
            title: "Success",
            text: "Congratulations, you have successfully registered an account named <?php echo $use?>, please log in",
            icon: "success",
        });
    </script>
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $loginPermissions->accountCustomer1($username,$password,$id,$gia,$sl);
    }
}else if(isset($_GET['action'])&&$_GET['action']==='login1'){
    $use=$_GET['user'];
    ?>
    <script>
        swal({
            title: "Success",
            text: "Congratulations, you have successfully registered an account named <?php echo $use?>, please log in",
            icon: "success",
        });
    </script>
    <?php
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
    <link rel="stylesheet" href="login.css">
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
    <div class="login">
        <div class="text">
            <div>
                <a href="home.php">Home  > </a>
                <p>Account</p>
            </div>
            <h2>LOGIN QUICK</h2>
            <hr/>
        </div>
        <form action="" method="post" >
            <label for="username" style="display: none">Username:</label>
            <input name="username" placeholder="Username" type="text" id="username" required><br>
            <label for="password" style="display: none">Password:</label>
            <input name="password" placeholder="Password" type="password" id="password" required>
            <br>
            <div class="tag-a">
                <a href="register2.php?gia=<?php echo$gia ?>&id=<?php echo$id ?>&sl=<?php echo$sl ?>">Already have an account?<br> register</a>
            </div>
            <button type="submit" >Login</button>
        </form>
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
</body>
</html>
