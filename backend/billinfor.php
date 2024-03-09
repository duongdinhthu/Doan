<?php
session_start();
//kiểm tra session
ini_set('display_errors', 'off');
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){

    header("Location:http://localhost:63342/Doan/frontend/home.html");
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
$username=$_SESSION['username'];
$paycart = $project->getAllPay($username);
$email=$_POST['email'];
$name = $_POST['name'];
$phone=$_POST['phone'];
$address= $_POST['address'];
$cod = $_POST['payment'];
$totalcart=$_POST['totalcart'];
$code = $_POST['code'];
require '../vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP configuration for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'thuddth2307004@fpt.edu.vn'; // Thay 'your_email@gmail.com' bằng địa chỉ email Gmail của bạn
$mail->Password = 'azxn xlif gxof abkh'; // Thay 'your_password' bằng mật khẩu email Gmail của bạn
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set up the email details
$mail->setFrom('thuddth2307004@fpt.edu.vn', 'Dương Thứ - FPT aptech');
$mail->addAddress("$email", 'duongthutb941@gmail.com');
$mail->Subject = 'Confirm order payment';
$mail->Body = "Hello [$name],
Congratulations! Your purchase on [Team3_FPTaptech.edu.vn] was successfully processed. Your order is now being prepared. You will be receiving shipping updates soon.

How was it to shop at [Team3_FPTaptech.edu.vn]? Help us serve you better, click here to take a quick survey. (It won’t take you more than a minute – we promise!).

Here’s your order confirmation:

Order code: $code
Payment method: $cod
Total: $totalcart


Thank you for shopping with FptAptech,
Duong Thu";


// Send the email
$mail->send();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "update cart set hidden = 2, hidden_customer = 4,name='$name',phone='$phone',address='$address',payment='$cod',code='$code',email='$email' where username = '$username' and hidden = 1";
    $result = mysqli_query($conn,$sql);

?>
    <script>
        swal({
            title: "Success",
            text: "The order has been sent. Thank you for supporting the shop",
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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Title</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<style>
    .text{
        margin-top: 20px;
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

    .embrece {
        max-width: 800px;
        margin: 20px auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .customer {
        max-width: 800px;
        margin: 20px auto;
        background-color: white;
        padding: 20px;

    }

    .customer h5 {
        color: #f29f33;
    }

    .product, .code, .backhome {
        max-width: 800px;
        margin: 20px auto;
        background-color: white;
        padding: 20px;

    }

    .product h5, .code h5 {
        color: #f29f33;
    }

    .product img {
        width: 70px;
    }

    .code hr {
        border-top: 1px solid #f29f33;
    }

    .backhome {
        text-align: right;
    }

    .backhome a {
        background-color: #f29f33;
        color: white;
        padding: 8px 35px;
        text-decoration: none;
        transition: 0.3s ease-in-out;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .backhome a:hover {
        background-color: #654145;
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
        <a href="../frontend/home.html">Home  > </a>
        <p>Account</p>
    </div>
    <h2>BILL INFORMATION</h2>
    <hr/>
</div>
<div class="embrece" style="">
    <div class="customer">
    <h5 style="">Customer Detail: </h5>
    <p style="">
        - Name: <?php echo  $name; ?><br><br>
        - Phone Number: <?php echo  $phone; ?><br><br>
        - Email: <?php echo  $email; ?><br><br>
        - Address: <?php echo  $address; ?>
    </p>
    <hr style="">
    </div>
    <div class="product">
    <h5 style="">Product Detail:</h5>
    <table class="table">
        <thead>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>List Price($)</th>
            <th>Quantity</th>
            <th>Total Price($)</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($paycart as $paycart): ?>
            <tr>
                <td><img src="<?php echo $paycart["image"]; ?>" style="width: 70px" class="card-img-top" alt="..."></td>
                <td><?php echo $paycart['name'] ?></td>
                <td><?php echo $paycart['list_price'] ?></td>
                <td><?php echo $paycart['SUM(c.quantity)'] ?></td>
                <td><?php echo $paycart['SUM(c.total_price)'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="code">
    <hr style="">
    <h5 style="">Code Orders:</h5>
    <p style=""><?php echo  $code; ?></p>
    <hr style="">
    <h5 style="">Payment Detail:</h5>
    <p style=""><?php echo  $cod; ?></p>
    <hr style="">
    <h5 style="">Price:</h5>
    <p style="margin-left: 10px; color: #654145;"><?php echo  $totalcart; ?></p>
    </div>
</div>
</div>

<div class="backhome">
    <a href="home.php?">Back to Home</a>
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