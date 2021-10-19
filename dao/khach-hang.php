<?php
include  'pdo.php';
function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro)
{
    $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email,sdt, hinh, kich_hoat, vai_tro) VALUES (?, ?, ?, ?,?, ?, ?, ?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro);
}
function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro)
{
    $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,sdt=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro, $ma_kh);
}
function khach_hang_delete($ma_kh)
{
    $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}
function khach_hang_select_all()
{
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}
function khach_hang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
function khach_hang_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE  ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}
function khach_hang_select_by_role($vai_tro)
{
    $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}
function khach_hang_change_password($ma_kh, $mat_khau_moi)
{
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}

function check_email($email)
{
    $flag = false;
    $subject = $email;
    $patten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (preg_match($patten, $subject, $matches) == 1) {
        $flag = true;
    }
    return $flag;
}
function check_ma_kh($ma_kh)
{
    $flag = false;
    $subject = $ma_kh;
    $patten = "/^[A-Za-z0-9_]+$/";
    if (preg_match($patten, $subject, $matches) == 1) {
        $flag = true;
    }
    return $flag;
}
function check_ho_ten($ho_ten)
{
    $flag = false;
    $subject = $ho_ten;
    $patten = "/^[A-Za-z\s]+$/";
    if (preg_match($patten, $subject, $matches) == 1) {
        $flag = true;
    }
    return $flag;
}
function check_so_dt($sdt)
{
    $flag = false;
    $subject = $sdt;
    $patten = "/^0(32|33|34|35|36|37|38|39|56|58|59|70|76|77|78|79|81|82|83|84|85|86|88|89|90|91|92|93|94|96|97|98|99)[0-9]{7}+$/";
    if (preg_match($patten, $subject, $matches) == 1) {
        $flag = true;
    }
    return $flag;
}
