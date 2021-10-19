<?php
require '../../global.php';
require '../../dao/khach-hang.php';


extract($_REQUEST);
if (exist_param("btn_register")) {
    $checkEmail = check_email($email);
    if (strlen($ma_kh) < 5) {
        $MESSAGE = "Mã KH tối thiểu 5 kí tự";
    } else if (strlen($ma_kh) > 30) {
        $MESSAGE = "Mã KH max 30 kí tự";
    } else if (!check_ma_kh($ma_kh)) {
        $MESSAGE = "Mã của bạn chỉ gồm chữ cái,số,dấu gạch dưới!!!";
    } else if (strlen($mat_khau) < 6) {
        $MESSAGE = "Mật khẩu tối thiểu 6 kí tự";
    } else if ($mat_khau != $mat_khau2) {
        $MESSAGE = "Xác nhận mật khẩu sai! Nhập lại !";
    } else if (khach_hang_exist($ma_kh)) {
        $MESSAGE = "Mã này đã được sử dụng!";
    } else if ($checkEmail == false) {
        $MESSAGE = "Mail của bạn không đúng định dạng";
    } else if (!check_ma_kh($ho_ten)) {
        $MESSAGE = "Họ tên của bạn chỉ gồm chữ cái , dấu gạch dưới và số";
    } else if (!check_so_dt($sdt)) {
        $MESSAGE = "Số điện thoại của bạn không đúng định dạng";
    } else {
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name ? $file_name : "user.png";
        $err = [];
        $imageFileType = pathinfo($hinh, PATHINFO_EXTENSION);;
        $maxfilesize = 1500000;
        if ($_FILES["up_hinh"]["size"] > $maxfilesize) {
            $err[] = "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
            $allowUpload = false;
        }
        $allowtypes = array('jpg', 'png', 'bmp');
        if (!in_array($imageFileType, $allowtypes)) {
            $err[] = "Chỉ được upload các định dạng 'jpg', 'png', 'bmp'";
            $allowUpload = false;
        }
        if (!empty($err)) {
            $MESSAGE = implode("<br>", $err);
        } else   try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro);
            unset($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
}

global $ma_kh, $mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro, $mat_khau2;

require '../layout/menu.php';
include("./dang-ky-form.php");
require '../layout/footer.php';
