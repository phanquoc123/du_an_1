<?php
include 'header.php';
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/size.php';
include '../model/color.php';



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
 //////////////////// HỂT PHẦN DANH MỤC ////////////////////
 /////////////////// MÀU /////////////////////////////
 case 'list_color':
    $list_color = show_color();
    include 'color/list.php';
    
    break;
    case 'add_color':
        if(isset($_POST['btn_submit']) && $_POST['btn_submit']){
             $image_color = $_FILES['image_color']['name'];
             $targer_dir = "../upload/";
            $targer_file = $targer_dir . basename($_FILES["image_color"]["name"]);
             if (move_uploaded_file($_FILES["image_color"]["tmp_name"],$targer_file)) {
             // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
           } else {
           // echo "Sorry, there was an error uploading your file.";
      }
           add_color($image_color);
        }
        include 'color/add.php';
        break;
    case 'sua_color':
        if(isset($_GET['id']) && ($_GET['id']) > 0){
            $list_one_color  = show_one_color($_GET['id']);
        }
        
        include 'color/update.php';
        break; 

    case 'update_color':
        if(isset($_POST['btn_submit']) && ($_POST['btn_submit'])){
            $id_color = $_POST['id_color'];
            $image_color = $_FILES['image_color']['name'];
             $targer_dir = "../upload/";
            $targer_file = $targer_dir . basename($_FILES["image_color"]["name"]);
             if (move_uploaded_file($_FILES["image_color"]["tmp_name"],$targer_file)) {
             // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
           } else {
           // echo "Sorry, there was an error uploading your file.";
      }
      update_color($image_color,$id_color);

        }
        $list_color = show_color();
        include 'color/list.php';
        break;

    case 'delete_color':
        if(isset($_GET['id']) && ($_GET['id']) > 0){
            delete_color($_GET['id']);
        }
        $list_color = show_color();
        include 'color/list.php';
        break;
 /////////////// HẾT MÀU //////////////////////
 ///// SIZE //////////////
 case 'list_size':
    $list_size = show_size();
    include 'size/list.php';
    
    break;

    case 'delete_size':
        if(isset($_GET['id']) && ($_GET['id']) > 0){
            delete_size($_GET['id']);
        }
        $list_size = show_size();
        include 'size/list.php';
        break;

 /////////////////// PHẦN SẢN PHẨM //////////////////
             case 'list_sanpham':
                $list_product = show_all_product();
                include 'sanpham/list.php';
                break;
                case 'add_sanpham':
                    $error =[];
                    if(isset($_POST['btn_submit']) && ($_POST['btn_submit']) ){

                        $id_category = $_POST['id_category'];
                        $name_product = $_POST['name_product'];
                        $price = $_POST['price'];
                        $description = $_POST['description'];
                        $quantity = $_POST['quantity'];
                        $image = $_FILES['hinh_anh']['name'];
                        $targer_dir = "../upload/";
                        $targer_file = $targer_dir . basename($_FILES["hinh_anh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"],$targer_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            // echo "Sorry, there was an error uploading your file.";
                          }
                        // if($name_product=""){
                        //     $error = "Không được để trống";
                        // }
                          add_product($name_product,$price,$image,$description,$quantity,$id_category);
                        
                    }
                    $list_category = show_all_category();
                    include 'sanpham/add.php';
                    break;

                    case 'delete_sanpham':
                        if(isset($_GET['id']) && ($_GET['id']) > 0){
                        
                            delete_product($_GET['id']);
                        }
                        $list_product = show_all_product();
                        include 'sanpham/list.php';
                        break;
                        case 'sua_sanpham':
                            if(isset($_GET['id']) && ($_GET['id']) > 0){
                               
                                $list_one_product= show_one_product($_GET['id']);
                            }
                            $list_category = show_all_category();
                            include 'sanpham/update.php';
                            break;

                            case 'update_sanpham':
                                if(isset($_POST['btn_submit']) && ($_POST['btn_submit']) ){
            
                                    $id_category = $_POST['id_category'];
                                    $id_product = $_POST['id_product'];
                                    $name_product = $_POST['name_product'];
                                    $price = $_POST['price'];
                                    $description = $_POST['description'];
                                    $quantity = $_POST['quantity'];
                                    $image = $_FILES['hinh_anh']['name'];
                                    $targer_dir = "../upload/";
                                    $targer_file = $targer_dir . basename($_FILES["hinh_anh"]["name"]);
                                    if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"],$targer_file)) {
                                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                      } else {
                                        // echo "Sorry, there was an error uploading your file.";
                                      }
                    
                                      update_product($id_product,$name_product,$price,$image,$description,$quantity,$id_category);
                                    
                                }
                                $list_category = show_all_category();
                                $list_product = show_all_product();
                                include 'sanpham/list.php';
                                break;
                  

            
    }
}else{
   include 'main.php'; 
}
include 'footer.php';
?>