<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
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
    <link rel="stylesheet" href="Trochoigiadinh.css">
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
<div class="img_header">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://leutrai.vn/wp-content/uploads/2023/07/tro-choi-cho-tre-di-da-ngoai-2.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Niềm vui gia đình bắt đầu từ những trò chơi chân thực.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://leutrai.vn/wp-content/uploads/2023/07/tro-choi-cho-tre-di-da-ngoai-3.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Trò chơi gia đình: nơi mọi khoảnh khắc trở nên đặc biệt.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://ecopark.com.vn/images/news/2020/10/original/trai-nghiem-cam-trai-qua-dem-nhu-troi-tay-giua-khong-gian-xanh-kdt-ecopark_1603337843.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Hòa mình vào trò chơi, kết nối trái tim gia đình.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<div id="allcard">
    <div class="card1" style="width: 18rem;">
        <img src="https://hallmark.brightspotcdn.com/4b/be/d1aa420336cb9e18012b5ad5bf31/vs-18073.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi đố chữ</h5>
            <p class="card-text">
                Khám phá thế giới thông qua trò chơi câu đố! Trải nghiệm  sáng tạo và thú vị,mới mẻ dành cho gia đình.</p>
            <a href="https://docs.google.com/document/d/16yPAcvo1MnixsDJbKfwU2Krd7zikjORw/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card2" style="width: 18rem;">
        <img src="https://bloximages.chicago2.vip.townnews.com/meridianstar.com/content/tncms/assets/v3/editorial/e/65/e650054c-4e59-11e7-ae4f-f37feb92da32/593cbf7b4a932.image.jpg?resize=750%2C500" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi bắn cung</h5>
            <p class="card-text">
                Tận hưởng niềm vui gia đình với trò chơi bắn cung - nơi kỹ năng và niềm vui hòa quyện, mời gọi mọi thành viên tham gia.</p>
            <a href="https://docs.google.com/document/d/1OP6Pzfu6zhNJYQzNjP13URofOqqc2kQn/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>

        </div>
    </div>
    <div class="card3" style="width: 18rem;">
        <img src="https://i.guim.co.uk/img/media/b5d22535a5a254f97b3251bd6a226c4eac12fbf8/571_585_2691_2736/master/2691.jpg?width=620&quality=85&auto=format&fit=max&s=240ea90f5bd2a7a2adcc7e95953491fe" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi ghép hình </h5>
            <p class="card-text">Thách thức tư duy và sáng tạo với trò chơi ghép hình khổng lồ, nơi mỗi mảnh ghép là chìa khóa của một thế giới tưởng tượng.</p>
            <a href="https://docs.google.com/document/d/15zPIxFKXbnOVxd1PW05VPas7pw_v9eRd/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card4" style="width: 18rem;">
        <img src="https://jtravel.com.vn/wp-content/uploads/2021/08/team-building-cuop-co.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi cướp cờ</h5>
            <p class="card-text">
                Trải nghiệm hồi hộp và chiến lược với trò chơi cướp cờ, đưa ra những bước đi thông minh để chiếm lấy chiến trường.</p>
            <a href="https://docs.google.com/document/d/112pgCSB8kPyFcwIO2R9jgBibhmP8nv2B/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card5" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/1159294610/vi/anh/tr%C3%B2-ch%C6%A1i-b%C3%B3ng-%C4%91%C3%A1-gia-%C4%91%C3%ACnh.jpg?s=170667a&w=0&k=20&c=2RNFQdSFyeHGb-kqRAiYk87-Q016ehZQZUbdmJ9F-oI=" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi bóng đá gia đình</h5>
            <p class="card-text">Chuẩn bị cho niềm vui bóng đá gia đình với trò chơi sôi động, mang đến những khoảnh khắc đầy năng động cho mọi thành viên.</p>
            <a href="https://docs.google.com/document/d/1P0w-_Pw5vrTAnh9qDeVzDnNMfPvyQKed/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card6" style="width: 18rem;">
        <img src="https://i.pinimg.com/564x/55/d3/78/55d378e745c1e9c0e9058dc7a0fc35f9.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi xây cầu bằng giấy</h5>
            <p class="card-text"> Thách thức tư duy và sáng tạo với trò chơi xây cầu bằng giấy - nơi bạn là kiến trúc sư tự do, tạo ra những công trình ấn tượng từ những tờ giấy đơn giản.</p>
            <a href="https://docs.google.com/document/d/1doZlQzUo6Lpk6PGU4pe6DkyJ0x1rglbF/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card7" style="width: 18rem;">
        <img src="https://cdn.alongwalk.info/wp-content/uploads/2022/07/01202600/image-nhung-tro-choi-gia-dinh-khi-di-camping-165665675991108.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi cờ caro</h5>
            <p class="card-text">Trải nghiệm chiến thuật và sự hấp dẫn với trò chơi cờ ca rô, nơi mỗi nước đi mở ra những chiến lược và thử thách đầy mới lạ.</p>
            <a href="https://docs.google.com/document/d/1phbia7E5vShCqpO9AGQhLtwdRtnpxFnx/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card8" style="width: 18rem;">
        <img src="https://cdn.alongwalk.info/wp-content/uploads/2022/07/01202603/image-nhung-tro-choi-gia-dinh-khi-di-camping-165665676246920.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi xếp cốc</h5>
            <p class="card-text">Thách thức sự khéo léo và sắp xếp với trò chơi xếp cốc, nơi bạn phải chọn đúng chiến lược để cốc đủ chỗ và tạo thành những mô hình độc đáo.</p>
            <a href="https://docs.google.com/document/d/1bcvUed47scRbX_9PyvQG0TZFMoRkye_M/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card9" style="width: 18rem;">
        <img src="https://playtivities.com/wp-content/uploads/2021/05/water-games-feature.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi bóng bay nước</h5>
            <p class="card-text">Trò chơi bóng bay nước: hứng khởi, năng động, và đầy thách thức, tạo nên những trận đấu nước sôi động giữa bạn và gia đình.</p>
            <a href="https://docs.google.com/document/d/1u8ye7854zVsv4HXOPhpZzqznFzrdrqKB/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card10" style="width: 18rem;">
        <img src="https://i.pinimg.com/564x/f8/5b/cf/f85bcf5b97f0bbfe7a4fc5f4f3d0eb1a.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi phi tiêu bóng</h5>
            <p class="card-text">
                Trò chơi phi tiêu bóng, nơi gia đình chứng minh đòi hỏi của mình thông qua những đường bóng chính xác và độ chính xác xuất sắc.</p>
            <a href="https://docs.google.com/document/d/1nDxT8-xZDy9xwjdOFaC0F-eCDrgVc4mQ/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card11" style="width: 18rem;">
        <img src="https://cdn.tgdd.vn//GameApp/1388369//bit-mat-bat-de-cach-2-800x450.png "class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi bịt mắt bắt dê</h5>
            <p class="card-text">Thách thức sự tin tưởng khám phá khả năng đồng đội với trò chơi bịt mắt bắt dê, nơi sự hợp tác là chìa khóa của mỗi bước di chuyển.</p>
            <a href="https://docs.google.com/document/d/1sToOYGVywrqmVSJ_6bFzHHiJ0XfhED8m/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card12" style="width: 18rem;">
        <img src="https://azevent.vn/wp-content/uploads/2019/01/tro-choi-team-buiding-trong-nha-1.jpg" class="card-img-top"alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi xây tháp bằng que </h5>
            <p class="card-text">Kết hợp sự sáng tạo và kiên nhẫn với trò chơi xây tháp bằng que kem, nơi bạn có thể tạo ra những kiệt tác kiến trúc độc đáo .</p>
            <a href="https://docs.google.com/document/d/1j2MB1YuMXkcccPEZnkg-4b9oqikCdsvM/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
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
