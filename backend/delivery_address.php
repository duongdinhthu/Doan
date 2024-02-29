<?php
session_start();
//kiểm tra session

include "project.php";
$project = new projectFptHappy();
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/Doan/frontend/home.html");
    exit;
}

$username = $_GET['username'];
$random_code =$project->generateRandomCode();
$infor= $project->inforCustomerByUser($username);
$cart = $project->getAllCart($username);
$totalcart = $project->totalShow($username);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<style>
    body{
        background-color: #FEF7EF;
    }
    .order, .Backshopping {
        background-color: #f29f33;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .order:hover, .Backshopping:hover {
        background-color: #f29f33;
    }


    h1, h3, strong, th {
        color: #f29f33;
    }


    form input {
        border: 1px solid black;
        border-radius: 8px;
        padding: 10px;
        padding-right: 100px;
        margin-bottom: 10px;
        outline: none;
    }

    .table {
        width: 100%;
    }

    .table th, .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }


</style>
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
<a href="cart.php" class="Backshopping" style="text-decoration: none; color:white; margin-left: 300px;
margin-top: 20px">Back Shopping cart</a>
<div class="container mt-5" style="background-color: white; border-radius: 20px; padding: 20px;margin-bottom: 50px; box-shadow: 2px 2px 2px #cccccc">
    <form action="billinfor.php" method="post">
        <?php foreach ($infor as $infor): ?>
            <h2 style="text-align: center; color: #f29f33; margin-bottom: 50px">Order Information</h2>
            <br>

            <label for="name">Name</label><br>
            <input name="name" type="text" id="name" required value="<?php echo $infor['name'] ?>"><br>
            <label for="phone">Phone</label><br>
            <input name="phone" type="text" id="phone" required value="<?php echo $infor['phone'] ?>"><br>
            <label for="address">Address</label><br>
            <input name="address" type="text" id="address" required value="<?php echo $infor['address'] ?>"><br>
            <br>
        <?php endforeach; ?>

        <br>
        <h3 style="text-align: center;">Product Information</h3>
        <div>
            <div style="padding: 20px; background-color: white; border-radius: 20px">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Product image</th>
                        <th>Product Name</th>
                        <th>List Price($)</th>
                        <th>Quantity</th>
                        <th>Total Price($)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cart as $cart): ?>
                        <tr>
                            <td><img src="<?php echo $cart["image"]; ?>" style="width:70px" class="card-img-top" alt="..."></td>
                            <td><?php echo $cart['name'] ?></td>
                            <td><?php echo $cart['list_price'] ?></td>
                            <td><?php echo $cart['SUM(c.quantity)'] ?></td>
                            <td><?php echo $cart['SUM(c.total_price)'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <h5 style="color: #f29f33">Total order value :
                        <label style="color: black" for="totalcart"><?php echo "$".$totalcart ?></label>
                        <input style="; display: none" name="totalcart" type="text" id="totalcart"  value="<?php echo "$".$totalcart ?>"></h5>
                </table>
                <br>
            </div>
        </div>
        <h3 style="text-align: center; margin-top: 50px">Payment Information</h3>
        <label for="code"></label><input type="text" id="code" name="code" value="<?php echo $random_code ?>" required style="display: none">

        <input type="radio" id="payment" name="payment" value="COD" required >
        <label for="payment">COD</label><br>
        <button class="order" type="submit" >Order</button>
        <br>
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

<script src="trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
