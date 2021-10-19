<?php
require '../../global.php';

if (isset($_SESSION['user'])) {
    require '../layout/dang-nhap-info.php';
} else {
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
    require '../layout/dang-nhap-form.php';
}
