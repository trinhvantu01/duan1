<?php
require "../../global.php";
require "../../dao/hang-hoa.php";
//--------------------------------//
require "../../dao/pdo.php";
require "../../dao/loai.php";

//check_login();

extract($_REQUEST);

$regex_ngay_nhap = '/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/';

if (exist_param("btn_insert")) {
    $up_hinh = save_file("hinh", "$IMAGE_DIR/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'product.png';
    if (!preg_match($regex_ngay_nhap, $ngay_nhap)) {
        $ngay_nhap_error = "Ngày tháng nhập không hợp lệ!!!!";
    }
    if (!isset($ngay_nhap_error)) {
        try {
            hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
            unset($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
        }
    }
    $VIEW_NAME = "hang-hoa/new.php";
} else if (exist_param("btn_update")) {
    $up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    try {
        hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        $MESSAGE = "Cập nhật thành công!";
        header('location: index.php?btn_list');
    } catch (Exception $exc) {
        echo $exc->getMessage();
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "hang-hoa/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        hang_hoa_delete($ma_hh);
        $items = hang_hoa_select_page();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        echo $exc->getMessage();
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "hang-hoa/list.php";
    //    header('location: index.php?btn_list');
} else if (exist_param("btn_edit")) {
    $item = hang_hoa_select_by_id($ma_hh);
    extract($item);
    $VIEW_NAME = "hang-hoa/edit.php";
} else if (exist_param("btn_list")) {
    $items = hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/list.php";
} else {
    $VIEW_NAME = "hang-hoa/new.php";
}

if ($VIEW_NAME == "hang-hoa/new.php" || $VIEW_NAME == "hang-hoa/edit.php") {
    $loai_select_list = loai_select_all();
}

require "../layout.php";