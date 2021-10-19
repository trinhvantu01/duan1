<h3>ĐĂNG NHẬP</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="dang-nhap.php" method="post">
    <div class="form-group">
        <label for="exampleInputPassword1"> Tên đăng nhập</label>
        <input type="text" name="ma_kh" value="<?= $ma_kh ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mật khẩu</label>
        <input type="password" name="mat_khau" value="<?= $mat_khau ?>" class="form-control">
    </div>
    <div>
        <label>
            <input name="ghi_nho" type="checkbox" checked>
            Ghi nhớ tài khoản?
        </label>
    </div>
    <div>
        <button class="btn btn-primary" name="btn_login">Đăng nhập</button>
    </div>
</form>