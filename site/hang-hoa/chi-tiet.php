<?php

require '../../global.php';
require '../../dao/hang-hoa.php';
require '../../dao/pdo.php';
//-------------------------------//

extract($_REQUEST);

// Truy vấn mặt hàng theo mã
$hang_hoa = hang_hoa_select_by_id($ma_hh);
extract($hang_hoa);

// Tăng số lượt xem lên 1
hang_hoa_tang_so_luot_xem($ma_hh);

$VIEW_NAME = "hang-hoa/chi-tiet-ui.php";
require '../layout.php';
