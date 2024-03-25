</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Nhúng thư viện bootstrap vào html -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../view/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <div class="container">
        <div id="wrapper">
            <form action="" id="form-login">
                <h1 class="form-heading">
                    <span class="page-signup-title page-signup-title-darkblue">ĐĂNG</span>
                    <span class="page-signup-title page-signup-title-yellow">KÝ</span>
                </h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="name" class="form-input" placeholder="Họ vè tên" required>
                </div>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="phone" class="form-input" placeholder="Số điện thoại" required>
                </div>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="email" class="form-input" placeholder="Tài khoản email" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-input" placeholder="Mật khẩu"required>
                    <div id="eye">
                        <i class="far fa-eye"></i>
                    </div>
                </div>
                <input type="submit" value="Đăng nhập" class="form-submit">
                <p>Hoặc đăng kí bằng</p>
                <div class="d-flex justify-content-center page-signup-social-wrapper">
            
                    <div class="page-signup-social">
                    <a href="#" class="social-login--google"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/100/438/408/themes/943787/assets/ic_btn_google.svg?1711329955342" class="bg-white"></a>
                    </div>
                    <div class="page-signup-social">
                    <a href="#" class="social-login--facebook"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/100/438/408/themes/943787/assets/ic_btn_facebook.svg?1711329955342" class="bg-white"></a>
                    </div>
                    </div>
                <div class="register">
                Bạn đã có tài khoản? <a href="dangnhap.php">Đăng nhập ngay!</a>
                </div>
        

            </form>
        </div>
        
    </body>
    <style>