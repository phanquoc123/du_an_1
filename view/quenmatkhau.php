
<div class="all">
    <div class="container">
        <div id="wrapper">
            <form action="index.php?act=quenmatkhau" method="post" id="form-login">
                <h1 class="form-heading">
                    <span class="page-signup-title page-signup-title-darkblue">LẤY LẠI </span>
                    <span class="page-signup-title page-signup-title-yellow">MẬT KHẨU</span>
                </h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="email" class="form-input" name="email" placeholder="Vui lòng nhập email của bạn" required>
                    
                </div>
                <?php
    if(isset($thongbao_quenmk) && $thongbao_quenmk!=""){
        echo "<p style='color: green; text-align: center'>$thongbao_quenmk</p>";
    }
    if(isset($thongbao_quenmk_loi) && $thongbao_quenmk_loi!=""){
        echo "<p style='color: red; text-align: center'>$thongbao_quenmk_loi</p>";
    }
    ?>
                
                <input type="submit" name="btn_submit" value="Xác nhận" class="form-submit">
                
               
                <h6>Hoặc đăng nhập bằng</h6>
                <div class="d-flex justify-content-center page-signup-social-wrapper">
            
                    <div class="page-signup-social">
                    <a href="#" class="social-login--google"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/100/438/408/themes/943787/assets/ic_btn_google.svg?1711329955342" class="bg-white"></a>
                    </div>
                    <div class="page-signup-social">
                    <a href="#" class="social-login--facebook"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/100/438/408/themes/943787/assets/ic_btn_facebook.svg?1711329955342" class="bg-white"></a>
                    </div>
                    </div>
                <div class="register">
                Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký ngay!</a>
                </div>
        

            </form>
        </div>
    </div>
</div>
   