<head>
    <link rel="stylesheet" href="../../content/css/bootstrap.min.css">
</head>

<h3>ĐĂNG KÝ THÀNH VIÊN</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="dang-ky.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputPassword1"> Tên đăng nhập</label>
        <input type="text" name="ma_kh" value="<?= $ma_kh ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Mật khẩu</label>
        <input type="password" name="mat_khau" value="<?= $mat_khau ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Xác nhận mật khẩu</label>
        <input type="password" name="mat_khau2" value="<?= $mat_khau ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Họ và tên </label>
        <input type="text" name="ho_ten" value="<?= $ho_ten ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Địa chỉ email</label>
        <input type="text" name="email" value="<?= $email ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Số Điện Thoại</label>
        <input type="text" name="sdt" value="<?= $sdt ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Hình</label>
        <input type="file" name="up_hinh" class="form-control">
    </div>
    <div>
        <button class="btn btn-primary" name="btn_register">Đăng ký</button>
    </div>
    <!--Giá trị mặc định-->
    <input name="vai_tro" value="0" type="hidden">
    <input name="kich_hoat" value="0" type="hidden">
</form>