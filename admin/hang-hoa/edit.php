<!DOCTYPE html>
<html>

<body>
    <h3>QUẢN LÝ HÀNG HÓA</h3>
    <?php
if(strlen($MESSAGE)){
    echo "<h5>$MESSAGE</h5>";
}
?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">MÃ HÀNG HÓA</label>
                <input name="ma_hh" class="form-control" readonly value="<?=$ma_hh?>" />
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">TÊN HÀNG HÓA</label>
                <input name="ten_hh" class="form-control" value="<?=$ten_hh?>" />
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">ĐƠN GIÁ</label>
                <input name="don_gia" class="form-control" value="<?=$don_gia?>" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputPassword4">GIẢM GIÁ</label>
                <input name="giam_gia" class="form-control" value="<?=$ten_hh?>" />
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">HÌNH ẢNH</label>
                <input name="up_hinh" type="file">-->
                <input name="hinh" type="hidden" value="<?=$hinh?>"> (<?=$hinh?>)

            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">LOẠI HÀNG</label>
                <select name="ma_loai" class="form-control">
                    <?php
                    foreach ($loai_select_list as $loai) {
                        if($loai['ma_loai'] == $ma_loai){
                            echo '<option selected value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                        }
                        else{
                            echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                        }
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">HÀNG ĐẶC BIỆT?</label>
                <div class="form-check">
                    <label><input class="form-check-input" name="dac_biet" value="0" type="radio"
                            <?=$dac_biet?'':'checked'?>>Đặc biệt</label>
                    <label><input class="form-check-label" name="dac_biet" value="1" type="radio"
                            <?=$dac_biet?'checked':''?>>Bình thường</label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">NGÀY NHẬP</label>
                <input name="ngay_nhap" class="form-control" value="<?=$ngay_nhap?>">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">SỐ LƯỢC XEM</label>
                <input name="so_luot_xem" class="form-control" readonly value="0" value="<?=$so_luot_xem?>">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">MÔ TẢ</label>
            <textarea name="mo_ta" class="form-control" rows="4"> <?=$mo_ta?></textarea>
        </div>
        <div>
            <button class="btn" name="btn_update">Cập nhật</button>
            <button class="btn" type="reset">Nhập lại</button>
            <a class="btn btn-secondary" href="index.php?btn_list">Danh sách</a>
        </div>
    </form>
</body>
<style>
.form-check {
    border: 1px solid #ced4da;
    padding: .375rem .75rem;
    border-radius: .25rem;
}

.form-check-input {
    margin-left: 0px !important;
}

.form-check-label {
    margin-left: 25px;
}
</style>

</html>