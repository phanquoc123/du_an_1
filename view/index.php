<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
$show_category_trangchu = show_all_category();            
             
include 'header.php';
 
include '../global.php';
include '../model/sanpham.php';

$sanpham_trangchu_Nam = show_all_sp_trangchu_Nam();
$sanpham_trangchu_Tre_em = show_all_sp_trangchu_Tre_em();

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'chitiet_sanpham':
            include 'chitietsanpham.php';
            break;
        case 'sanpham_tungloai':
            if(isset($_GET['id']) && ($_GET['id']) ){
                   $id_category = $_GET['id'];
                   $sanpham_theo_danhmuc = sanpham_theo_danhmuc($id_category);
                   include 'sanphamtheoloai.php';
            }else{
                include 'slide_show.php';
                include 'trangchu.php'; 
            }
            
            break;


       default:
       include 'slide_show.php';
       include 'trangchu.php';
     break;      
    }
   
}else{
    include 'slide_show.php';
    include 'trangchu.php';

}

include 'footer.php';

?>