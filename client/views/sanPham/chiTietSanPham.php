<?php
require './views/layout/header.php';
require './views/layout/navbar.php';

?>



<div class="card card-solid">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="col-12">
                    <img style="width: 400px; height:350px; margin-left:100px;" src="<?= BASE_URL . $detailSanPham['hinh_anh'] ?>" class="product-image" alt="Product Image">
                </div>

            </div>




            <div class="col-12 col-sm-6">
                <h2 class="my-3 font-weight-bold">- Tên sản phẩm: <?= $detailSanPham['ten_san_pham']; ?></h2>
                <hr>
                <ul class="">

                    <h3>
                        <li>Giá tiền: <?= number_format($detailSanPham['gia_san_pham']) . ' VNĐ' ?></li>
                    </h3>
                    <h3>
                        <li>Giá Khuyến mãi: <?= number_format($detailSanPham['gia_khuyen_mai']) . ' VNĐ' ?></li>
                    </h3>
                    <h3>
                        <li>Số lượng: <?= $detailSanPham['so_luong'] ?></li>
                    </h3>
                  
                    <h3>
                        <li>Danh mục: <?= $detailSanPham['ten_danh_muc'] ?></li>
                    </h3>
                    <h3>
                        <li>Trạng thái: <?= $detailSanPham['trang_thai'] == 1 ? 'Còn hàng' : 'Hết hàng' ?></li>
                    </h3>
                </ul>




            </div>
        </div>

        <ul class="nav nav-tabs row mt-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Bình luận</button>
            </li>

        </ul>
        <div class="tab-content form-group row" id="myTabContent">
            <div class="tab-pane fade show active col-md-7" id="home" role="tabpanel" aria-labelledby="home-tab">
                <table class="table table-striped table-hover form-group col-md-12">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên người bình luận</th>
                            <th>Nội dung</th>
                            <th>Ngày đăng</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($binhLuan as $key => $value) : ?>
                            <tr <?= $value['trang_thai'] == 0 ? 'hidden' : '' ?>>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['ho_ten'] ?></td>
                                <td><?= $value['noi_dung'] ?></td>
                                <td><?= $value['ngay_dang'] ?></td>



                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <div style="margin-top:20px" class="form-group col-md-4">
                <form class="form-group row col-md-12" action="<?= BASE_URL_CLIENT . '?act=them-binh-luan'?>" method="POST">
                    <?php
                    $currentTime = date('Y-m-d');
                    ?>
                    <input type="date" name="ngay_dang" value="<?= $currentTime ?>" hidden>
                    <input type="text" name="tai_khoan_id" id="" value="<?= $idClient['id'] ?>" hidden>
                    <input type="text" name="id_san_pham" id="" value="<?= $detailSanPham['id'] ?>" hidden>
                    <textarea  class="col-md-10" rows="6" name="binh_luan" placeholder="Bình luận....."></textarea>
                    
                    <button style="height: 30px; margin-left:10px;" class="btn btn-primary " type="submit">Gửi</button>
                    <?php if(isset($_SESSION['error']['binh_luan'])) { ?>
                        <p class="text-danger">
                            <?= $_SESSION['error']['binh_luan']; ?>
                    </p>
                    <?php } ?>
                </form>
            </div>
        </div>




















        <?php require './views/layout/footer.php'; ?>