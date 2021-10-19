<!DOCTYPE html>
<html>

<head>
    <script src="<?=$ADMIN_URL?>/assets/js/xshop-list.js"></script>
    <link rel="stylesheet" href="../../assets/css.css/bootstrap.min.css">
</head>

<body>
    <h3>QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
if(strlen($MESSAGE)){
    echo "<h5>$MESSAGE</h5>";
}
?>
    <form action="index.php" method="post">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th>MÃ KH</th>
                    <th>HỌ VÀ TÊN</th>
                    <th>ĐỊA CHỈ EMAIL</th>
                    <th>HÌNH ẢNH</th>
                    <th>VAI TRÒ?</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach ($items as $item){
            extract($item);
            ?>
                <tr>
                    <th><input type="checkbox" name="ma_kh[]" value="<?=$ma_kh?>"></th>
                    <td><?=$ma_kh?></td>
                    <td><?=$ho_ten?></td>
                    <td><?=$email?></td>
                    <td><img src="<?=$CONTENT_URL?>/images/users/<?=$hinh ?>" width="70px" height="70px"></td>
                    <td><?=$vai_tro?'Nhân viên':'Khách hàng'?></td>
                    <td>
                        <a class="btn btn-outline-secondary" href="index.php?btn_edit&ma_kh=<?=$ma_kh?>">Sửa</a>
                        <a class="btn btn-outline-secondary" href="index.php?btn_delete&ma_kh=<?=$ma_kh?>">Xóa</a>
                    </td>
                </tr>
                <?php
        }
        ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7">
                        <button class="btn btn-secondary" id="check-all" type="button">Chọn tất cả</button>
                        <button class="btn btn-secondary" id="clear-all" type="button">Bỏ chọn tất cả</button>
                        <button class="btn btn-secondary" id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                        <a class="btn btn-primary" href="index.php">Nhập thêm</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>