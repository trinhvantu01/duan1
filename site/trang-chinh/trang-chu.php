<div class="container">
    <div class="section-header">
        <h2>Sản Phẩm Mới Nhất</h2>
    </div>
    <div class="row">
        <?php
        foreach ($items as $item) {
            extract($item);
            var_dump($item);
        ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <img style="height: 250px" class="img-fluid" src="<?= $CONTENT_URL ?>/images/products/<?= $item['hinh'] ?>" />
                    </div>
                    <h3 class="card-title"><?= $item['ten_hh']; ?></h3>
                    <h5><?= $item['don_gia']; ?></h5>
                    <h4><?= $item['giam_gia']; ?></h4>
                    <a class="btn" href="http://localhost/du-an-mau/site/detail.php">Xem Thêm</a>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="col-lg-4 col-md-6">
        </div>
    </div>
</div>