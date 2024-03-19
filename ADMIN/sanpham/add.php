<!-- PHẦN MAIN  -->
  

  
<!-- NỘI DUNG CHÍNH  -->
<aside>
    <!-- <form action="" method="post">
        <label for="">Mã danh mục  </label> <br>
  <input type="text" disabled>
  <label for=""> Tên danh mục </label> <br>
  <input type="text" name="name_category" id="">
    </form> -->
    <form method="post" action="index.php?act=add_sanpham">
  
  <div class="form-group">
    <label for="exampleInputPassword1">Tên sản phẩm</label>
    <input type="text" name="name_product" class="form-control" id="exampleInputPassword1" >
  
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Đơn giá</label>
    <input type="text" name="price" class="form-control" id="exampleInputPassword1" >
  
  </div> <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Số lượng</label>
    <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" >
    
  </div> <br>
  
  <?php
   
    if(isset($thongbao) && $thongbao!=""){
        echo "<p style='color: green;'>$thongbao</p>";
    }
    if(isset($thongbao_loi) && $thongbao_loi!=""){
      echo "<p style='color: red;'>$thongbao_loi</p>";
  }
    ?>
  
  <input id="nut_them" name="btn_submit"  type="submit" value="Thêm">
  <a href="index.php?act=list_danhmuc"><input id="nut_danhsach"  type="button" value="Danh sách"></a>
</form>
  
   
  </aside>
   
  
 
  <!-- HẾT PHẦN MAIN  -->