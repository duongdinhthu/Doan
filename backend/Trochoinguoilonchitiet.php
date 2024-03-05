<?php
session_start();
//kiểm tra session

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Trochoinguoilonchitiet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
        <p>Games for adult</p>
    </div>
    <h2>
        GAME DETAILS FOR ADULT</h2>
    <hr/>
</div>
<div class="des">
    <div>
        <h2 style="text-align: center">Description of the Game</h2>
        <p><strong>Team:</strong> Form teams, each team can have from 2 to 4 people.</p>
        <p><strong>Materials:</strong> Prepare materials such as firewood, newspapers, and tools for starting a fire.</p>
        <p><strong>Campfire Area:</strong> Choose a safe area to build a campfire, it could be a backyard or suburban area.</p>
        <p><strong>Time:</strong> Set the duration of the game, for example: 20 minutes to 1 hour.</p>
        <p><strong>Safety Rules:</strong> Define safety rules when building a campfire, maintain a safe distance, and use safe materials.</p>
        <p><strong>Winning Points:</strong> The team that starts the fire quickly and maintains the campfire for the shortest time wins.</p>
        <p><strong>Have Fun:</strong> Ensure everyone participating enjoys themselves and has fun during the fire starting process and camp atmosphere.</p>
    </div>
</div>
<div class="des">
    <div>
        <h2 style="text-align: center">Notes and Warnings</h2>
        <p><strong>Safety:</strong> Always prioritize safety when working with fire, avoid using hazardous materials.</p>
        <p><strong>Clothing:</strong> Wear appropriate clothing to protect the body from fire hazards.</p>
        <p><strong>Fair Play Rules:</strong> Encourage fair play to create a positive environment and avoid unnecessary conflicts.</p>
        <p><strong>Health Check:</strong> Remember to check health conditions before participating, especially for elderly or individuals with special health conditions.</p>
    </div>
</div>
<div class="des">
    <div>
        <h2 style="text-align: center">Benefits</h2>
        <p><strong>Survival Skills:</strong> Learning how to build and maintain a campfire develops survival skills.</p>
        <p><strong>Teamwork:</strong> The game provides opportunities to develop teamwork skills and communication.</p>
        <p><strong>Outdoor Experience:</strong> Enjoy the outdoor atmosphere and learn how to appreciate outdoor life.</p>
        <p><strong>Creativity:</strong> Building a campfire is also a creative experience and teaches how to work with unfamiliar environments.</p>
    </div>
</div>
<div class="des">
    <div class="img">
        <h2 style="text-align:center">Images</h2>
        <img class="img1" src="https://hockiquandoi.net/wp-content/uploads/2020/09/unnamed-1.jpg" alt="Starting a Campfire" />
        <a href="./Tro%20choi%20cho%20nguoi%20lon/Tro%20choi%20dot%20duoc%20lua%20trai.docx" class="custom-button">Download Instructions</a>
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
            alert('Please select a star rating before submitting your review.');
            return;
        }

        // Display message
        alert('Your rating: ' + rating.value + ' stars\nReview: ' + reviewText);

        // You can add logic to save the review to a database here
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
</html>

