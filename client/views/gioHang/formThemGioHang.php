<?php
require './views/layout/header.php';
require './views/layout/navbar.php';


?>
<!-- navbar -->



<!-- main content -->



<div class="products card " sytle="width: 90%; margin:20px; ">
   
    <div style="margin-top: 20px; width: 90%; margin-bottom:20px" class="product-item card">
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
                            <p class="font-weight-bold ">Giá: <?= number_format($sanPham['gia_san_pham']) .'vnđ' ?></p>
                        </div>
                        
                        <div class="form-group text-right col-md-7">
                            <p class=" text-danger font-weight-bold">Giá khuyến mãi: <?= number_formaT($sanPham['gia_khuyen_mai']) .'vnđ' ?></p>
                        </div>
                    </li>
                
                        <div class="form-group col-md-12 row text-right">
                            <form action="<?= BASE_URL_CLIENT . '?act=post-them-gio-hang' ?>" method="POST" class="form-group row">
                                <input type="text" name="tai_khoan_id" value="<?= $tai_khoan_id['id'] ?>" hidden>
                                <input type="text" name="san_pham_id" value="<?= $sanPham['id'] ?>" hidden>
                                <label for="">Số lượng:</label>
                                <select style="height: 30px; width:100px;" name="so_luong">
                                <?php for($i=1 ; $i <= $sanPham['so_luong']; $i++): ?>
                                    <option value="<?= $i ?>"> <?= $i ?></option>
                                    <?php endfor ; ?>
                                </select>
                                
                                 <div class="form-group col-md-2">
                                   <button type="submit" title="Thêm vào giỏ hàng" class="btn btn-warning"><i class="bi bi-cart-plus-fill"></i></button>
                                 </div>
                            </form>
                            
                            
                        </div>
                   
                </ul>
            </div>
        </div>
    </div>
  
    
</div>
<!-- end content -->


<!-- footer -->
<?php require './views/layout/footer.php'; ?>