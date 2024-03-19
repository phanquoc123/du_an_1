<?php
include 'header.php';


if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'chitiet_sanpham':
            include 'chitietsanpham.php';
            break;
        case 'sanpham_tungloai':
            include 'sanphamtheoloai.php';
            break;
    }
}else{
    include 'slide_show.php';
    include 'trangchu.php';

}

include 'footer.php';

?>