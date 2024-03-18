<?php
include 'header.php';
include '../model/pdo.php';
include '../model/danhmuc.php';


if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'list_danhmuc':
            $list_category = show_all_category();
            include 'danhmuc/list.php';
            
            break;
            case 'add_danhmuc':
                if(isset($_POST['btn_submit']) && $_POST['btn_submit']){
                    $name_category = $_POST['name_category'];
    

                    if($name_category!=""){
                        add_category($name_category);
                        $thongbao = "Thêm thành công";
                    }else{
                        $thongbao_loi ="Không được để trống";
                    }
                }
                include 'danhmuc/add.php';
                break;
            case 'sua_danhmuc':
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                    $list_one_category = show_one_category($_GET['id']);
                }
                
                include 'danhmuc/update.php';
                break; 

            case 'update_danhmuc':
                if(isset($_POST['btn_submit']) && ($_POST['btn_submit'])){
                    $id_category = $_POST['id_category'];
                    $name_category = $_POST['name_category'];
                    update_category($id_category,$name_category);
                    // if($name_category!=""){
                        
                    // }else{
                    //     $thongbao_loi = "Không được để trống";
                    // }
                   
                   
                }
                $list_category = show_all_category();
                include 'danhmuc/list.php';
                break;

            case 'delete_danhmuc':
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                    delete_category($_GET['id']);
                }
                $list_category = show_all_category();
                include 'danhmuc/list.php';
                break;
    }
}else{
   include 'main.php'; 
}
include 'footer.php';
?>