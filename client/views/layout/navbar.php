<div class="navbar">
    <img src="./assets/images/logogiaydep.jpg" alt="Logo" class="logo-navbar">

    <div class="menu">
        <a href="<?= BASE_URL_CLIENT ?>">Trang chủ</a>
        <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>">Sản phẩm</a>
        <a href="<?= BASE_URL_CLIENT . '?act=gio-hang' ?>">Giỏ hàng</a>
        <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-don-hang' ?>">Đơn hàng</a>
    </div>

    <form action="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>" method="POST" class="search-form">
        <input type="text" name="search" placeholder="search">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>

    <div class="avatar">
        <img src="<?= '.' . $user['hinh_anh']; ?>" alt="" onerror="this.onerror=null; this.src='../uploads/th.jpg'">
        <a href="<?= BASE_URL_CLIENT .'?act=logout'?>" title="Đăng xuất"><i class="bi bi-box-arrow-right"></i></a>
    </div>
</div>
