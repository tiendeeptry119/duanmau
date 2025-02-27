<?php
require './views/layout/header.php';
require './views/layout/navbar.php';


?>
<!-- navbar -->



<!-- main content -->



<div class="products card " sytle="width: 90%; margin:20px; ">
    <?php if(empty($listSanPham)){ ?>
            <div style="margin: 20px 0px;" class=" alert alert-primary col-md-12 text-center">
                Chưa có sản phẩm trong giỏ hàng
            </div>
    <?php }else{ ?>

    <?php foreach ($listSanPham as $key => $sanPham) : ?>
    <div style="margin-top: 20px; width: 90%; margin-bottom:20px" class="product-item card">
    <div class="col-md-12 alert alert-warning">
                <h3>Giỏ hàng</h3>
            </div>
        <div class="form-row">
           
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-4">
                <a href="" style="text-align: center;"><div style="width: 500px; height:300px; background-image:url('<?= '.' . $sanPham['hinh_anh'] ?>'); background-repeat: no-repeat;  background-position: center; marign:auto 0px;"></div></a>
            </div>
            <div class="form-group col-md-6">
                <ul>
                    <li class="title"><a href=""><?= $sanPham['ten_san_pham']  ?></a></li>
                    <li class="text-justify"><?= $sanPham['mo_ta'] ?>
                    </li>
                    <li class="form-group row col-md-12">
    
                        <div class="form-group text-left col-md-5" style="text-decoration: line-through;" >
                            <p class="font-weight-bold ">Giá: <?= number_format($sanPham['gia_san_pham']) .'VNĐ' ?></p>
                        </div>
                        
                        <div class="form-group text-right col-md-7">
                            <p class=" text-danger font-weight-bold">Giá khuyến mãi: <?= number_formaT($sanPham['gia_khuyen_mai']) .'VNĐ' ?></p>
                        </div>
                        <div class="col-md-12">
                        <b>Số lượng : <?= $sanPham['so_luong'] ?></b>
                        </div>
                    </li>
                  
                
                        <div class="form-group col-md-12 row text-right">
                          
                            <div class="form-group col-md-2">
                                <a title="Chi tiết sản phẩm" href="<?= BASE_URL_CLIENT . '?act=chi-tiet-san-pham&id='.$sanPham['id_san_pham'] ?>"><button class="btn btn-primary"><i class="bi bi-eye-fill"></i></button></a>
                            </div>
                            <div class="form-group col-md-2">
                                <a title="Chi tiết sản phẩm" href="<?= BASE_URL_CLIENT . '?act=delete-gio-hang&id='.$sanPham['id'] ?>"><button onclick="confirm('Bạn có xác nhận xóa ?')" class="btn btn-warning"><i class="bi bi-trash3-fill"></i></button></a>
                            </div>

                            <div class="form-group col-md-3">
                                <a  href="<?= BASE_URL_CLIENT . '?act=dat-hang&san_pham_id=' . $sanPham['id_san_pham'] ?>"><button class="btn btn-danger">Mua ngay ></i></button></a>
                            </div>
                        </div>
                   
                </ul>
            </div>
        </div>
    </div>
    <?php endforeach ; ?>
    <?php } ?>
    
</div>
<!-- end content -->


<!-- footer -->
<?php require './views/layout/footer.php'; ?>