<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../assets/css.css/bootstrap.min.css">
</head>

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
                <input type="text" name="ma_kh" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">HỌ VÀ TÊN</label>
                <input type="text" name="ho_ten" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">MẬT KHẨU</label>
                <input type="password" name="mat_khau" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">XÁC NHẬN MẬT KHẨU</label>
                <input type="password" name="mat_khau2" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">ĐỊA CHỈ EMAIL</label>
                <input type="text" name="email" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">HÌNH ẢNH</label>
                <input type="file" name="hinh" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">KÍCH HOẠT?</label>
                <div class="form-check">
                    <input name="kich_hoat" value="0" type="radio" class="form-check-input" id="kich_hoat1">
                    <label class="form-check-label" for="kich_hoat1">Chưa kích hoạt</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="kich_hoat" value="1" type="radio" checked class="form-check-input" id="kich_hoat2">
                    <label class="form-check-label" for="kich_hoat2">Kích hoạt</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">VAI TRÒ</label>
                <div class="form-check">
                    <input name="vai_tro" value="0" type="radio" class="form-check-input" id="vai_tro1">
                    <label class="form-check-label" for="vai_tro1">Khách hàng</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="vai_tro" value="1" type="radio" checked class="form-check-input" id="vai_tro2">
                    <label class="form-check-label" for="vai_tro2">Nhân viên</label>
                </div>
            </div>
        </div>
        <div>
            <div>
                <button name="btn_insert" class="btn">Thêm mới</button>
                <button type="reset" class="btn"> Nhập lại</button>
                <a class="btn btn-primary" href="index.php?btn_list">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>

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