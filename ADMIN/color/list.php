<!-- NỘI DUNG CHÍNH  -->
<?php
// if(is_array($list_category)){
//     extract($list_category);
// }
?>
<aside>
   <table>
    <tr>
      <th>Mã màu </th>
      <th>Màu </th>
      <th>Hành động </th>
    </tr>
    <?php
    foreach ($list_color as $color){ 
      extract($color);
      $hinhpath = "../upload/".$image_color;

      if(is_file($hinhpath)){
          $hinh_anh = "<img src='".$hinhpath."' height='80' width='80' >";
      }else{
          $hinh_anh = "No photo";
      }
      ?>  
   
    <tr>
      <td><?= $color['id_color'] ?></td>
      <td><?= $hinh_anh ?></td>
      <td><a href="index.php?act=sua_color&id=<?= $color['id_color'] ?>"><input id="nut_sua" type="button" value="Sửa"></a> 
       <a onclick="return confirm('Có chắc muốn xóa không')" href="index.php?act=delete_color&id=<?= $color['id_color'] ?>"><input id="nut_xoa" type="button" value="Xóa"></a></td>
    </tr>

    <?php } ?>
   </table>
   <a href="index.php?act=add_color"><input id="nut_them"  type="button" value="Thêm"></a>
  </aside>