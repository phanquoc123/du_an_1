<div class="container">
    <div class="product-content row">
        <div class="product-content-left row">
            <div class="product-content-left-big-img">
                <img src="../img/anhsanpham1.webp" alt="">
            </div>
            <div class="product-content-left-smail-img">
                <img src="../img/anhsanpham1.webp" alt="">
                <img src="../img/anhsanpham2.webp" alt="">
                <img src="../img/anhsanpham1.webp" alt="">
                <img src="../img/anhsanpham2.webp" alt="">
            </div>
        </div>
        <div class="product-content-right">
            <div class="product-content-right-product-name">
                <h1>ÁO KHOÁC MÙA ĐÔNG</h1>
                <p>MSP: 57A2923</p>
            </div>
            <div class="product-content-right-product-price">
                <p>1.500.000<sup>đ</sup></p>
            </div>
            <div class="product-content-right-product-color">
                <p><span style="font-weight: bold;">Màu sắc: </span>Xanh nhạt <span style="color: red;">*</span></p>
                <div class="product-content-right-product-color-img">
                    <img src="../img/anhmau.jpg" alt="">
                </div>
                
            </div>
            <div class="product-content-right-product-size">
                <p style="font-weight: bold;">Size</p>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            <div class="quantity">
                <p style="font-weight: bold;">Số lượng: </p>
                <input type="number" min="0" value="1">
            </div>
            <p style="color: red;">Vui lòng chọn size</p>
            <div class="product-content-right-product-button">
                <button><i class="fas fa-shopping-cart"></i> <p class="font-p">MUA HÀNG</p></button>
                <button><p>TÌM TẠI CỬA HÀNG</p></button>
            </div>
            <div class="product-content-right-product-icon">
                <div class="product-content-right-product-icon-item">
                    <i class="fas fa-phone-alt"></i> <p class="font-p">Hotline</p>
                </div>
                <div class="product-content-right-product-icon-item">
                    <i class="fas fa-comments"></i> <p class="font-p">Chat</p>
                </div>
                <div class="product-content-right-product-icon-item">
                    <i class="fas fa-envelope"></i> <p class="font-p">Mail</p>
                </div>
            </div>
            <div class="product-content-right-bottom">
                <div class="product-content-right-bottom-top">

                </div>
            </div>
        </div>

    </div>
</div>
<style>
.product-content{
    margin-top: 30px;
}

.product-content-left{
    flex: 1;
    width: 50%;
    display: flex;
    align-items: center;
    
}
.product-content-left-big-img{
    width: 80%;
    padding-right: 20px;
    display: flex;
    justify-content: space-between;
}
.product-content-left-big-img img{
    width: 100%;
}
.product-content-left-smail-img{
    width: 20%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
}
.product-content-left-smail-img img{
    margin: 14px 20px; /* Khoảng cách giữa các hình ảnh nhỏ */
    width: 100%;
    align-self: flex-start;
}
.product-content-right{
    flex: 1;
    width: 50%;
    margin-left: 150px;
}
.product-content-right-product-name h1{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 24px;
    margin-top: 40px;
}
.product-content-right-product-name p{
    color: #cccccc;
    font-size: 12px;
}
.product-content-right-product-price{
    margin: 12px 0;
    font-size: 20px;
    font-weight: bold;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.product-content-right-product-color img{
    width: 30px;
    height: 30px;
    border-radius: 50%;
}
.product-content-right-product-color-img{
   height: 40px;
   width: 40px;
   border: 1px solid #333;
   display: flex;
   align-items: center;
   justify-content: center;
   margin: 12px 0;
}
.product-content-right-product-size span{
    display: inline-block;
    padding: 3px 6px;
    border: 1px solid black;
    margin: -10px 10px 20px 0;
    font-size: 12px;
    cursor: pointer;
}
.quantity{
    display: flex;
   
}
.quantity input{
    width: 35px;
    height: 24px;
    margin: 0 10px;
}
.product-content-right-product-button button{
    width: 150px;
    height: 40px;
    display: block;
    margin: 20px 0 12px;
    transition: all 0.3s ease;
}
.product-content-right-product-button button:first-child{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: #cccccc;
    border: 2px solid black;
    cursor: pointer;
}
.product-content-right-product-button button:first-child:hover{
    background-color: black;
    color: white;
}
.product-content-right-product-button button:last-child{
    border: 2px solid #BF8A49;
    color: #BF8A49;
    background-color: #ffff;
    cursor: pointer;
}
.product-content-right-product-icon{
    display: flex;
}
.product-content-right-product-icon-item{
    display: flex;
    margin-right: 12px;
    margin-top: 5px;
    align-items: center;
}
.product-content-right-product-icon-item{
    display: flex;
    margin-right: 12px;
    align-items: center;
}
.product-content-right-product-icon-item i{
    font-size: 12px;
    margin-right: 6px;
}
.font-p{
    padding-top: 12px;
}

</style>