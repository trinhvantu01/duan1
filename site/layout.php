<?php
require '../global.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>XXShop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?= $CONTENT_URL ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php require 'layout/menu.php'; ?>
        <?php require 'layout/slide.php'; ?>
        <?php require 'layout/top.php'; ?>


        <!-- Service Start -->
        <div class="service">
            <?php require 'trang-chinh/trang-chu.php'; ?>
            <!-- Service End -->


            <!-- Sản Phẩm Giá -->
            <?php require 'layout/san-pham-sale.php'; ?>
            <!-- And Sản Phẩm Giá -->

            <!-- Tốp 10 sp yêu thích -->

            <!-- top 10 End -->

            <!-- From liên hệ -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Liên Hệ Với Chúng Tôi</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Gửi</button>
                    </div>
                </div>
            </div>
            <!--End from liên hệ -->

            <!--Footer -->
            <?php require 'layout/footer.php'; ?>
            <!--End Footer-->
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>