<?php
session_start();
include '../model/pdo.php';
include '../model/danhmuc.php';
$show_category_trangchu = show_all_category();            
             
include 'header.php';
 
include '../global.php';
include '../model/sanpham.php';
include '../model/color.php';
include '../model/size.php';
include '../model/user.php';


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
                   
                    if(isset($_POST['btn_submit']) && ($_POST['btn_submit'])){
                        $user_name = $_POST['user_name'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        // if($user_name =""){
                        //     $loi_username = "Không được để trống";
                        // }elseif($phone=""){
                        //     $loi_phone = "Không được để trống";
                        // }elseif($email=""){
                        //   $loi_email = "Không được để trống";
                        // }elseif($password=""){
                        //     $loi_password = "Không được để trống";
                        // }else{
                        //     $thong_bao = "Đăng ký thành công";
                        //     add_user($user_name,$password,$email,$phone);
                        // }
                        if($user_name=="" && $phone=="" && $email=="" && $password==""){
                            $thongbao_loi = "Không được để trống";
                         }
                          elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $thongbao_loi = "Email không đúng định dạng";
                            }
                       
                        elseif(email_exist($email)){
                            $thongbao_loi = "Email đã tồn tại";
                        }
                        else{
                            add_user($user_name, $password, $email, $phone);
                            $thongbao="Đăng ký thành công";
                        }
                        
                        
                       

                    }    

                    include 'dangky.php';
                    break;

                case 'dangnhap':
                    if(isset($_POST['btn_submit']) && $_POST['btn_submit']){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $check_dangnhap = check_taikhoan($email,$password);
                        if(is_array($check_dangnhap)){
                            $_SESSION['dangnhap'] = $check_dangnhap;
                            header("Location: index.php");
                        }else{
                            $thongbao_loi = "Đăng nhập không thành công! Vui lòng kiểm tra lại";
                        }
                    }
                    include 'dangnhap.php';
                    break;

                    case 'quenmatkhau':
                        if(isset($_POST['btn_submit']) && ($_POST['btn_submit'])){
                           $email = $_POST['email'];
                           
                           $check_email=check_email($email);
                           if(is_array($check_email)){
                            $thongbao_quenmk = "Mật khẩu của bạn là".$check_email['password'];
                        
                         }else{
                            $thongbao_quenmk_loi = "Email không tồn tại ! Vui lòng kiểm tra lại";
                        
                         }
                          
                        }
                        
                        include 'quenmatkhau.php';
                        break;
                    case 'thoat':
                        session_unset();
                        header("Location: index.php");
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