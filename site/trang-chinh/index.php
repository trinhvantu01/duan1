<?php

require '../../global.php';
require '../../dao/hang-hoa.php';
require '../../dao/pdo.php';
if (exist_param("gioi-thieu")) {
    $VIEW_NAME = "trang-chinh/gioi-thieu.php";
} else if (exist_param("lien-he")) {
    $VIEW_NAME = "trang-chinh/lien-he.php";
} else if (exist_param("gop-y")) {
    $VIEW_NAME = "trang-chinh/gop-y.php";
} else if (exist_param("hoi-dap")) {
    $VIEW_NAME = "trang-chinh/hoi-dap.php";
} else {
    require '../../dao/hang-hoa.php';
    $items = hang_hoa_select_all();
    exist_param($items);
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}

require '../layout.php';
