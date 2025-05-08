<?php 
require './views/layout/header.php';
require './views/layout/navbar.php';
?>

<!-- Banner -->
<div class="banner">
    <img src="./assets/images/banner.jpg" alt="Banner" class="img-fluid w-100" style="height: 630px; object-fit: cover;">
</div>

<!-- Giới thiệu -->
<div class="content container py-5">
    <h1 class="text-center mb-5">Giới thiệu</h1>

    <div class="row align-items-center mb-5">
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-md-5 mb-4 mb-md-0">
            <img src="./assets/images/sanpham1.jpg" class="img-fluid rounded" alt="Giới thiệu 1">
        </div>
        <div class="col-md-6">
            <ul>
                <li><i>Ngay từ tên gọi “giày thể thao” đã bộc lộ rõ nó là gì rồi đúng không nào?... </i></li>
                <li><i>Vậy vai trò của giày thể thao là gì?... </i></li>
            </ul>
        </div>
    </div>

    <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-md-5 mb-4 mb-md-0">
            <img src="./assets/images/sanpham2.jpg" class="img-fluid rounded" alt="Giới thiệu 2">
        </div>
        <div class="col-md-6">
            <ul>
                <li><i>Vào năm 1971, hãng giày Nike được thành lập... </i></li>
                <li><i>Và từ đó cho đến nay, lịch sử của giày thể thao... </i></li>
                <li><i>Hãng giày Nike được Bill Bowerman và Philip Knight sáng lập... </i></li>
            </ul>
        </div>
    </div>
</div>

<!-- Sản phẩm -->
<div class="products container pb-5">
    <h2 class="text-center mb-5">Sản phẩm</h2>

    <div class="row align-items-center mb-5">
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-md-5 mb-4 mb-md-0">
            <a href="#"><img src="./assets/images/sanpham3.jpg" class="img-fluid rounded" alt="Adidas"></a>
        </div>
        <div class="col-md-6">
            <ul>
                <li class="title"><a href="#">Giày ADIDAS</a></li>
                <li>Nếu so về năm tuổi, Nike còn phải gọi adidas là đàn anh...</li>
                <li>Giày có những chi tiết thiết kế cực cao.</li>
            </ul>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-md-5 mb-4 mb-md-0">
            <a href="#"><img src="./assets/images/sanpham4.jpg" class="img-fluid rounded" alt="Grand Up"></a>
        </div>
        <div class="col-md-6">
            <ul>
                <li class="title"><a href="#">Giày Grand Up</a></li>
                <li>Trong gần một thế kỉ, hãng giày adidas không ngừng phát triển...</li>
                <li>Giày chạy bộ là loại giày chuyên dụng cho việc chạy bộ...</li>
                <li>Bên cạnh đó, giày chạy bộ sẽ có trọng lượng nhỏ...</li>
            </ul>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-md-5 mb-4 mb-md-0">
            <a href="#"><img src="./assets/images/sanpham5.jpg" class="img-fluid rounded" alt="Sport"></a>
        </div>
        <div class="col-md-6">
            <ul>
                <li class="title"><a href="#">Giày Sport</a></li>
                <li>Đây là dòng giày chú trọng nhiều về mục đích thời trang...</li>
                <li>Dù vẫn sở hữu những tính năng và dáng vẻ thể thao...</li>
            </ul>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require './views/layout/footer.php'; ?>
