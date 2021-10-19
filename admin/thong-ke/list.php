<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../../assets/css.css/bootstrap.min.css">

<body>
    <h3>THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>LOẠI HÀNG</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item){
                    extract($item);
            ?>
            <tr>
                <td><?=$ten_loai?></td>
                <td><?=$so_luong?></td>
                <td>$<?=number_format($gia_min)?></td>
                <td>$<?=number_format($gia_max)?></td>
                <td>$<?=number_format($gia_avg)?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a class="btn btn-outline-secondary" href="index.php?chart">Xem biểu đồ</a>
</body>

</html>