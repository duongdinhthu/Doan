<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bootstrap Image Slider</title>
</head>
<body>

<div id="mainCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-5.jpg?v=1634875263327" class="d-block w-100" alt="Main Image">
        </div>
        <!-- Thêm các slide khác nếu cần -->
    </div>
</div>

<div id="thumbnailCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-flex">
                <div class="thumbnail" data-target="#mainCarousel" data-slide-to="0">
                    <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5.jpg?v=1634875258950" class="d-block w-100" alt="Thumbnail 1">
                </div>
                <div class="thumbnail" data-target="#mainCarousel" data-slide-to="1">
                    <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-2.jpg?v=1634875260253" class="d-block w-100" alt="Thumbnail 2">
                </div>
                <div class="thumbnail" data-target="#mainCarousel" data-slide-to="2">
                    <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-3.jpg?v=1634875261313" class="d-block w-100" alt="Thumbnail 3">
                </div>
                <div class="thumbnail" data-target="#mainCarousel" data-slide-to="3">
                    <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-4.jpg?v=1634875262273" class="d-block w-100" alt="Thumbnail 4">
                </div>
                <div class="thumbnail" data-target="#mainCarousel" data-slide-to="4">
                    <img src="https://bizweb.dktcdn.net/100/440/011/products/sp5-5.jpg?v=1634875263327" class="d-block w-100" alt="Thumbnail 5">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Xử lý sự kiện khi click vào hình ảnh phụ
    $(document).ready(function(){
        $('.thumbnail').click(function(){
            var targetSlide = $(this).attr('data-slide-to');
            $('#mainCarousel').carousel(parseInt(targetSlide));
        });
    });
</script>

</body>
</html>
