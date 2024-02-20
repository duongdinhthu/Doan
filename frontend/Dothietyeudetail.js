$(document).ready(function () {
    $('.main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000, // Tự động chuyển slide sau 2000ms (2 giây)
        dots: true, // Hiển thị chấm chấm dưới slider để chuyển giữa các slide
        arrows: true, // Hiển thị nút điều hướng trái/phải
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false, // Ẩn nút điều hướng ở màn hình nhỏ hơn 768px
                }
            }
        ]
    });
});


function showContent(category) {
    // Add logic to show content based on the category

    // Remove 'active' class from all links
    var links = document.querySelectorAll('.navigation-bar a');
    links.forEach(function(link) {
        link.classList.remove('active');
    });

    // Add 'active' class to the clicked link
    event.target.classList.add('active');
}

function showContent(sectionId) {
    // Ẩn tất cả các phần nội dung
    var sections = document.querySelectorAll('.content-section');
    sections.forEach(function (section) {
        section.style.display = 'none';
    });

    // Hiển thị phần nội dung được chọn
    var selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
        selectedSection.style.display = 'block';
    }
}

// Lắng nghe sự kiện click cho các phần tử trong navigation-bar
document.addEventListener('DOMContentLoaded', function () {
    var navigationItems = document.querySelectorAll('.navigation-bar a');
    navigationItems.forEach(function (item) {
        item.addEventListener('click', function () {
            // Lấy giá trị của thuộc tính onclick để xác định sectionId
            var sectionId = item.getAttribute('onclick').match(/'([^']+)'/)[1];
            showContent(sectionId);
        });
    });
});




