<head>
    <link rel="stylesheet" href="../../content/css/bootstrap.min.css">
</head>
<h3>ĐỔI MẬT KHẨU</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
// boc tach du lieu cua mot mang, dung key lam ten bien va gan gia tri vao bien.
//extract($_SESSION['user']);
$ma_kh = $_SESSION['user']['ma_kh'];
?>
<form action="doi-mk.php" method="post" id="form_doi_mk">
    <div class="form-group">
        <label for="exampleInputPassword1"> Tên đăng nhập</label>
        <input type="text" value="<?php echo $ma_kh; ?>" name="ma_kh" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mật khẩu cũ</label>
        <input type="password" name="mat_khau" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mật khẩu mới</label>
        <input type="password" name="mat_khau2" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Xác nhận mật khẩu mới</label>
        <input type="password" name="mat_khau3" class="form-control">
    </div>
</form>
<div>
    <button onclick="validateForm()" class="btn btn-primary" name="btn_change">Đổi mật khẩu</button>
</div>

<script type="text/javascript">
    function validateForm() {
        var mk_cu = document.getElementsByName("mat_khau")[0].value;
        if (mk_cu === undefined || mk_cu === '') {
            alert("Ban chua nhap mat khau cu");
            return false;
        }
        var mat_khau2 = document.getElementsByName("mat_khau2")[0].value;
        var mat_khau3 = document.getElementsByName("mat_khau3")[0].value;
        if (mat_khau2 != mat_khau3) {
            alert("Ban nhap mat khau khong trung khop");
            return false;
        }
        document.getElementById("form_doi_mk").submit();
    }
</script>