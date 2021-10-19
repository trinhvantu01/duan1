<html>

<body>
    <h3>QUẢN LÝ HÀNG HÓA</h3>
    <?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">MÃ HÀNG HÓA</label>
                <input name="ma_hh" class="form-control" value="auto number" readonly id="exampleInputEmail1"
                    aria-describedby="emailHelp" />
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">TÊN HÀNG HÓA</label>
                <input type="text" name="ten_hh" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">ĐƠN GIÁ</label>
                <input type="text" name="don_gia" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputPassword4">GIẢM GIÁ</label>
                <input type="text" name="giam_gia" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">HÌNH ẢNH</label>
                <input type="file" name="hinh" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">LOẠI HÀNG</label>
                <select name="ma_loai" class="form-control">
                    <?php
                foreach ($loai_select_list as $loai) {
                    echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                }
                ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">HÀNG ĐẶC BIỆT?</label>
                <div class="form-check">
                    <input name="dac_biet" value="0" type="radio" class="form-check-input" id="kich_hoat1">
                    <label class="form-check-label" for="kich_hoat1">Đặc biệt</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="dac_biet" value="1" type="radio" checked class="form-check-input" id="kich_hoat2">
                    <label class="form-check-label" for="kich_hoat2">Bình thường</label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">NGÀY NHẬP</label>
                <input type="text" name="ngay_nhap" class="form-control">
                <?php if (!empty($ngay_nhap_error)) : ?>
                <div class="alert alert-danger text-center mt-3" role="alert">
                    <?= $ngay_nhap_error ?>
                </div>
                <?php endif ?>
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">SỐ LƯỢC XEM</label>
                <input type="text" name="so_luot_xem" class="form-control" readonly value="0">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">MÔ TẢ</label>
            <textarea class="form-control" name="mo_ta" rows="4"></textarea>
        </div>
        <div>
            <button class="btn btn-primary" name="btn_insert">Thêm mới</button>
            <button class="btn btn-success" type="reset">Nhập lại</button>
            <a class="btn btn-warning" href="index.php?btn_list  ">Danh sách</a>
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