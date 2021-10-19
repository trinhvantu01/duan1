<?php
require "../../global.php";
require "../../dao/loai.php";

//--------------------------------//

//check_login();
extract($_REQUEST);
if(exist_param("btn_insert")) {
    //kiểm tra hợp lệ
    $err = []; //mạng lưu các thông tin báo lỗi
    if (strlen($ten_loai) < 5)
        $err[] = "Tên loại cần nhập ít nhất 5 ký tự ";

    if (strlen($ten_loai) > 50)
        $err[] = "Tên loại nhập nhiều nhất là 50 ký tự ";

    if (!empty($err)) {
        $MESSAGE = implode("<br>", $err); // nhập mạng lỗi thành chuỗi
        $VIEW_NAME = "loai-hang/new.php";
    } else // không có lỗi thì thực hiện câu lệnh try.
        {
        try {
            loai_insert($ten_loai);
            unset($ten_loai, $ma_loai);
            $MESSAGE = "Thêm mới thành công!";
            header('location: index.php?btn_list');
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
        }

    }
}
else if(exist_param("btn_update")){
    try {
        loai_update($ma_loai, $ten_loai);
        $MESSAGE = "Cập nhật thành công!";
        header('location: index.php?btn_list');
    }
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!".$exc ->getMessage();
    }
    $VIEW_NAME = "loai-hang/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        loai_delete($ma_loai);
        $items = loai_select_all();
        $MESSAGE = "Xóa thành công!";
    }
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "loai-hang/list.php";
}
else if(exist_param("btn_edit")){
    $item = loai_select_by_id($ma_loai);
    extract($item);
    $VIEW_NAME = "loai-hang/edit.php";
}
else if(exist_param("btn_list")){
    $items = loai_select_all();
    $VIEW_NAME = "loai-hang/list.php";
}
else{
    $VIEW_NAME = "loai-hang/new.php";
}

require "../layout.php";