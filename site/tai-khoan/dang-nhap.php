<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);
$base_url = get_base_url();
if (!empty($_SESSION["user"])) {
    header("location: " . $base_url);
}

if (exist_param("btn_login")) {
    $user = khach_hang_select_by_id($ma_kh);
    if (strlen($ma_kh) < 5) {
        $MESSAGE = "Mã KH tối thiểu 5 kí tự";
    } else if (strlen($ma_kh) > 30) {
        $MESSAGE = "Mã KH max 30 kí tự";
    } else if (!check_ma_kh($ma_kh)) {
        $MESSAGE = "Mã của bạn chỉ gồm chữ cái , dấu gạch dưới và số";
    } else if ($user) {
        if ($user['mat_khau'] == $mat_khau) {
            $MESSAGE = "Đăng nhập thành công!";

            if (exist_param("ghi_nho")) {
                add_cookie("ma_kh", $ma_kh, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            } else {
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            $_SESSION["user"] = $user;
            header("location: " . $base_url);
            if (isset($_SESSION['request_uri'])) {
                header("location: " . $_SESSION['request_uri']);
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
        }
    } else {
        $MESSAGE = "Sai mã đăng nhập!";
    }
} else {
    if (exist_param("btn_logoff")) {
        session_unset();
    }
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
    header("location: " . $base_url);
}

$VIEW_NAME = "tai-khoan/dang-nhap-form.php";
require '../layout.php';
