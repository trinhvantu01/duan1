<div class="list-group mt-20">
    <div class="list-group-item active">DANH MỤC</div>
    <div>
        <?php
        require '../../dao/loai.php';
        $loai_array = loai_select_all();
        foreach ($loai_array as $loai) {
            $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
            echo "<a class=\"list-group-item\" href='$href'>$loai[ten_loai]</a>";
        }
        ?>
    </div>
    <div class="list-group-item list-group-item-secondary">
        <form action="<?= $SITE_URL ?>/hang-hoa/liet-ke.php">
            <input name="keywords" placeholder="Từ khóa tìm kiếm">
        </form>
    </div>
</div>