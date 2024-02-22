<?php
session_start();

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
    <link rel="stylesheet" href="trangchu.css">
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
                            <li><a href="Dichvutrongoi.php">Trọn gói</a></li>
                            <li><a href="Dichvutour.php"> Tour</a></li>
                            <li><a href="Dichvutochuc.php">Tổ chức</a></li>
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
<div class="introduce">
    <h2>LÝ DO BẠN NÊN CHỌN CAMP LÀM NGƯỜI BẠN ĐỒNG HÀNH?</h2>
    <hr/>
    <p>CAMP rất hân hạnh đồng hành cùng bạn trong mọi chuyến đi, giúp bạn có những trải nghiệm tuyệt vời nhất.</p>
    <div class="content">
        <img src="img/banner_why_1.webp" alt="">
        <div class="inside_content">
            <div class="all-box">
                <button class="box">
                    <i class="fa-solid fa-list"></i>
                    <h4>ĐẢM BẢO SỐ LƯỢNG</h4>
                    <p>Đáp ứng nhu cầu camping, du lịch, dã ngoại lên đến 2000 người</p>
                </button>
                <button class="box">
                    <i class="fa-solid fa-medal"></i>
                    <h4>CAM KẾT CHẤT LƯỢNG</h4>
                    <p>Tất cả sản phẩm đều đáp ứng tiêu chuẩn về an toàn và chất lượng</p>
                </button>
            </div>
            <div class="all-box">
                <button class="box2">
                    <i class="fa-solid fa-gift"></i>
                    <h4>CHÍNH SÁCH ƯU ĐÃI</h4>
                    <p>Khách hàng thân thiết, các chương trình thiện nguyện, cộng động</p>
                </button>
                <button class="box2">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h4>CHÍNH SÁCH BẢO HÀNH</h4>
                    <p>Đáp ứng nhu cầu camping, du lịch, dã ngoại lên đến 2000 người</p>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="service">
    <div class="text-box">
        <h2>DỊCH VỤ</h2>
        <hr/>
        <p>CAMP mang đến những dịch vụ tiện lời và phù hợp nhất, giúp bạn thuận lời trong mỗi chuyến đi.</p>
        <button>Xem tất cả</button>
    </div>
    <div class="img-boxes">
        <button class="img-box">
            <div class="text">
                <img width="50" height="50" src="https://img.icons8.com/ios/50/654145/backpack.png" alt="backpack"/>                        <hr/>
                <p>Combo đồ<br>phượt</p>
            </div>
            <img src="img/banner-dich-vu-1.webp" alt="">
        </button>
        <button class="img-box">
            <div class="text">
                <img width="50" height="50" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/64/654145/external-tent-camping-xnimrodx-lineal-xnimrodx.png" alt="external-tent-camping-xnimrodx-lineal-xnimrodx"/>
                <hr/>
                <p>Thuê đồ du<br>lịch</p>
            </div>
            <img src="img/banner-dich-vu-2.webp" alt="">
        </button>
        <button class="img-box">
            <div class="text">
                <img width="50" height="50" src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/64/654145/external-van-travel-kmg-design-detailed-outline-kmg-design.png" alt="external-van-travel-kmg-design-detailed-outline-kmg-design"/>
                <hr/>
                <p>Đồ dã ngoại</p>
            </div>
            <img src="img/banner-dich-vu-3.webp" alt="">
        </button>
    </div>
</div>
<div class="outstanding-product">
    <h2>SẢN PHẨM NỔI BẬT</h2>
    <hr/>
    <div class="product-boxes">
        <div>
            <img src="img/sp9.webp" alt="">
            <a href="#">Lều cắm trại tự bung cho 4-5 người thoáng mát, có mái hiên chống nắ...</a>
            <h5 class="cost">
                1.200.000đ <small><del>1.500.000đ</del></small>
            </h5>
        </div>
        <div>
            <img src="img/sp8.webp" alt="">
            <a href="#">Lều 2-3 người cắm trại dã ngoại tiện lợi (2mx1.5mx1.1m) K102</a>
            <h5 class="cost">
                360.000đ <small><del>560.000đ</del></small>
            </h5>
        </div>
        <button>
            <h2>COMBO DÃ NGOẠI 4-8 NGƯỜI<br><p>Xem ngay <strong>-></strong></p></h2>
            <img src="img/img_banner_product_featured.webp" alt="" style="width: 710px">
        </button>
    </div>
    <div class="product-boxes">
        <div>
            <img src="img/sp7.webp" alt="">
            <a href="#">Lều cắm trại bật tự động cao cấp cho 1-3 người, kích thước 2 x 1.5 x...</a>
            <h5 class="cost">
                690.000đ <small><del>890.000đ</del></small>
            </h5>
        </div>
        <div>
            <img src="img/sp6.webp" alt="">
            <a href="#">Lều cắm trại bật tự động phong cách quân đội 1-3 người, kích...</a>
            <h5 class="cost">
                Liên hệ
            </h5>
        </div>
        <div>
            <img src="img/sp5.webp" alt="">
            <a href="#">Lều dã ngoại tự bung 2 mái hiên 4 cửa cho 3-4 người (KT 240 x 120 x...</a>
            <h5 class="cost">
                900.000đ <small><del>1.400.000đ</del></small>
            </h5>
        </div>
        <div>
            <img src="img/sp4.webp" alt="">
            <a href="#">Lều cắm trại tự bung 8-9 người chất lượng cao (KT 320x320x170cm)</a>
            <h5 class="cost">
                2.100.000đ <small><del>2.300.000đ</del></small>
            </h5>
        </div>
    </div>
</div>
<div class="exclusive-product">
    <h2>SẢN PHẨM TẠI CAMP</h2>
    <hr/>
    <div class="menu-product">
        <a href="#" class="a1">Lều và phụ kiện</a>
        <a href="#">Bàn ghế dã ngoại</a>
        <a href="#">Bếp và dụng cụ</a>
        <a href="#">Thảm, đệm, túi ngủ</a>
        <a href="#">Đèn lầu & đèn dã ngoại</a>
        <a href="#">Sản phẩm khác</a>
    </div>
    <div class="exclusive-boxes">
        <img src="img/img_banner_product_tab.webp" alt="">
        <div class="boxes">
            <div>
                <img src="img/sp16-4.webp" alt="">
                <a>Thảm dã ngoại, bạt trải picnic họa tiết caro chống thấm nước...</a>
                <h5 class="cost">169.000đ <small><del>369.000đ</del></small></h5>
            </div>
            <div>
                <img src="img/sp15.webp" alt="">
                <a>Võng đơn dã ngoại siêu nhẹ Naturehike NH17D012-C</a>
                <h5 class="cost">315.000đ <small><del>700.000đ</del></small></h5>
            </div>
            <div>
                <img src="img/sp11.webp" alt="">
                <a>Bếp nướng than hoa nướng ngoài trời BBQ chất liệu inox</a>
                <h5 class="cost">125.000đ</h5>
            </div>
            <div>
                <img src="img/sp14.webp" alt="">
                <a>Võng cắm trại du lịch cao cấp siêu bền đẹp K174</a>
                <h5 class="cost"> 130.000đ <small><del>310.000đ</del></small></h5>
            </div>
            <div>
                <img src="img/sp12.webp" alt="">
                <a>Bếp nướng than hoa ngoài trời chân cao size lớn (Bộ full) cao...</a>
                <h5 class="cost">600.000đ</h5>
            </div>
            <div>
                <img src="img/sp9%20(1).webp" alt="">
                <a>Lều cắm trại tự bung cho 4-5 người thoáng mát, có mái hiên...</a>
                <h5 class="cost">1.200.000đ <small><del>1.500.000đ</del></small></h5>
            </div>
        </div>
    </div>
</div>
<div class="combo">
    <h2>ĐỘC QUYỀN TẠI CAMP VỚI CÁC GÓI COMBO</h2>
    <hr/>
    <div class="img-combo">
        <img src="img/image_combo_1.webp" alt="">
        <img src="img/image_combo_2.webp" alt="">
    </div>
</div>


<div class="news">
    <h2>TIN TỨC</h2>
    <hr/>
    <div class="all-new">
        <div class="new">
            <img src="img/t4.webp" alt="">
            <h5>6 địa diểm du lịch gần Sài Gòn cho dịp nghỉ lễ 30/4 và mùng 1/5</h5>
            <p>Dung Nguyen | Ngày 25/10/2021</p>
            <h6>Dưới đây là những điểm du lịch sinh thái gần Sài Gòn, nơi bản có thể trải nghiệm những hoạt động vui chơi giải trí,đ...</h6>
            <a href="#">Xem thêm <strong>-></strong></a>
        </div>
        <div class="new">
            <img src="img/t3.webp" alt="">
            <h5>6 địa diểm du lịch gần Sài Gòn cho dịp nghỉ lễ 30/4 và mùng 1/5</h5>
            <p>Dung Nguyen | Ngày 25/10/2021</p>
            <h6>Hồ Dầu Tiếng là địa danh đẹp thơ mộng ở Tây Ninh chỉ cách TP.HCM có 85km. Đây phải nói là địa điểm hoàn hảo để có chu...</h6>
            <a href="#">Xem thêm <strong>-></strong></a>
        </div>
        <div class="new">
            <img src="img/t2.webp" alt="">
            <h5>6 địa diểm du lịch gần Sài Gòn cho dịp nghỉ lễ 30/4 và mùng 1/5</h5>
            <p>Dung Nguyen | Ngày 23/10/2021</p>
            <h6>Không ngẫu nhiên mà sản phẩm lều trại lại thông dụng cho các chuyến dã ngoại như vậy. Sở dĩ khách hàng luôn tìm thuê ...</h6>
            <a href="#">Xem thêm <strong>-></strong></a>
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
</body>
</html>
