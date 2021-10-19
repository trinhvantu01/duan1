<!DOCTYPE html>
<html>

<head>
    <script src="<?=$ADMIN_URL?>/assets/js/xshop-list.js"></script>
    <link rel="stylesheet" href="../../assets/css.css/bootstrap.min.css">
</head>

<body>
    <h3>CHI TIẾT BÌNH LUẬN</h3>
    <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
    <form action="index.php?ma_hh=<?=$ma_hh?>" method="post">
        <h3>HÀNG HÓA: <?=$items[0]['ten_hh']?></h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th>NỘI DUNG</th>
                    <th>NGÀY BL</th>
                    <th>NGƯỜI BL</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                <tr>
                    <th><input type="checkbox" name="ma_bl[]" value="<?=$ma_bl?>"></th>
                    <td><?=$noi_dung?></td>
                    <td><?=$ngay_bl?></td>
                    <td><?=$ma_kh?></td>
                    <td>
                        <a class="btn btn-outline-secondary"
                            href="index.php?btn_delete&ma_bl=<?=$ma_bl?>&ma_hh=<?=$ma_hh?>">Xóa</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <button class="btn btn-secondary" id="check-all" type="button">Chọn tất cả</button>
                        <button class="btn btn-secondary" id="clear-all" type="button">Bỏ chọn tất cả</button>
                        <button class="btn btn-secondary" id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>