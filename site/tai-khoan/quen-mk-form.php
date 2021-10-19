<head>
    <link rel="stylesheet" href="../../content/css/bootstrap.min.css">
</head>

<h3>QUÊN MẬT KHẨU</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="quen-mk.php" method="post">
    <div class="form-group">
        <label for="exampleInputPassword1"> Tên đăng nhập</label>
        <input type="text" name="ma_kh" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Địa chỉ email</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div>
        <button class="btn-primary" name="btn_forgot">Tìm lại mật khẩu</button>
    </div>
</form>