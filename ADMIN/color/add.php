<!-- PHẦN MAIN  -->
  

  
<!-- NỘI DUNG CHÍNH  -->
<aside>
    <!-- <form action="" method="post">
        <label for="">Mã danh mục  </label> <br>
  <input type="text" disabled>
  <label for=""> Tên danh mục </label> <br>
  <input type="text" name="name_category" id="">
    </form> -->
    <form method="post" action="index.php?act=add_color" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Mã màu</label>
    <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" disabled placeholder="Mã danh mục">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Màu</label>
    <input type="file" name="image_color" class="form-control" id="exampleInputPassword1" >
    
    <?php
   
    if(isset($thongbao) && $thongbao!=""){
        echo "<p style='color: green;'>$thongbao</p>";
    }
    if(isset($thongbao_loi) && $thongbao_loi!=""){
      echo "<p style='color: red;'>$thongbao_loi</p>";
  }
    ?>
    
  </div> <br>
  
  <input id="nut_them" name="btn_submit"  type="submit" value="Thêm">
  <a href="index.php?act=list_color"><input id="nut_danhsach"  type="button" value="Danh sách"></a>
</form>
  
   
  </aside>
   
  
 
  <!-- HẾT PHẦN MAIN  -->