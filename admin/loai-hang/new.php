<html>

<body>
    <h3>QUẢN LÝ LOẠI HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Mã Loại</label>
            <input type="email" name="ma_loai" value="auto number" readonly class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" />
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"> Tên Loại </label>
            <input type="text" name="ten_loai" class="form-control">
        </div>
        <div>
            <button class="btn btn-primary" name="btn_insert">Thêm mới</button>
            <button class="btn btn-success" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="index.php?btn_list">Danh sách</a>
        </div>
    </form>
</body>

</html>