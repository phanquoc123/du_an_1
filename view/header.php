<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view/style.css">
  
</head>
<body>
    <header>
        <div class="header_tren container">
            <div class="logo_web">
                <a href="index.php"><img class="logo" src="../img/logo.svg" alt=""></a>
            </div>
            <div class="search">
                <form action="index.php?act=search" method="post">
                    <input type="text" name="search" placeholder="Tìm kiếm tại đây">
                    <input type="submit" name="btn_search"  value="Tìm kiếm" > 
                    
                </form>
            </div>
            <div class="SDT">
            
                <h4> <i class="fa-solid fa-phone"></i> Đặt hàng ngay: 0989899866</h4>
                
            </div>

            
        </div>
        <div class="hearder_duoi container">
            <div class="list_danhmuc">
             <ul>
            
                <?php foreach($show_category_trangchu as $category_trangtru) { 
                    extract($category_trangtru);
                     
                    ?>
                    
            
            <li><a href="index.php?act=sanpham_tungloai&id=<?= $category_trangtru['id_category'] ?>"><?= $category_trangtru['name_category'] ?></a></li> 
             <?php  } ?>
            <!-- <li><a href="">Nữ</a></li>
            <li><a href="">Trẻ em</a></li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Blog</a></li> -->
            
            <li> <i class="fa-solid fa-cart-shopping"></i><a href="">Giỏ hàng</a></li>
            <li>  <i class="fa-solid fa-user"></i><a href="">Đăng ký/ Đăng nhập</a></li>
           </ul>
         </div>
        
        </div>
         
          
      
    </header>