<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
$username = $_SESSION["username"];
include "project.php";
$carts = new projectFptHappy();

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id=$_GET['id'];
    $delete = $carts->deleteItemByCart($id);

}
if (isset($_GET['action']) && $_GET['action'] === 'return' && isset($_GET['id'])) {
    $id=$_GET['id'];
    $delete = $carts->returnItemByCart($id);

}
if (isset($_GET['action']) && $_GET['action'] === 'delete1' && isset($_GET['id'])) {
    $id=$_GET['id'];
    $delete = $carts->deleteItem($id);
}
if (isset($_GET['action']) && $_GET['action'] === 'deletepay') {

    $deletepay = $carts->deletePay($username);
}




$infor=$carts->inforByUserName($username);
$updatetotalpaycart = $carts->totalPayCart($username);
$updatetotalprice = $carts->totalprice($username);
$updatetotalcart= $carts-> totalCart($username);
$paycart = $carts->getAllPay($username);
$totalcart = $carts->totalShow($username);
$cart = $carts->getAllCart($username);
$deletecart = $carts->getAllDeleteCart($username);
$totalpay = $carts->totalShowPay($username);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Title</title>
</head>
<body>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Dothietyeu.css">
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
<table class="table">
    <h1>
        Cart</h1>
    <thead>
    <tr>
        <th>Product image</th>
        <th>Product Name</th>
        <th>List Price($)</th>
        <th>Quantity</th>
        <th>Total Price($)</th>
        <th>Delete</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($cart as $cart):
        ?>
        <tr>
            <td><img src="<?php echo $cart["image"]; ?>"style="width:70px" class="card-img-top" alt="...">
            </td>
            <td><?php echo $cart['name'] ?></td>
            <td><?php echo $cart['list_price'] ?></td>
            <td><?php echo $cart['SUM(c.quantity)'] ?></td>
            <td><?php echo $cart['SUM(c.total_price)'] ?></td>
                <td><a href="cart.php?action=delete&id=<?php echo $cart['product_id']; ?>"
                   class="btn btn-warning btn-sm" onclick="return confirm('Remove this item from cart?')" >Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div>

    <h2>Total order value : <?php echo "$".$totalcart ?></h2>


    <?php
        echo "<a class='btn btn-primary' href='delivery_address.php?action=pay&money=$totalcart&username=$username' >Ckeck out</a>";
     ?>

</div>

<hr>
<table class="table" style="display: none">
    <h1 style="display: none">
        Deleted items</h1>
    <thead>
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>List Price($)</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Return</th>
        <th>Delete</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($deletecart as $cart1):
        ?>
        <tr>
        <tr>
        <td><img src="<?php echo $cart1["image"]; ?>"style="width: 70px" class="card-img-top" alt="...">
        </td>
        <td><?php echo $cart1['name'] ?></td>
        <td><?php echo $cart1['list_price'] ?></td>
        <td><?php echo $cart1['SUM(c.quantity)'] ?></td>
        <td><?php echo $cart1['total_price'] ?></td>

            <td><a href="cart.php?action=return&id=<?php echo $cart1['product_id']; ?>"
                   class="btn btn-success btn-sm" onclick="return confirm('put this item back in the cart?')" >
                    return to cart</a>
            </td>
            <td><a href="cart.php?action=delete1&id=<?php echo $cart1['product_id']; ?>"
                   class="btn btn-danger btn-sm" onclick="return confirm('put this item back in the cart?')" >
                    Permanently Deleted</a>
            </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<hr>
<table class="table">
    <h1>
        Purchased item</h1>
    <thead>
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>List Price($)</th>
        <th>Quantity</th>
        <th>Total Price($)</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($paycart as $paycart):
        ?>
        <tr>
            <td><img src="<?php echo $paycart["image"]; ?>"style="width: 70px" class="card-img-top" alt="...">
            </td>
            <td><?php echo $paycart['name'] ?></td>
            <td><?php echo $paycart['list_price'] ?></td>
            <td><?php echo $paycart['SUM(c.quantity)'] ?></td>
            <td><?php echo $paycart['SUM(c.total_price)'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<h2>
    Total value of purchased items($): <?php echo $totalpay ?></h2>
    <td><a href="cart.php?action=deletepay"
           class="btn btn-warning btn-sm" onclick="return confirm('Remove this oder?')" >Delete order</a></td>

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
