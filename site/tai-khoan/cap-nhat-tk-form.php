<head>
    <link rel="stylesheet" href="../../content/css/bootstrap.min.css">
</head>
<h3>CẬP NHẬT TÀI KHOẢN</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
    <div>
        <div>
            <img src="<?= $CONTENT_URL ?>/images/users/<?= $hinh ?>" style="max-width: 95%">
        </div>
        <div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Tên đăng nhập</label>
                <input type="text" name="ma_kh" value="<?= $ma_kh ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Họ và tên</label>
                <input type="text" name="ho_ten" value="<?= $ho_ten ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Địa chỉ email</label>
                <input type="text" name="email" value="<?= $email ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hình</label>
                <input type="file" name="up_hinh" class="form-control">
            </div>

            <div>
                <button class="btn btn-primary" name="btn_update">Cập nhật</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
            <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
            <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
            <input name="hinh" value="<?= $hinh ?>" type="hidden">
        </div>
    </div>
</form>