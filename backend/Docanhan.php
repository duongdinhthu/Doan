<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
include "project.php";
$project = new projectFptHappy();
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username=$_SESSION["username"];
    $sl = $_POST['sl'];
    $id = $_POST['id'];
    $gia = $_POST['gia'];
    $sql="select * from cart where username='$username' and product_id='$id' and hidden = 1";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        ?>
        <script>
            swal({
                title: "Failed",
                text: "This item is already in the cart",
                icon: "error",
            });
        </script>
        <?php
    }else{
        $sql1 = "insert into cart(username,product_id,quantity,list_price)values('$username','$id','$sl','$gia')";
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

$product = $project->getAllProduct2();

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
<div class="text">
    <div>
        <a href="home.php">Home  > </a>
        <p>Essential items</p>
    </div>
    <h2>ESSENTIAL ITEMS</h2>
    <hr/>
</div>
<table >
    <tbody>
    <div class="product-boxes">
        <?php foreach ($product as $product): ?>
            <div class="product-item">
                <div>
                    <form action="" method="post" >
                        <a href="Docanhandetail.php?gia=<?php echo $product["price"]; ?>&id=<?php echo $product["pid"]; ?>">
                            <img src="<?php echo $product["image"]; ?>" class="card-img-top" alt="...">
                        </a>
                        <a href="Docanhandetail.php?gia=<?php echo $product["price"]; ?>&id=<?php echo $product["pid"]; ?>" class="name"><?php echo $product["name"]; ?></a>
                        <h5 class="cost">
                            <input value="<?php echo $product["price"]; ?>" style="display: none" id="gia" name="gia">
                            <?php echo "$" . $product["price"]; ?><small><del>$6</del></small>
                            <label for="sl" style="font-weight: initial; font-size: 16px; margin-left: 50px">Quantity:</label>
                            <input value="1" style="width: 50px;outline: none; border: none; box-shadow: 1px 1px 2px #cccccc; border-radius: 8px" id="sl" name="sl">
                            <label for="gia" style="display: none">Giá</label>
                            <label for="id" style="display: none">ID</label>
                            <input value="<?php echo $product["pid"]; ?>" style="display: none" id="id" name="id">
                            <button type="submit" class="buy-button">Buy</button>
                        </h5>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    </tbody>
</table>
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

