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
                <p>Hotline<br>8910JQKA</p>
            </div>
        </div>
        <div class="d-flex">
            <a href="home.php" class="btn btn-outline">Trang chủ</a>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Trò chơi</a>
                        <ul class="ul">
                            <li><a href="Trochoitreem.php"> Trẻ em</a></li>
                            <li><a href="Trochoigiadinh.php">Gia đình</a></li>
                            <li><a href="Trochoinguoilon.php">Người lớn</a></li>
                        </ul>
                    </li>
                    <li><a href="home.php">Sản phẩm</a>
                        <ul class="ul">
                            <li><a href="Docanhan.php">Đồ cá nhân</a></li>
                            <li><a href="Dothietyeu.php">Đồ thiết yếu</a></li>
                            <li><a href="Thucpham.php">Thực phẩm</a></li>
                        </ul>
                    </li>
                    <li><a href="home.php">Dịch vụ</a>
                        <ul class="ul">
                            <li><a href="Dichvutrongoi.html">Trọn gói</a></li>
                            <li><a href="Dichvutour.html"> Tour</a></li>
                            <li><a href="Dichvutochuc.html">Tổ chức</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="tintuc.php" class="btn btn-outline">Tin tức</a>
            <a href="lienhe.php" class="btn btn-outline">Liên hệ</a>
            <a href="user.php" class="btn btn-outline">Tài khoản </a>

        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width:100%;">
</header>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://gudgear.com/wp-content/uploads/2018/02/camping-activities-for-adults.jpg" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block">
                <h5>Fpt Happy</h5>
                <p>Trải nghiệm ngày dã ngoại sôi động với trò chơi dành cho người lớn, kết hợp giải đố, hoạt động nhóm, và niềm vui ngoại ô.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQatPZOv88kmUUS0RRxrBXHZoF5Eb3oY5zANWV61epHxz8BSG6AJQ_tsyaqHh78nZEw36U&usqp=CAU" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block">
                <h5>Fpt Happy</h5>
                <p>Khám phá địa điểm mới và tận hưởng không khí tự nhiên với trò chơi dã ngoại cho người lớn, mang lại trải nghiệm thư giãn và kích thích.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://www.theordinaryadventurer.com/wp-content/uploads/2019/10/IMG_2531-1024x768.jpg" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block">
                <h5>Fpt Happy</h5>
                <p>Xây dựng kỷ niệm độc đáo với bạn bè qua các hoạt động như cắm trại, thả thuyền, và thưởng thức đồ ăn nướng trong không khí ấm áp của trò chơi dã ngoại.</p>
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
        <img src="https://vteambuilding.com/wp-content/uploads/2018/01/8.-Ban-nh%E1%BA%A1c-h%C3%B2a-t%E1%BA%A5u-1024x683.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi ban nhạc hòa tấu</h5>
            <p class="card-text">
                Trò chơi ban nhạc hòa tấu là một trải nghiệm sáng tạo, nơi các người chơi hợp tác để tạo ra bản nhạc tuyệt vời.</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20ban%20nhac%20hoa%20tau.docx" download="file.dox" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card2" style="width: 18rem;">
        <img src="https://bizweb.dktcdn.net/100/463/236/products/tro-choi-team-building-doan-ket-da-sua.png?v=1667918711933" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi bánh xe đồng đội</h5>
            <p class="card-text">
                Trò chơi bánh xe đồng đội là thách thức tập trung vào sự hợp tác, nơi các người chơi cùng nhau điều khiển một chiếc bánh xe để vượt qua các thử thách .</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20banh%20xe%20dong%20doi.docx"  download="file.dox" class="btn btn-primary">Hướng Dẫn</a>

        </div>
    </div>
    <div class="card3" style="width: 18rem;">
        <img src="https://cdn.tgdd.vn//GameApp/1388369//bit-mat-bat-de-cach-2-800x450.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi bịt mắt bắt dê</h5>
            <p class="card-text">Trò bịt mắt bắt dê là một trò chơi nhóm giải đố, nơi người chơi bịt mắt và phải tìm cách bắt được đồng đội đóng vai là 'dê' chỉ dựa vào âm thanh và giao tiếp.</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20bit%20mat%20bat%20de.docx"  download="file.dox" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card4" style="width: 18rem;">
        <img src="https://wetrek.vn/pic/service/https-wetrek-vn-pic-Service-duyanh-wetrek-vn-gmail-com-_637264347425626841.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Trò chơi trèo thuyền kayak</h5>
            <p class="card-text">
                Chèo thuyền kayak là hoạt động thể thao ngoại ô, đòi hỏi sự kỹ năng và cân nhắc khi người chơi sử dụng chiếc thuyền.</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20cheo%20thuyen%20yakak.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card5" style="width: 18rem;">
        <img src="https://luxevent.vn/wp-content/uploads/2020/03/cac-tro-choi-team-building-ngoai-troi-chuyen-bot.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi chuyền bột </h5>
            <p class="card-text">
                Trò chơi chuyền bột qua đầu trong đó người chơi phải chuyển một viên bột từ đỉnh đầu người này sang đỉnh đầu người khác .</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20chuyen%20bot%20qua%20dau.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng dẫn</a>
        </div>
    </div>
    <div class="card6" style="width: 18rem;">
        <img src="https://dulichteambuilding.net/wp-content/uploads/2022/06/tro-choi-dua-ret.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi con rết</h5>
            <p class="card-text"> Trò chơi con rết dã ngoại là hoạt động thú vị, khi người chơi phải theo dõi và mô phỏng các bước chân của 'con rết' để vượt qua thử thách.</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20con%20ret.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card7" style="width: 18rem;">
        <img src="https://jtravel.com.vn/wp-content/uploads/2021/08/team-building-cuop-co.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi cướp cờ</h5>
            <p class="card-text">Trò chơi dã ngoại cướp cờ là cuộc đối đầu hấp dẫn, khi các đội cố gắng cướp cờ của đối phương và chiến thắng .</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20cuop%20co.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card8" style="width: 18rem;">
        <img src="https://bocapvang.net/wp-content/uploads/2022/07/Tro-choi-cam-trai-1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi đố chữ</h5>
            <p class="card-text">Trò chơi đố chữ là thách thức tư duy và kiến thức ngôn ngữ, khi người chơi phải tìm ra từ hoặc cụm từ ẩn trong các ô .</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20do%20chu.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card9" style="width: 18rem;">
        <img src="https://sukienvietsky.com/upload/images/tr%C3%B2%20ch%C6%A1i%20teambuilding%20(3).jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi đoán đồ vật </h5>
            <p class="card-text">Trò chơi đoán đồ vật là thử thách tinh thần và sự nhạy bén, khi người chơi cố gắng đoán đúng vật phẩm được miêu tả.</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20doan%20do%20vat.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card10" style="width: 18rem;">
        <img src="https://lh3.googleusercontent.com/proxy/7AW95UjwTK8eCvt7ynA4jOoi0Fv4hU7fUKy6_NOTumappoohYuSHtWoP_AdH8WwZIg9wJ58THcNZPMvlck-6XF2fwdi9X5aQFCDzHhDpXrK8zzM" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi đốt đuốc lửa trại</h5>
            <p class="card-text">
                Trò chơi đốt đuốc lửa trại là hoạt động giao lưu và kỹ năng sinh tồn, khi người chơi hợp tác để thắp lửa trại trong điều kiện tự nhiên hoang dã</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20dot%20duoc%20lua%20trai.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card11" style="width: 18rem;">
        <img src="https://t3.ftcdn.net/jpg/02/18/18/32/360_F_218183290_2QpdkHXuEKrOOA3TRFA1ZndqOJuAHTMA.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi kéo co</h5>
            <p class="card-text">Trò chơi kéo co là một cuộc đấu mạnh mẽ giữa hai đội, nơi mỗi đội cố gắng kéo sức mạnh của đối phương về phía họ để giành chiến thắng.</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20keo%20co.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng Dẫn</a>
        </div>
    </div>
    <div class="card12" style="width: 18rem;">
        <img src="https://img.freepik.com/premium-photo/friends-build-tower-from-wooden-blocks-table-teamwork-concept-board-game-jenga-selective-focus_173815-22833.jpg" class="card-img-top " alt="...">
        <div class="card-body">
            <h5 class="card-title">Trò chơi rút gỗ </h5>
            <p class="card-text">Trò chơi rút gỗ là thử thách tăng cường sự cân nhắc và ổn định, khi người chơi lấy ra các khối gỗ từ một cấu trúc đang xây để không làm sập nó.</p>
            <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20rut%20go.docx"  download="file.dox" class="btn btn-primary" class="btn btn-primary">Hướng Dẫn</a>
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
            <p>ĐĂNG KÝ NHẬN TIN</p>
            <label>
                <input type="email" placeholder="Nhập địa chỉ email">
                <button>GỬI</button>
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
                    <h3>VỀ CHÚNG TÔI</h3><br>
                    <a href="#">Công ty</a><br>
                    <a href="#">Địa chỉ</a><br>
                    <a href="#">Số điện thoại</a><br>
                    <a href="#">Liên kết</a><br>
                </div>
                <div class="Support">
                    <h3>HỖ TRỢ KHÁCH HÀNG</h3><br>
                    <a href="#">Liên hệ</a><br>
                    <a href="#">Xử lý khiếu nại</a><br>
                    <a href="#">Hướng dẫn sử dụng</a><br>
                    <a href="#">Bảo hành, đổi trả</a><br>
                    <a href="#">Liên hệ</a><br>
                </div>
                <div class="Support">
                    <h3>DỊCH VỤ</h3><br>
                    <a href="#">Sản phẩm</a><br>
                    <a href="#">Dịch vụ tổ chức trò chơi</a><br>
                    <a href="#">Thanh toán</a><br>
                </div>
            </div>
            <div class="pay">
                <h3>HÌNH THỨC THANH TOÁN</h3>
                <button></button>
                <button></button>
                <button></button>
                <button></button>
            </div>
        </div>
    </div>
    <hr/>
    <p class="license">@ Bản quyền thuộc về ... | Cung cấp bởi ...</p>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
