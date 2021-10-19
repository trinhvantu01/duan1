<!DOCTYPE html>
<html>

<body>
    <h3>QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
if(strlen($MESSAGE)){
    echo "<h5>$MESSAGE</h5>";
}
?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">MÃ KHÁCH HÀNG</label>
                <input name="ma_kh" class="form-control" readonly value="<?=$ma_kh?>" />
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">HỌ VÀ TÊN</label>
                <input name="ho_ten" class="form-control" value="<?=$ho_ten?>" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">MẬT KHẨU</label>
                <input name="mat_khau" class="form-control" readonly value="<?=$mat_khau?>" type="password" />
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">XÁC NHẬN MẬT KHẨU</label>
                <input name="mat_khau2" class="form-control" readonly value="<?=$mat_khau?>" type="password" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">ĐỊA CHỈ EMAIL</label>
                <input name="email" class="form-control" readonly value="<?=$email?>" />
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">HÌNH ẢNH</label>
                <input name="hinh" type="hidden" value="<?=$hinh?>">
                <input class="form-control" name="up_hinh" type="file"> (<?=$hinh?>)
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">MẬT KHẨU</label>
                <input name="mat_khau" class="form-control" readonly value="<?=$mat_khau?>" type="password" />
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">XÁC NHẬN MẬT KHẨU</label>
                <input name="mat_khau2" class="form-control" readonly value="<?=$mat_khau?>" type="password" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">KÍCH HOẠT?</label>
                <div class="form-check">
                    <input <?=!$kich_hoat?'checked':''?> name="kich_hoat" value="0" type="radio"
                        class="form-check-input" id="kich_hoat1">
                    <label class="form-check-label" for="kich_hoat1">Chưa kích hoạt</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input <?=$kich_hoat?'checked':''?> name="kich_hoat" value="1" type="radio" checked
                        class="form-check-input" id="kich_hoat2">
                    <label class="form-check-label" for="kich_hoat2">Kích hoạt</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">VAI TRÒ</label>
                <div class="form-check">
                    <input <?=!$vai_tro?'checked':''?> name="vai_tro" value="0" type="radio" lass="form-check-input"
                        id="vai_tro1">
                    <label class="form-check-label" for="vai_tro1">Khách hàng</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input <?=$vai_tro?'checked':''?> name="vai_tro" value="1" type="radio" hecked
                        class="form-check-input" id="vai_tro2">
                    <label class="form-check-label" for="vai_tro2">Nhân viên</label>
                </div>
            </div>
        </div>
        <div>
            <div>
                <button class="btn btn-primary" name="btn_update">Cập nhật</button>
                <button class="btn btn-success" type="reset">Nhập lại</button>
                <a class="btn btn-danger" href="index.php">Thêm mới</a>
                <a class="btn btn-warning href=" index.php?btn_list">Danh sách</a>
            </div>
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