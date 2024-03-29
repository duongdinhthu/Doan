<?php
session_start();
ini_set('display_errors', 'off');
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
//kiểm tra session
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {


}
if (!isset($_SESSION["username"])&&!isset($_SESSION["password"])){
    header("Location:http://localhost:63342/Doan/backend/login.php");
    exit;
}
$username = $_SESSION["username"];
include "project.php";
$carts = new projectFptHappy();
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
if (!isset($_SESSION['executed'])) {
    if (isset($_GET['id'])  && isset($_GET['gia'])){
        $username=$_SESSION["username"];
        $sl = $_GET['sl'];
        $id = $_GET['id'];
        $price = $_GET['gia'];
        $sql="select * from cart where username='$username' and product_id='$id' and hidden = 1";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows>0){
            $sql2="UPDATE cart SET quantity = quantity + '$sl' WHERE product_id = '$id' and username = '$username';";
            $result1 = mysqli_query($conn,$sql2);

            ?>
            <script>
                swal({
                    title: "Success",
                    text: "The item was successfully added to the cart",
                    icon: "success",
                });
            </script>
            <?php
        }else{
            $sql1 = "insert into cart(username,product_id,quantity,list_price)values('$username','$id','$sl','$price')";
            $result1 = mysqli_query($conn,$sql1);
            ?>
            <script>
                swal({
                    title: "Success",
                    text: "The item was successfully added to the cart",
                    icon: "success",
                });
            </script>
            <?php
        }
    }
    $_SESSION['executed'] = true;
}

if (isset($_GET['action']) && $_GET['action'] === 'deletepay') {

    $deletepay = $carts->deletePay($username);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username=$_SESSION["username"];
    $quantity=$_POST['quantity'];
    $product_id=$_POST['productid'];
    $updatequantity=$carts->updateQuantity($quantity,$username,$product_id);

}

$updatetotalpaycart = $carts->totalPayCart($username);
$updatetotalprice = $carts->totalprice($username);
$updatetotalcart= $carts-> totalCart($username);

$infor=$carts->inforByUserName($username);
$totalcart = $carts->totalShow($username);
$deletecart = $carts->getAllDeleteCart($username);
$totalpay = $carts->totalShowPay($username);
$cart = $carts->getAllCart($username);
$totalcart = $carts->totalShow($username);

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
    <link rel="stylesheet" href="Dothietyeu.css">
    <script src="search.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
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
<div class="text">
    <div>
        <a href="home.php">Home  > </a>
        <p>Shopping cart</p>
    </div>
    <h2>SHOPPING CART</h2>
    <hr/>
</div>
<h1 style="text-align: center; color: #f29f33; margin-bottom: 20px;">
    Cart</h1>
<div style="display:flex; align-items: center; justify-content: center">
    <div style="padding: 20px; background-color: white; border-radius: 20px; box-shadow: 2px 2px 5px #cccccc">
        <table class="table">
            <thead>
            <tr>
                <th style="color: #f29f33">Product image</th>
                <th style="color: #f29f33">Product Name</th>
                <th style="color: #f29f33">List Price($)</th>
                <th style="color: #f29f33">Quantity</th>
                <th style="color: #f29f33">Total Price($)</th>
                <th hidden="hidden">pid</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cart as $cart):
                ?>
                <form method="post" action="">
                    <tr>
                        <td><img src="<?php echo $cart["image"]; ?>"style="width:70px" class="card-img-top" alt="...">
                        </td>
                        <td><?php echo $cart['name'] ?></td>
                        <td><?php echo $cart['list_price'] ?></td>
                        <td><input id="quantity" name="quantity" value="<?php echo $cart['SUM(c.quantity)'] ?>"></td>
                        <td><?php echo $cart['SUM(c.total_price)'] ?></td>
                        <td><input id="productid" name="productid" value="<?php echo $cart['pid'] ?>" hidden="hidden"></td>
                        <td><button class="btn btn-success" type="submit">Update Quantity</button></td>
                        <td><a  class='btn btn-danger' href='cart.php?action=delete&id=<?php echo $cart['pid'] ?>'  onclick="if (!confirm('Are you sure you want to delete this product?')) return false;" >Delete item</a></td>
                    </tr>
                </form>
            <?php endforeach; ?>
            </tbody>
        </table>
        <hr>
        <div style="display: flex">
            <p style="margin-left: 10px; color: #f29f33" id="check">Total all product</p>
            <h5 style="margin-left: 545px"><?php echo $totalcart ?></h5>
        </div>
        <hr>
        <div>
            <?php
            echo "<a style='margin-left: 1000px;' id='check'  class='btn-purchased' href='delivery_address.php?action=pay&username=$username' >Check out</a>";
            ?>
        </div>
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

<script src="trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
