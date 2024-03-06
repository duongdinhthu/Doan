<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/Doan/backend/login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <script src="search.js"></script>
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
        border-radius: 10px;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    form button{

    }

    .order:hover, .Backshopping:hover {
        background-color: #654145;
    }


    h1, h3, strong, th {
        color: #f29f33;
    }


    form input {
        border: 1px solid grey;
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
    .text{
        margin-top: 30px;
        margin-bottom: 50px;
        text-align: center;
    }
    .text div{
        justify-content: center;
        display: flex;
    }
    .text div a{
        text-decoration: none;
        color: #654145;
        transition: 0.3s ease-in-out;
        font-size: 18px;
    }
    .text div a:hover{
        color: #f29f33;
    }
    .text div p{
        margin-left: 5px;
        color: #f29f33;
        font-weight: bold;
        font-size: 18px;
    }
    .text h2{
        color: #f29f33;
        font-weight: bold;
    }
    .text hr{
        width: 100px;
        background-color: #f29f33;
    }

</style>
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
        <p>Shopping cart</p>
    </div>
    <h2>UPDATE PAYMENT INFORMATION</h2>
    <hr/>
</div>
<a href="cart.php" class="Backshopping" style="text-decoration: none; color:white; margin-left: 200px; margin-top: 20px">Back Shopping cart</a>
<div class="container mt-5" style="background-color: white; border-radius: 20px; padding: 20px;margin-bottom: 50px; box-shadow: 2px 2px 2px #cccccc">
    <form action="billinfor.php" method="post">
        <?php foreach ($infor as $infor): ?>
            <h2 style="text-align: center; color: #f29f33; margin-bottom: 50px">Order Information</h2>
            <br>
            <h3 style="text-align: center;">Consignee information</h3>
            <label style="margin-left: 30px" for="name">Name</label><br>
            <input style="margin-left: 30px" name="name" type="text" id="name"  value="<?php echo $infor['name'] ?>" required><br>
            <label style="margin-left: 30px" for="phone">Phone</label><br>
            <input style="margin-left: 30px" name="phone" type="text" id="phone"  value="<?php echo $infor['phone'] ?>" required><br>
            <label style="margin-left: 30px" for="address">Address</label><br>
            <input style="margin-left: 30px" name="address" type="text" id="address"  value="<?php echo $infor['address'] ?>" required><br>
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

                </table>
                <h5 style="color: #f29f33">Total order value :
                    <label style="color: black" for="totalcart"><?php echo "$".$totalcart ?></label>
                    <input style="; display: none" name="totalcart" type="text" id="totalcart"  value="<?php echo "$".$totalcart ?>"></h5>
                <br>
            </div>
        </div>
        <h3 style="text-align: center; margin-top: 10px">Payment Methods</h3>
        <label for="code"></label><input type="text" id="code" name="code" value="<?php echo $random_code ?>" required style="display: none">
        <input style="margin-left: 30px" type="radio" id="cod" name="payment" value="COD" required >
        <label for="payment">COD</label><br>
        <div id="shipcod" style="display: none; margin-left: 50px" >
            <h6>Consignee information:</h6>
            <h6>Name:<?php echo $infor['name'] ?></h6>
            <h6>Phone:<?php echo $infor['phone'] ?></h6>
            <h6>Address:<?php echo $infor['address'] ?></h6><br>
        </div>
        <input style="margin-left: 34px" type="radio" id="banking" name="payment" value="Internet Banking" required >
        <label for="">Internet Banking</label>
        <div id="internetbaking" style="display: none; margin-left: 50px" >
            <div style="display: flex">
                <div>
                    <h6>Transfer information:</h6>
                    <h6>Military Bank (MB)</h6>
                    <h6>Number:8030103067001</h6>
                    <h6>    Name: Dương Đình Thứ</h6><br>
                </div>
                <div>
                    <img src="./img/bank.jpg" height="300px">
                </div>
            </div>
        </div>
        <br>
        <input style="margin-left: 34px" type="radio" id="visa" name="payment" value="VISA, MasterCard" required >
        <label for="payment">VISA, MasterCard</label><br>
        <div id="visacard" style="display: none; margin-left: 50px" >
            <h6>Card Number:<input style="margin-left: 15px;width: " ></h6>
            <h6>Card Holder:<input style="margin-left: 23px" ></h6>
            <h6>Expiration date:<input type="date" ></h6>
            <h6>CVV: <input style="margin-left: 75px" ></h6><br>
        </div>


        <br>
        <button style="display: flex; justify-content: end; margin-left: 1000px" class="order" type="submit" required>Order</button>
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
<script>
    document.getElementById('cod').addEventListener('change', function() {
        var shipcod = document.getElementById('shipcod');
        if (this.checked) {
            shipcod.style.display = 'block';
        } else {
            shipcod.style.display = 'none';
        }

        var internetBanking = document.getElementById('internetbaking');
        internetBanking.style.display = 'none';

        var visaCard = document.getElementById('visacard');
        visaCard.style.display = 'none';
    });

    document.getElementById('banking').addEventListener('change', function() {
        var internetBanking = document.getElementById('internetbaking');
        if (this.checked) {
            internetBanking.style.display = 'block';
        } else {
            internetBanking.style.display = 'none';
        }

        var shipcod = document.getElementById('shipcod');
        shipcod.style.display = 'none';

        var visaCard = document.getElementById('visacard');
        visaCard.style.display = 'none';
    });

    document.getElementById('visa').addEventListener('change', function() {
        var visaCard = document.getElementById('visacard');
        if (this.checked) {
            visaCard.style.display = 'block';
        } else {
            visaCard.style.display = 'none';
        }

        var shipcod = document.getElementById('shipcod');
        shipcod.style.display = 'none';

        var internetBanking = document.getElementById('internetbaking');
        internetBanking.style.display = 'none';
    });
</script>



<script src="trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
