<div class="row mt-20">
    <?php
    foreach ($items as $item) {
        extract($item);
    ?>
        <div class="col-sm-4">
            <div class="card bg-light mb-4">
                <div class="card-body">
                    <a href="chi-tiet.php?ma_hh=<?= $ma_hh ?>">
                        <img style="width: 285px ; height: 225px" class="img-fluid" src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>">
                    </a>
                    <a href=""><?= $ten_hh ?></a>
                    <h5 class="card-title">$<?= number_format($don_gia, 2) ?></h5>
                </div>
            </div>
        </div>




        <!--        <div>-->
        <!--            <div>-->
        <!--                <a href="chi-tiet.php?ma_hh=-->
        <? //=$ma_hh
        ?>
        <!--">-->
        <!--                    <img src="-->
        <? //=$CONTENT_URL
        ?>
        <!--/images/products/-->
        <? //=$hinh
        ?>
        <!--">-->
        <!--                </a>-->
        <!--                <div>-->
        <!--                    <h3>$-->
        <? //=number_format($don_gia, 2)
        ?>
        <!--</h3>-->
        <!--                    <p>-->
        <? //=$ten_hh
        ?>
        <!--</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    <?php
    }
    ?>
</div>