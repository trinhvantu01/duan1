<!DOCTYPE html>
<html>

<body>
    <h3>QUẢN LÝ LOẠI HÀNG</h3>
    <?php
if(strlen($MESSAGE)){
    echo "<h5>$MESSAGE</h5>";
}
?>
    <form action="index.php" method="post">
        <div>
            <label>Mã loại</label>
            <input name="ma_loai" value="<?php echo $ma_loai; ?>" readonly>
        </div>

        <div>
            <label>Tên loại</label>
            <input name="ten_loai" value="<?php echo $ten_loai; ?>">
        </div>
        <div>
            <button class="btn btn-primary" name="btn_update">Cập nhật</button>
            <button class="btn btn-success" type="reset">Nhập lại</button>
            <a class="btn btn-warning href=" index.php?btn_list>Danh sách</a>
        </div>
    </form>
</body>

</html>