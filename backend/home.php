<?php
session_start();

if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
$username = $_SESSION["username"];
include "project.php";
$carts = new projectFptHappy();
if (isset($_GET['action']) && $_GET['action'] === 'deletepay') {

    $deletepay = $carts->deletePay($username);
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
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<style>
    #searchResults a {
        color: #333;
        text-decoration: none;
    }

    #searchResults a:hover {
        text-decoration: none;
    }
    </style>
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

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const searchInput = document.getElementById('search');
                    const searchResultsContainer = document.getElementById('searchResults');

                    // Event listener cho input tìm kiếm
                    searchInput.addEventListener('input', function() {
                        const searchQuery = searchInput.value.toLowerCase();
                        if (searchQuery.length === 0) {
                            // Nếu không có truy vấn tìm kiếm, xóa tất cả kết quả hiển thị
                            searchResultsContainer.innerHTML = '';
                            return;
                        }
                        // Gọi hàm tìm kiếm và hiển thị kết quả
                        const searchResults = performSearch(searchQuery);
                        displaySearchResults(searchResults);
                    });

                    // Hàm thực hiện tìm kiếm
                    function performSearch(query) {
                        const dummySearchResults = [
                            { title: "Trochoitreem", url: "Trochoitreem.php" },
                            { title: "Trochoinguoilon", url: "Trochoinguoilon.php" },
                            { title: "Trochoigiadinh", url: "Trochoigiadinh.php" },
                            { title: "Dichvutochuc", url: "Dichvutochuc.php" },
                            { title: "Dichvutrongoi", url: "Dichvutrongoi.php" },
                            { title: "Dichvutour", url: "Dichvutour.php" },
                            { title: "Thucpham", url: "Thucpham.php" },
                            { title: "Docanhan", url: "Docanhan.php" },
                            { title: "Dothietyeu", url: "Dothietyeu.php" }

                        ];
                        // Lọc và trả về các kết quả phù hợp với truy vấn tìm kiếm
                        return dummySearchResults.filter(result =>
                            result.title.toLowerCase().includes(query)
                        );
                    }

                    // Hàm hiển thị kết quả tìm kiếm
                    function displaySearchResults(results) {
                        // Xóa bất kỳ kết quả hiện có nào trước khi hiển thị kết quả mới
                        searchResultsContainer.innerHTML = '';
                        // Lặp qua mỗi kết quả và hiển thị nó trong phần tử searchResultsContainer
                        results.forEach(result => {
                            const resultItem = document.createElement('div');
                            resultItem.innerHTML = `<a href="${result.url}">${result.title}</a>`;
                            searchResultsContainer.appendChild(resultItem);
                        });
                    }
                });
            </script>
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
    <img src="img/slider_1.webp" alt="" style="width: 100%; background-color: #FEF7EF">
</header>
<div class="introduce">
    <h2>WHY CHOOSE CAMP AS YOUR TRAVEL COMPANION?</h2>
    <hr/>
    <p>CAMP is honored to accompany you on every journey, ensuring you have the best experiences.</p>
    <div class="content">
        <img src="img/banner_why_1.webp" alt="">
        <div class="inside_content">
            <div class="all-box">
                <button class="box">
                    <i class="fa-solid fa-list"></i>
                    <h5>QUANTITY ASSURANCE</h5>
                    <p>Meet the camping, travel, and outdoor needs of up to 2000 people.</p>
                </button>
                <button class="box">
                    <i class="fa-solid fa-medal"></i>
                    <h5>QUALITY COMMITMENT</h5>
                    <p>All products meet safety and quality standards.</p>
                </button>
            </div>
            <div class="all-box">
                <button class="box2">
                    <i class="fa-solid fa-gift"></i>
                    <h5>DISCOUNT POLICY</h5>
                    <p>Loyalty programs, charity events, community activities.</p>
                </button>
                <button class="box2">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h5>WARRANTY POLICY</h5>
                    <p>Meet the camping, travel, and outdoor needs of up to 2000 people.</p>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="service">
    <div class="text-box" style="margin-left:100px;">
        <h2>SERVICES</h2>
        <hr/>
        <p>CAMP offers the most convenient and suitable services, making your trips hassle-free.</p>
        <button id="viewAllBtn">View all</button>
        <button id="backToTopBtn" style="display: none;">View apart</button>
    </div>
    <div class="img-boxes">
        <button class="img-box">
            <div class="text">
                <p>Adventure gear<br>combo</p>
            </div>
            <a href="Docanhandetail.php">
                <img src="images(sanpham)/shopping.webp" alt="" style="border-radius:20px;">
            </a>
        </button>
        <button class="img-box">
            <div class="text">
                <p>Travel gear<br>rental</p>
            </div>
            <a href="Dothietyeudetail.php">
                <img src="images(sanpham)/img1.webp" alt="" style="border-radius:20px;">
            </a>
        </button>
        <button class="img-box">
            <div class="text">
                <p>Camping gear</p>
            </div>
            <a href="Thucphamdetail.php">
                <img src="images(sanpham)/img2.png" alt="" style="border-radius:20px;">
            </a>
        </button>
        <!-- Ẩn đi -->
        <button class="img-box hidden">
            <div class="text">
                <p>Adventure gear<br>combo</p>
            </div>
            <img src="img/banner-dich-vu-1.webp" alt="">
        </button>
        <button class="img-box hidden">
            <div class="text">
                <p>Travel gear<br>rental</p>
            </div>
            <img src="img/banner-dich-vu-2.webp" alt="">
        </button>
        <button class="img-box hidden">
            <div class="text">
                <p>Camping gear</p>
            </div>
            <img src="img/banner-dich-vu-3.webp" alt="">
        </button>
    </div>
</div>
<script>
    // Lấy button "View all"
    const viewAllBtn = document.getElementById('viewAllBtn');

    // Lấy tất cả các button có class 'img-box' (tất cả 6 ảnh)
    const imgBoxes = document.querySelectorAll('.img-box');

    // Bắt sự kiện click vào nút "View all"
    viewAllBtn.addEventListener('click', function() {
// Lặp qua mỗi button có class 'img-box'
        imgBoxes.forEach(function(imgBox, index) {
// Hiện các ảnh bằng cách gỡ bỏ lớp 'hidden' từ các button
            imgBox.classList.remove('hidden');
        });

// Ẩn nút "View all" sau khi đã hiển thị tất cả các ảnh
        viewAllBtn.style.display = 'none';
    });
    // Lấy button "Back to top"
    const backToTopBtn = document.getElementById('backToTopBtn');

    // Bắt sự kiện click vào nút "View all"
    viewAllBtn.addEventListener('click', function() {
        // Lặp qua mỗi button có class 'img-box'
        imgBoxes.forEach(function(imgBox, index) {
            // Hiện các ảnh bằng cách gỡ bỏ lớp 'hidden' từ các button
            imgBox.classList.remove('hidden');
        });

        // Ẩn nút "View all" sau khi đã hiển thị tất cả các ảnh
        viewAllBtn.style.display = 'none';

        // Hiển thị nút "Back to top"
        backToTopBtn.style.display = 'inline-block';
    });

    // Bắt sự kiện click vào nút "Back to top"
    backToTopBtn.addEventListener('click', function() {
        // Ẩn đi 3 hình ảnh thứ 4, 5 và 6
        imgBoxes.forEach(function(imgBox, index) {
            if (index >= 3) {
                imgBox.classList.add('hidden');
            }
        });

        // Ẩn nút "Back to top"
        backToTopBtn.style.display = 'none';

        // Hiển thị lại nút "View all"
        viewAllBtn.style.display = 'inline-block';
    });

</script>

<div class="outstanding-product">
    <h2>FEATURED PRODUCTS</h2>
    <hr/>
    <div class="product-boxes">
        <div>
            <a href="Dothietyeudetail.php">
                <img src="img/sp5.webp" alt="">
            </a>
            <a href="Dothietyeudetail.php">Self-inflating camping tent for 4-5 people, cool and airy, with sunroof...</a>
            <h5 class="cost">
                $50 <small><del>$60</del></small>
            </h5>
        </div>
        <div>
            <img src="img/sp8.webp" alt="">
            <a href="#">Convenient camping tent for 2-3 people (2mx1.5mx1.1m) K102</a>
            <h5 class="cost">
                $20 <small><del>$30</del></small>
            </h5>
        </div>
        <button>
            <h2>4-8 PERSON OUTDOOR COMBO<br><p>View now <strong>-></strong></p></h2>
            <img src="img/img_banner_product_featured.webp" alt="" style="width:570px">
        </button>
    </div>
    <div class="product-boxes">
        <div>
            <img src="img/leu2.webp" alt="">
            <a href="#">Premium self-inflating camping tent for 1-3 people, size 2 x 1.5 x...</a>
            <h5 class="cost">
                $80 <small><del>$100</del></small>
            </h5>
        </div>
        <div>
            <img src="img/leu1.webp" alt="">
            <a href="#">Military-style self-inflating camping tent for 1-3 people, size...</a>
            <h5 class="cost">
                Contact us
            </h5>
        </div>
        <div>
            <img src="img/sp9.webp" alt="">
            <a href="#">Self-inflating camping tent with 2 sunroofs and 4 doors for 3-4...</a>
            <h5 class="cost">
                $70 <small><del>$90</del></small>
            </h5>
        </div>
        <div>
            <img src="img/leu3.webp" alt="">
            <a href="#">High-quality self-inflating camping tent for 8-9 people (Size...</a>
            <h5 class="cost">
                $150 <small><del>$180</del></small>
            </h5>
        </div>
    </div>
</div>
<div class="exclusive-product">
    <h2>CAMP EXCLUSIVES</h2>
    <hr/>
    <div class="menu-product">
        <a href="#" class="a1" style="color: white; text-decoration: none !important;">Tents and accessories</a>
        <a href="#" style=" text-decoration: none !important;">Outdoor furniture</a>
        <a href="#" style=" text-decoration: none !important;">Stoves and utensils</a>
        <a href="#" style=" text-decoration: none !important;">Mats, mattresses, sleeping bags</a>
        <a href="#" style=" text-decoration: none !important;">Floor lamps & outdoor lights</a>
        <a href="#" style=" text-decoration: none !important;">Other products</a>
    </div>
    <div class="exclusive-boxes">
        <img src="img/img_banner_product_tab.webp" alt="">
        <div class="boxes">
            <div>
                <a href="Docanhandetail.php">
                    <img src="images(sanpham)/shopping.webp" alt="">
                </a>
                <a href="Docanhandetail.php">Survival Knife</a>
                <h5 class="cost">$3.99 <small><del>$6</del></small></h5>
            </div>
            <div>
                <img src="img/sp15.webp" alt="">
                <a href="#">Ultralight single hammock for outdoor...</a>
                <h5 class="cost">$20 <small><del>$40</del></small></h5>
            </div>
            <div>
                <img src="img/sp11.webp" alt="">
                <a href="#">Outdoor BBQ grill made of stainless steel</a>
                <h5 class="cost">$15</h5>
            </div>
            <div>
                <img src="img/sp14.webp" alt="">
                <a href="#">Premium camping hammock K174, durable...</a>
                <h5 class="cost">$20 <small><del>$40</del></small></h5>
            </div>
            <div>
                <img src="img/sp12.webp" alt="">
                <a href="#">Outdoor BBQ grill with tall legs (Full set)...</a>
                <h5 class="cost">$50</h5>
            </div>
            <div>
                <img src="img/sp9%20(1).webp" alt="">
                <a href="#">Self-inflating camping tent for 4-5 people...</a>
                <h5 class="cost">$50 <small><del>$60</del></small></h5>
            </div>
        </div>
    </div>
</div>
<div class="combo">
    <h2>CAMP EXCLUSIVE COMBOS</h2>
    <hr/>
    <div class="img-combo">
        <a href="Dichvutochucdetail.php" style="margin-right: 20px">
            <img src="img/image_combo_1.webp" alt="" style="width: 100%; margin-right: -25px">
        </a>
        <img src="img/image_combo_2.webp" alt="">
    </div>
</div>


<div class="news">
    <h2>NEWS</h2>
    <hr/>
    <div class="all-new">
        <div class="new">
            <img src="imageTinTuc/img200.webp" alt="" style="height: 215px">
            <h5>ANNOUNCEMENT OF VIETNAM NATIONAL DAY HOLIDAY 2/9/2023</h5>
            <p>Dung Nguyen | October 25, 2021</p>
            <h6>  To our valued customers and partners, FPT HAPPY Company respectfully announces the schedule of the 2/9/2023 National Day holiday...</h6>
            <a href="cardtitle1.php">Read more <strong>-></strong></a>
        </div>
        <div class="new">
            <img src="img/t3.webp" alt="">
            <h5>6 nearby travel destinations from Saigon for the April 30th and May 1st holidays</h5>
            <p>Dung Nguyen | October 25, 2021</p>
            <h6>Dau Tieng Lake is a picturesque destination in Tay Ninh, just 85km from Ho Chi Minh City. This is...</h6>
            <a href="#">Read more <strong>-></strong></a>
        </div>
        <div class="new">
            <img src="img/t2.webp" alt="">
            <h5>6 nearby travel destinations from Saigon for the April 30th and May 1st holidays</h5>
            <p>Dung Nguyen | October 23, 2021</p>
            <h6>It's no coincidence that camping gear is so popular for outdoor trips. Customers always seek...</h6>
            <a href="#">Read more <strong>-></strong></a>
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
</body>
</html>

