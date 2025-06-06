<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';

// Require toàn bộ file Models
require_once './models/home.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang Login
         '/' => (new HomeController())->login(),

    // Xử lí đăng nhập
         'post-login' => (new HomeController())->postLogin(),
    // form Đăng ký
        'form-dang-ky' => (new HomeController())->formDangky(),
    // post xử lí dữ liệu từ form
        'post-dang-ky' => (new HomeController())->postDangKy(),
    
       
};