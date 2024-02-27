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
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Trochoigiadinhchitiet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
<div class="text">
    <div>
        <a href="home.html">Home  > </a>
        <p>Games for family</p>
    </div>
    <h2>
        GAME DETAILS FOR FAMILY</h2>
    <hr/>
</div>
<div class="des">
    <div>
        <h2 style="text-align: center">Game Description</h2>
        <p style="text-align: center"><strong>Team:</strong> Form two teams, each team can have from 3 to 6 players.</p>
        <p style="text-align: center"><strong>Field:</strong> Choose a large enough space to play, it can be a backyard or a park.</p>
        <p style="text-align: center"><strong>Time:</strong> Set the playing time, for example: 2 halves, each half 15 minutes.</p>
        <p style="text-align: center"><strong>Ball:</strong> Use a soccer ball appropriate to the team size and playing field.</p>
        <p style="text-align: center"><strong>Offside Rule:</strong> Depending on the field size, decide whether to use the offside rule or not.</p>
        <p style="text-align: center"><strong>Scoring:</strong> Each goal scored will earn points for the team.</p>
        <p style="text-align: center"><strong>Enjoyment:</strong> Most importantly, ensure everyone participates and has fun.</p>
    </div>
</div>
<div class="des">
    <div>
        <h2 style="text-align: center">Notes and Warnings</h2>
        <p style="text-align: center"><strong>Safety:</strong> Always ensure safety for everyone involved. Encourage the use of flashlights if playing at night.</p>
        <p style="text-align: center"><strong>Clothing:</strong> Wear appropriate clothing and athletic shoes to reduce the risk of injury.</p>
        <p style="text-align: center"><strong>Fair Play:</strong> Encourage fair play to create a positive environment and avoid unnecessary conflicts.</p>
        <p style="text-align: center"><strong>Health Check:</strong> Remember to check health before participating, especially if there are elderly people or special health conditions.</p>
    </div>
</div>
<div class="des">
    <div>
        <h2 style="text-align: center">Benefits</h2>
        <p style="text-align: center"><strong>Family Bonding:</strong> Family soccer games create opportunities for family bonding and interaction.</p>
        <p style="text-align: center"><strong>Health Improvement:</strong> Physical activity helps improve health and motivates to maintain a positive lifestyle.</p>
        <p style="text-align: center"><strong>Skill Development:</strong> Soccer games also help develop skills such as tactical thinking, concentration, and teamwork.</p>
        <p style="text-align: center"><strong>Stress Reduction:</strong> Participating in fun activities helps reduce stress and enhances positive mood.</p>
        <p style="text-align: center"><strong>Learning:</strong> Games provide opportunities to learn about teamwork, time management, and how to overcome challenges.</p>
    </div>
</div>
<div class="des">
    <div class="img">
        <h2 style="text-align:center">Images</h2>
        <img class="img1" src="https://watermark.lovepik.com/photo/20211124/large/lovepik-families-play-football-outdoors-picture_500979044.jpg" alt="Family football game" />
        <a href="./Tro%20choi%20gia%20dinh/Tro%20choi%20bong%20da%20gia%20dinh.docx" class="custom-button">Download Instructions</a>
    </div>
</div>
<div class="des">
    <div class="rating">
        <h1>Reviews and Comments</h1>
        <section>
            <input type="radio" name="star" id="star5" value="5" />
            <label for="star5" class="star">&#9733;</label>
            <input type="radio" name="star" id="star4" value="4" />
            <label for="star4" class="star">&#9733;</label>
            <input type="radio" name="star" id="star3" value="3" />
            <label for="star3" class="star">&#9733;</label>
            <input type="radio" name="star" id="star2" value="2" />
            <label for="star2" class="star">&#9733;</label>
            <input type="radio" name="star" id="star1" value="1" />
            <label for="star1" class="star">&#9733;</label>
        </section>
        <textarea id="review" placeholder="Write your review..."></textarea>
        <button onclick="submitReview()">Submit Review</button>
    </div>
</div>
<script>
    function submitReview() {
        // Get star rating and review text
        var rating = document.querySelector('input[name="star"]:checked');
        var reviewText = document.getElementById('review').value;

        // Check if star rating is selected
        if (!rating) {
            alert('Please select a star rating before submitting the review.');
            return;
        }

        // Display alert
        alert('Your rating: ' + rating.value + ' stars\nReview: ' + reviewText);

        // Additional logic to save the review to a database can be added here
    }
</script>
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
</body>
</html>

