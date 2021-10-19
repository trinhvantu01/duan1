<?php
//1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
<?php   
require '../../global.php';
require '../../dao/khach-hang.php';
require '../sendmail-sendgrid/vendor/autoload.php';
extract($_REQUEST);
$VIEW_NAME = "tai-khoan/quen-mk-form.php";
if (exist_param("btn_forgot")) {
    $user = khach_hang_select_by_id($ma_kh);
    if ($user) {
        if ($user['email'] != $email) {
            $MESSAGE = "Sai địa chỉ email!";
        } else {
            $SENDGRID_API_KEY = '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';
            $emaill = new \SendGrid\Mail\Mail();
            $emaill->setFrom("tutvph11552@fpt.edu.vn", "Trịnh Văn Tú");
            $emaill->setSubject("Quên mật khẩu!");
            $emaill->addTo($email);
            $emaill->addContent(
                "text/html",
                "Mật khẩu của bạn là :" . $user['mat_khau']
            );
            $sendgrid = new \SendGrid($SENDGRID_API_KEY);
            try {
                $response = $sendgrid->send($emaill);
            } catch (Exception $e) {
                echo 'Caught exception: ' . $e->getMessage() . "\n";
            }
            // $MESSAGE = "Mật khẩu của bạn là: " . $user['mat_khau'];
            $VIEW_NAME = "tai-khoan/dang-nhap-form.php";
            global $ma_kh, $mat_khau;
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
    }
}
require '../layout.php';