<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
$show_category_trangchu = show_all_category();            
             
include 'header.php';
 
include '../global.php';
include '../model/sanpham.php';
include '../model/color.php';
include '../model/size.php';


$sanpham_trangchu_Nam = show_all_sp_trangchu_Nam();
$sanpham_trangchu_Tre_em = show_all_sp_trangchu_Tre_em();

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        
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

        case 'chitiet_sanpham':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    // $id_sanpham=$_GET['id'];
                    //   $ma_hang=$_GET['id'];
                    $show_sanpham_chitiet = show_one_product($_GET['id']);
                    extract($show_sanpham_chitiet);
                    $show_sanpham_cungloai =show_san_pham_cung_loai($id_category);
                    $list_size = show_size();
                    $list_color = show_color();
                   
                     include 'chitietsanpham.php';
                }else{
                    include 'slide_show.php';
                    include 'trangchu.php'; 
                }
                
                break;

                case 'search':
                    if( isset($_POST['btn_search']) && $_POST['btn_search'] ){
                        $search = $_POST['search'];
                     
                    }else{
                       $search = "";
                    }
                    $product = search_product($search);
                    include 'timkiemsanpham.php';
                    break;

                    case 'dangky':
                        
                        include 'dangky.php';
                        break;

                        case 'dangnhap':
                        
                            include 'dangnhap.php';
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