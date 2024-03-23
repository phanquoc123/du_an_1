<div class="container">
    <div class="product-content row">
        <div class="product-content-left row">
            <?php extract($show_sanpham_chitiet);
               $hinh_chitietsanpham = $img_path.$image;
            ?>
            <div class="product-content-left-big-img">
                <img src="<?=$hinh_chitietsanpham ?>" alt="">
            </div>
            <!-- <div class="product-content-left-smail-img">
                <img src="../img/anhsanpham1.webp" alt="">
                <img src="../img/anhsanpham2.webp" alt="">
                <img src="../img/anhsanpham1.webp" alt="">
                <img src="../img/anhsanpham2.webp" alt="">
            </div> -->
            <div class="product-content-left-bottom">
                <h2>Đặc tính nổi bật</h2>
                <ul>
                    <li><a href=""></a>Áo có cấu trúc 3 lớp chắc chắn</li>
                    <li><a href=""></a>Thành phần:  100% NYLON</li>
                    <li><a href=""></a>Khả năng giữ ấm tốt, cản gió hiệu quả, chống thấm nước vào bên trong</li>
                    <li><a href=""></a>Màu sắc trang nhã, trẻ trung, phù hợp với nhiều tone da chị em</li>
                    <li><a href=""></a>Form dáng dễ mặc, tối giản nhưng không đơn điệu</li>
                    <li><a href=""></a>Thiết kế túi đựng nhỏ gọn, dễ dàng đựng các vật dụng nhỏ khác</li>
                    <li><a href=""></a>Áo phao siêu nhẹ, chống tĩnh điện tốt</li>
                </ul>
    </div> 
        </div>
        <div class="product-content-right">
            <div class="product-content-right-product-name">
                <h1><?= $show_sanpham_chitiet['name_product']  ?></h1>
                <p>MSP: 57A2923</p>
            </div>
            <div class="product-content-right-product-price">
                <p><?= $show_sanpham_chitiet['price'] ?><sup>đ</sup></p>
            </div>
            <div class="product-content-right-product-color">
                <p><span style="font-weight: bold;">Màu sắc: </span>Xanh nhạt <span style="color: red;">*</span></p> 
                <div class="product-content-right-product-color-imgs">
                    <div class="product-content-right-product-color-img">
                        <img src="../img/anhmau.jpg" alt="">
                    </div>
                    <div class="product-content-right-product-color-img">
                        <img src="../img/anhmau2.jpg" alt="">
                    </div>
                    <div class="product-content-right-product-color-img">
                        <img src="../img/anhmau3.jpg" alt="">
                    </div>
                    <div class="product-content-right-product-color-img">
                        <img src="../img/anhmau4.jpg" alt="">
                    </div>  
                    <div class="product-content-right-product-color-img">
                        <img src="../img/anhmau5.jpg" alt="">
                    </div>
                </div>

            </div>
            <div class="product-content-right-product-size">
                <p style="font-weight: bold;">Size</p>
                <span><p>S</p></span>
                <span><p>M</p></span>
                <span><p>L</p></span>
                <span><p>XL</p></span>
                <span><p>XXL</p></span>
            </div>
            <div class="quantity">
                <p style="font-weight: bold;">Số lượng: </p>
                <input type="number" min="0" value="1">
            </div>
            <p style="color: orange;">Mua thêm để được Freeship cho đơn từ 498K</p>
            <div class="product-content-right-product-button">
                <button><i class="fas fa-shopping-cart"></i> <p class="font-p">THÊM VÀO GIỎ HÀNG</p></button>
                <button><p class="font2-p" >MUA NGAY</p></button>
            </div>
            <div class="product-content-right-product-icon">
                <div class="product-content-right-product-icon-item">
                <i class="fas fa-thin fa-tag"></i> <p>Mã giảm giá sẽ hiển thị trong giỏ hàng</p>
                </div>
                <div class="product-content-right-product-icon-item">
                <i class="fas fa-thin fa-shield"></i> <p>Thông tin được bảo mật và mã hóa</p>
                </div>
                <div class="product-content-right-product-icon-item">
                <i class="fas fa-sharp fa-thin fa-clock"></i> <p>Giao hàng: Từ 1 - 3 ngày</p>
                </div>
                <div class="product-content-right-product-icon-item">
                    <i class="fas fa-thin fa-arrows-rotate"></i> <p>Miễn phí đổi trả: tại 250+ cửa hàng trong 15 ngày</p>
                </div>
            </div>
        </div> 

        <div class="san_pham_tong">
                <h5 style="padding-left:25px ;padding-bottom:25px ; color: #2A2A86; align-items:centers ">CÁC SẢN PHẨM CÙNG LOẠI </h5>
                <div class="item">
                    <?php foreach ($show_sanpham_cungloai as $sanpham_tuong_tu) { 
                         extract($sanpham_tuong_tu);
                         $hinh_hienthitrangchu = $img_path.$image;
                        ?>
                     
                    <div class="product">
                        <a href="index.php?act=chitiet_sanpham&id=<?= $sanpham_tuong_tu['id_product']  ?>"> <img src="<?= $hinh_hienthitrangchu ?>" alt=""> </a>
                        <h8><?= $sanpham_tuong_tu['name_product'] ?></h8>
                        <div>
                            <span style="color:red;padding-right:9px"><?= $sanpham_tuong_tu['price'] ?></span>
                            <span style="color:gray ;  text-decoration: line-through;">250.000đ</span>
                        </div>
                        <span class="chay_hang">Sắp cháy hàng</span>
                    
                    </div>
                    <?php   }  ?>
    </div>
</div>

    </div>

    
</div>
