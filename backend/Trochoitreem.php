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
    <title>Title</title>
</head>
<body>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Trochoitreem.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <link rel="stylesheet" href="trangchu.css">
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
                <img src="https://www.saisivahospital.com/wp-content/uploads/2020/01/children-development.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Khám Phá Tạo Hình Cho Tuổi Thơ - Trò Chơi Dã Ngoại Cho Bé Yêu.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=https://www.counsellinginmelbourne.com.au/wp-content/uploads/2023/03/The-Importance-of-Play-for-Child-Development-small.jpg"" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Vui Chơi, Học Hỏi, Khám Phá - Trải Nghiệm Dã Ngoại Đầy Màu Sắc.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.parents.com/thmb/VK_eMsHSWaYAAAuaFnyO88r_mh0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-901208614-2000-9d4cdf4d1ad94fcb97ca78d67836a9d8.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fpt Happy</h5>
                    <p>Bé Yêu Hãy Rời Xa Máy Tính, Khám Phá Thiên Nhiên Cùng Trò Chơi Dã Ngoại.</p>
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
        <img src="https://cdn.chanhtuoi.com/uploads/2022/11/do-vui-cho-be-2-1667719108.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi câu đố</h5>
            <p class="card-text">
                Khám phá thế giới thông qua trò chơi câu đố! Trải nghiệm giáo dục sáng tạo và thú vị dành cho trẻ..........</p>
            <a href="https://docs.google.com/document/d/13hWikpcOE2PUWF-1Pv0leeBFxlhP9uqo/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card2" style="width: 18rem;">
        <img src="https://monkeymedia.vcdn.com.vn/upload/web/storage_web/21-03-2022_09:53:06_bo-do-choi-domino-go-thong-minh.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi domino</h5>
            <p class="card-text">
                Domino - Trò chơi kinh điển với những chiếc viên gạch, đưa bạn vào thế giới chiến lược và tài năng tuyệt vời.</p>
            <a href="https://docs.google.com/document/d/1OP6Pzfu6zhNJYQzNjP13URofOqqc2kQn/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>

        </div>
    </div>
    <div class="card3" style="width: 18rem;">
        <img src="https://salt.tikicdn.com/cache/w400/ts/product/8f/9b/38/c45b8a495d5a8227eaeb6d82d0210a11.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi blowing mini</h5>
            <p class="card-text">Blowing Mini - Trò chơi sáng tạo đòi hỏi người chơi thổi nhẹ vào mini để giữ nó nổi trên không.............</p>
            <a href="https://docs.google.com/document/d/1kmpRagK0o-av29N5KJma02oy9qfSkh2m/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card4" style="width: 18rem;">
        <img src="https://www.indy100.com/media-library/teachers-fed-up-with-11-year-old-kids-wearing-diapers-to-school-worrying-trend.jpg?id=34778564&width=1245&height=700&quality=85&coordinates=0%2C65%2C0%2C66" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi tung đồng xu</h5>
            <p class="card-text">
                Tung Đồng Xu-Trò chơi vui nhộn giúp trẻ rèn kỹ năng tập trung và xác định kết quả bằng cách tung xu.</p>
            <a href="https://docs.google.com/document/d/13hWikpcOE2PUWF-1Pv0leeBFxlhP9uqo/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card5" style="width:18rem;">
        <img src="https://trangtrisinhnhat.com/wp-content/uploads/2022/04/15-tro-choi-nhay-khinh-khi-cau-vui-nhon-danh.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi bong bóng</h5>
            <p class="card-text">
                Bong Bóng - Trò chơi vui nhộn và sôi động dành cho trẻ, nơi họ có thể khám phá thế giới của màu sắc và niềm vui.</p>
            <a href="https://docs.google.com/document/d/1YRfo3WMzib-foSMb2qjgk70oXrxdukB0/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card6" style="width: 18rem;">
        <img src="https://journeytothefloridviet.weebly.com/uploads/8/2/1/1/82112576/loco1_orig.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nhảy Lò Cò</h5>
            <p class="card-text"> Trò chơi sôi động và thú vị, nơi trẻ em có thể tận hưởng niềm vui của việc nhảy qua và vượt qua các "lò cò" nhỏ.</p>
            <a href="https://docs.google.com/document/d/1JQxKT7o89SRY6GnmYk8dfAqu_tzzCk5i/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card7" style="width: 18rem;">
        <img src="https://wis.edu.vn/wp-content/uploads/2022/11/1-11.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi vượt chướng ngại vật</h5>
            <p class="card-text">Vượt Chướng Ngại Vật - Trò chơi kích thích sự phát triển vận động và sự khéo léo của trẻ.</p>
            <a href="https://docs.google.com/document/d/18vpGa1pDX2BhM8ey8gPjnEwCHWHj_pXM/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card8" style="width: 18rem;">
        <img src="https://kidsonline.edu.vn/wp-content/uploads/2017/05/Nhung-tro-choi-dong-vai-theo-chi-de-giup-tre-ky-nang-lam-viec-nhom-cho-tre-02.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi đóng vai</h5>
            <p class="card-text">Đóng Vai - Khám phá thế giới qua trò chơi đóng vai, nơi trẻ em có cơ hội sáng tạo và phát triển kỹ năng xã hội.</p>
            <a href="https://docs.google.com/document/d/1AmW2gJ-Aoqnk4FZqi_hfh9KKlKJn-Njx/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card9" style="width: 18rem;">
        <img src="https://heraldindependent.com/wp-content/uploads/2022/11/khu-vui-choi-tre-em-sai-gon-8-1400x788.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi bé là ninja</h5>
            <p class="card-text">Bé Là Ninja - Trò chơi mạo hiểm đầy phấn khích, nơi trẻ em có thể trải nghiệm cuộc phiêu lưu ninja với nhiệm vụ vui nhộn và kỹ năng tinh tế.</p>
            <a href="https://docs.google.com/document/d/1ANcZ_O5OmFgWLkOiZLXb7iisLK-Ty5KZ/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card10" style="width: 18rem;">
        <img src="https://www.cleanipedia.com/images/5iwkm8ckyw6v/5RHBi0UiJNDQ95B1sXp1ao/f767c121fee347d130c344dde308f931/Ymlnc3RvY2stZ2lybHMtaW4tcGlsbG93LWZvcnQtMTk3ODc4NjMwLmpwZw/900w/tr%C3%B2-ch%C6%A1i-trong-nh%C3%A0-cho-b%C3%A9.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi xây dựng pháo đài</h5>
            <p class="card-text">
                Xây Dựng Pháo Đài - Trò chơi sáng tạo, nơi trẻ em có thể khám phá và phát triển tài năng xây dựng.</p>
            <a href="https://docs.google.com/document/d/1EEZow_tW95mgz9bC2OeUoMzOTUMQhKH7/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card11" style="width: 18rem;">
        <img src="http://mnbavi.edu.vn/upload/21699/20230922/1_5e065.jpg"class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi ghế âm nhạc</h5>
            <p class="card-text">Trò chơi Âm Nhạc - Kích thích sự sáng tạo âm nhạc và giáo dục âm nhạc cho trẻ em.</p>
            <a href="https://docs.google.com/document/d/1MMVN002egmSSpVlUYe1InXsl1Q0OeVJU/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card12" style="width: 18rem;">
        <img src="https://camnanggiaoduc.org/wp-content/uploads/2017/02/ren-ky-nang-song-cho-tre-mam-non-1.jpg" class="card-img-top"alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi lắng nghe</h5>
            <p class="card-text">Trò chơi Lắng Nghe - Thách thức khả năng tập trung và nhận biết âm thanh.</p>
            <a href="https://docs.google.com/document/d/1Xyf69dzfH9nxXiQMrSYXKlVNa_dV95qG/edit?usp=sharing&ouid=110749224885515623712&rtpof=true&sd=true" class="btn btn-primary">Hướng Dẫn</a>
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
