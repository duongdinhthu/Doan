<?php
include "../backend/project.php";
$book = new projectFptHappy();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $name = $_POST['full_name'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $add=$book->addBook($name,$phone,$email,$address);
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
    <link rel="stylesheet" href="Thanhtoandichvutochuc.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Book a Tour</title>
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
                    <a href="Trochoitreem.html">Children</a>
                    <a href="Trochoigiadinh.html">Family</a>
                    <a href="Trochoinguoilon.html">Adults</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                    <a href="Docanhan.html">Personal Items</a>
                    <a href="Dothietyeu.html">Essentials</a>
                    <a href="Thucpham.html">Food</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="Dichvutrongoi.html">Packages</a>
                    <a href="Dichvutour.html">Tours</a>
                    <a href="Dichvutochuc.html">Organizations</a>
                </div>
            </div>
            <a href="tintuc.html" class="btn btn-outline">News</a>
            <a href="lienhe.html" class="btn btn-outline">Contact</a>
            <a href="../backend/login.php" class="btn btn-outline">Login</a>
        </div>
    </div>
    <img src="img/img_banner_brea_col.webp" alt="" style="width: 100%; background-color: #FEF7EF">
</header>

<div class="container">
    <div class="left-column">
        <h2>BOOKING INFORMATION</h2>

        <form action="" method="post">
            <label for="full_name">Full Name<br></label><br>
            <input type="text" id="full_name" name="full_name" required><br>
            <label for="phone_number">Phone Number<br></label><br>
            <input type="tel" id="phone_number" name="phone_number" required><br>
            <label for="email">Email<br></label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="address">Address<br></label><br>
            <input type="text" id="address" name="address" required><br>
            <input type="submit" value="Book Tour">
        </form>
    </div>

    <div class="right-column">
        <h2>PRODUCT / SERVICE INFORMATION</h2>
        <p>Adventure Camping in Ha Long: Kayak Tour in Ha Long-Discovering Thien Cung Cave</p>
        <p>Departure Date: 03/07/2024</p>
        <p>Available Seats: 15</p>
        <img src="https://phongnhatrips.com/wp-content/uploads/2022/06/2-5.jpeg" style="width:500px;height:300px;">
        <table>
            <tr>
                <th>Type</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Adults</td>
                <td>3</td>
                <td>1,500,000</td>
                <td>1,500,000</td>
            </tr>
            <tr>
                <td>Children (6-11 years old)</td>
                <td>3</td>
                <td>900,000</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Children (2-5 years old)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Children (&lt;2 years old)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </table>
        <p class="total"><strong>TOTAL: 2,400,000 VND</strong></p>
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
            <p>SUBSCRIBE</p>
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
                    <a href="#">Phone Number</a><br>
                    <a href="#">Links</a><br>
                </div>
                <div class="Support">
                    <h3>CUSTOMER SUPPORT</h3><br>
                    <a href="#">Contact</a><br>
                    <a href="#">Handling Complaints</a><br>
                    <a href="#">User Guide</a><br>
                    <a href="#">Warranty, Returns</a><br>
                    <a href="#">Contact</a><br>
                </div>
                <div class="Support">
                    <h3>SERVICES</h3><br>
                    <a href="#">Products</a><br>
                    <a href="#">Game Organization Services</a><br>
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
    <p class="license">@ Copyright by ... | Provided by ...</p>
</div>
<script src="../../DoanKI1%20(1)/frontend/trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</body>
</html>
