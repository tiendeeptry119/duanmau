<div class="navbar card">
            <div class="form-row col-md-12">
                <div class="form-group col-md-2">
                    <img src="./assets/images/logogiaydep.jpg" alt="ảnh">
                </div>
                <div class="form-group col-md-6 row">
                    <div class="form-group col-md-3">
                        <a href="<?= BASE_URL_CLIENT ?>">Trang chủ</a>
                    </div>
                    <div class="form-group col-md-3">
                        <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>" title="Danh sách sản phẩm">Sản phẩm</a>
                    </div>
                    <div class="form-group col-md-3">
                        <a href="<?= BASE_URL_CLIENT . '?act=gio-hang' ?>">Giỏ hàng</a>
                    </div>
                    <div class="form-group col-md-3">
                        <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-don-hang' ?>">Đơn hàng</a>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <form action="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>" method="POST">
                        <input style="border-radius:5px" class="col-md-9" type="text" name="search" placeholder="search">
                        <button style="border-radius: 2px;" type="submit" class="search col-md-2"><i class="bi bi-search"></i></button>
                    </form>
                </div>
                <div class="form-group col-md-1">
                    <div class="avatar form-group col-md-12">
                        <img style="width: 30px; height :30px; border-radius:50%;" title="Thông tin cá nhân" src="<?= '.' . $user['hinh_anh']; ?>" alt="" onerror="this.onerror=null; this.src= '../uploads/th.jpg'">
                        <a href="<?= BASE_URL_CLIENT .'?act=logout'?>" title="Đăng xuất"><i class="bi bi-box-arrow-right"></i></a>
                    </div>
                </div>

               
             

            </div>

        </div>