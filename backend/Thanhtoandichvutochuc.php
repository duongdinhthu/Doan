<?php
?>

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
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Thanhtoandichvutochuc.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Đặt tour du lịch</title>
    <link rel="stylesheet" href="Trochoitreem.css">
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
<body>

<div class="container">
    <div class="left-column">
        <h2>THÔNG TIN NGƯỜI ĐẶT</h2>

        <form action="/submit_booking_info" method="post">
            <label for="full_name">Họ và tên<br></label><br>
            <input type="text" id="full_name" name="full_name" required><br>
            <label for="phone_number">Số điện thoại<br></label><br>
            <input type="tel" id="phone_number" name="phone_number" required><br>
            <label for="email">Email<br></label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="address">Địa chỉ<br></label><br>
            <input type="text" id="address" name="address" required><br>
            <label for="discount_code">Nhập mã giảm giá:</label><br>
            <input type="text" id="discount_code" name="discount_code"><br>
            <p>Vui lòng chọn phương thức thanh toán</p>
            <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer">
            <label for="bank_transfer">Chuyển khoản ngân hàng</label><br>
            <input type="radio" id="office_payment" name="payment_method" value="office_payment">
            <label for="office_payment">Thanh toán tại văn phòng</label><br>
            <input type="radio" id="online_payment" name="payment_method" value="online_payment">
            <label for="online_payment">Thanh toán online</label><br>
            <input type="submit" value="Đặt tour">
        </form>
    </div>

    <div class="right-column">
        <h2>THÔNG TIN VỀ SẢN PHẨM / DỊCH VỤ</h2>
        <p>Camping mạo hiểm tại Hạ Long: Chèo Thuyền Kayak tại Hạ Long-Khám phá động thiên cung</p>
        <p>Ngày khởi hành: 07/03/2024</p>
        <p>Số chỗ còn nhận: 15</p>
        <img src="https://phongnhatrips.com/wp-content/uploads/2022/06/2-5.jpeg" style="width:500px;height:300px;">
        <table>
            <tr>
                <th>Loại</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>
            </tr>
            <tr>
                <td>Người lớn</td>
                <td>3</td>
                <td>1,500,000</td>
                <td>1,500,000</td>
            </tr>
            <tr>
                <td>Trẻ em(6->11 tuổi)</td>
                <td>3</td>
                <td>900,000</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Trẻ em(2->5 tuổi)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Trẻ em(&lt;2 tuổi)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </table>
        <p class="total"><strong>TỔNG CỘNG: 2,400,000 vnđ</strong></p>
    </div>
</div>
<div class="footer">
    <div class="footer0">
        <div class="footer1">
            <img src="frontend/img/logo.webp" alt="">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</body>
</html>
