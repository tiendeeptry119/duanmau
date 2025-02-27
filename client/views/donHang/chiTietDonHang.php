<?php
require './views/layout/header.php';
require './views/layout/navbar.php';

?>







<div class="layout" style="background-color:  #f4f6f9;">
  <section style="margin:20px auto; width:90%;" class="content card">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="alert">
            <h3 class=""><i class="fas fa-info"></i>Chi tiết đơn hàng</h3>
          </div>
          <?php
          $bgcolor = '';
          if ($detailDonHang['trang_thai_id'] <= 3) {
            $bgcolor = 'primary';
          } elseif ($detailDonHang['trang_thai_id'] <= 7) {
            $bgcolor = 'warning';
          } elseif ($detailDonHang['trang_thai_id'] <= 8) {
            $bgcolor = 'success';
          } elseif ($detailDonHang['trang_thai_id'] <= 9) {
            $bgcolor = 'warning';
          } elseif ($detailDonHang['trang_thai_id'] <= 10) {
            $bgcolor = 'danger';
          }

          ?>


          <div class="alert alert-<?= $bgcolor ?>">
            <h5 style="color:black;">Trạng thái đơn hàng : <?= $detailDonHang['ten_trang_thai'] ?></h5>
          </div>
          <div class="form-group row col-md-12">
            <div class="col-md-10"></div>

            <a disabled href="<?= BASE_URL_CLIENT . '?act=sua-thong-tin-nguoi-nhan&don_hang_id=' . $detailDonHang['id'] ?>"><button type="submit" <?= $detailDonHang['trang_thai_id'] >= 3 ? 'disabled' : '' ?> class="btn btn-primary">Sửa thông tin người nhận</button></a>


          </div>
          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> Chi tiết đơn hàng : <?= $detailDonHang['ma_don_hang'] ?>
                  <small class="float-right">Ngày đặt: <?= formatDate($detailDonHang['ngay_dat']) ?></small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">

                <address>
                  <strong>Thông tin người đặt: </strong><br>
                  <b>Tên : </b> <?= $detailDonHang['ho_ten'] ?><br>
                  <b>Email :</b> <?= $detailDonHang['email'] ?><br>
                  <b>Số điện thoại :</b> <?= $detailDonHang['so_dien_thoai'] ?><br>
                  <b>Địa chỉ :</b> <?= $detailDonHang['dia_chi'] ?><br>

                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">

                <address>
                  <strong> Thông tin người nhận :</strong><br>
                  <b>Tên : </b> <?= $detailDonHang['ten_nguoi_nhan'] ?><br>
                  <b>Email :</b> <?= $detailDonHang['email_nguoi_nhan'] ?><br>
                  <b>Số điện thoại :</b> <?= $detailDonHang['sdt_nguoi_nhan'] ?><br>
                  <b>Địa chỉ :</b> <?= $detailDonHang['dia_chi_nguoi_nhan'] ?><br>
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <strong> Thông tin đơn hàng : <?= $detailDonHang['ma_don_hang'] ?></strong><br>


                <b>Tổng tiền : </b> <?= number_format($detailDonHang['tong_tien']) . 'VNĐ'?><br>
                <b>Ghi chú : </b><?= $detailDonHang['ghi_chu'] ?><br>
                <b>Phương thức thanh toán : </b><?= $detailDonHang['ten_phuong_thuc'] ?><br>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div style="margin-top: 20px; width: 90%; margin-bottom:20px" class="product-item card">
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-4">
                <a href="" style="text-align: center;">
                    <div style="width: 500px; height:300px; background-image:url('<?= '.' . $detailSanPham['hinh_anh'] ?>'); background-repeat: no-repeat;  background-position: center; marign:auto 0px;"></div>
                </a>
            </div>
            <div class="form-group col-md-6">

                <ul>
                    <div class="card-title alert alert-primary">
                        <h3>Thông tin sản phẩm</h3>
                    </div>
                    <li class="title"><a href=""><?= $detailSanPham['ten_san_pham']  ?></a></li>
                    <li class="text-justify"><?= $detailSanPham['mo_ta'] ?>
                    </li>
                    <li class="form-group row col-md-12">


                        <div class="form-group col-md-6">
                            <p class=" text-danger font-weight-bold">Giá: <?= number_formaT($detailSanPham['gia_khuyen_mai']) . 'VNĐ' ?></p>
                        </div>
                        <form action="<?= BASE_URL_CLIENT . '?act=post-dat-hang' ?>" method="POST" enctype="multipart/form-data">
                            <div class="col-md-12 row">
                                <label class="col-md-5" for="">Số lượng: </label>
                                <input class="col-md-4 form-control" min="1" type="number" name="so_luong" id="" value="<?= $detailDonHang['so_luong'] ?>" disabled>
                                <p class="text-danger">
                                    <?php if (isset($_SESSION['error']['so_luong'])) {
                                        echo $_SESSION['error']['so_luong'];
                                    } ?>
                                </p>

                                <input type="number" name="don_gia" value="<?= $detailSanPham['gia_khuyen_mai'] ?>" hidden>
                                <input type="hidden" name="san_pham_id" value="<?= $san_pham_id ?>">
                            </div>
                            
                    </li>
                </ul>
            </div>

        </div>
    </div>

            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->

        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
</div>



















<?php require './views/layout/footer.php'; ?>