<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title>LIÊN HỆ | ROWAN</title>
</head>
<body>
    <!-- HEADER -->
    <section id="header">
        <div class="header-container">
            <a href="index.html" class="logo"><img src="../images/logo.png" alt=""></a>
            <div class="search-box">
                <input type="text" placeholder="Tìm Kiếm">
                <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="right-box">
                <div class="login">
                    <div><a href="login.html">ĐĂNG NHẬP</a> / <a href="login.html">ĐĂNG KÝ</a></div>
                </div>
                <a class="cart" onclick = "toggleCart()">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span id = "count_cart">0</span>
                </a>
            </div>
        </div>
    </section>
    <!-- END HEADER -->

    <!-- NAVIGATION -->
    <section id="navigation">
        <ul class="nav-list">
            <li class="nav-item">
                <i class="fa-solid fa-house"></i>
                <a href="index.html" class="nav-link">Trang chủ</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-door-open"></i>
                <a href="introduction.html" class="nav-link">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-shirt"></i>
                <a href="product.html" class="nav-link">Sản phẩm</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-book"></i>
                <a href="policy.html" class="nav-link">Chính sách</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-phone"></i>
                <a href="contact.html" class="nav-link">Liên hệ</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-people-group"></i>
                <a href="https://www.facebook.com/groups/283978698958770/" class="nav-link" target="_blank">Cộng đồng</a>
            </li>
        </ul>
    </section>
    <!-- END NAVIGATION -->

    <!-- LOGIN / SIGN UP -->
    <section id="login">
        <div class="sub-title black">
            <h1>Tài khoản</h1>
            <p><a href="index.html">trang chủ </a>  /  tài khoản</p>
        </div>
        <div class="login-container">
            <div class="login-box">
                <div class="login-left">
                    <div class="login-form">
                        <h1>đăng nhập</h1>
                        <form id="login-form" action="">
                            <label for="email">Tên tài khoản hoặc địa chỉ email <span>*</span></label>
                            <input id="email" type="text" placeholder="Email..." required>
                            <label for="pass-word">Mật khẩu <span>*</span></label>
                            <input id="pass-word" type="password" placeholder="Mật khẩu..." required>
                            <button class="login-btn" type="submit">đăng nhập</button>
                            <div class="password">
                                <div>
                                    <input type="checkbox" id="password" id="">
                                    <label for="password">Nhớ mật khẩu</label>
                                </div>
                                <a href="#">Quên mật khẩu</a>
                            </div>
                        </form>
                    </div>

                    <div class="register-form">
                        <h1>đăng ký</h1>
                        <form id="register-form" action="">
                            <label for="email">Tên tài khoản hoặc địa chỉ email <span>*</span></label>
                            <input id="email" type="text" placeholder="Email..." required>
                            
                            <label for="pass-word">Mật khẩu <span>*</span></label>
                            <input id="pass-word" type="password" placeholder="Mật khẩu..." required>
                            
                            <label for="username">Tên người dùng <span>*</span></label>
                            <input id="username" type="text" placeholder="Tên người dùng" required>
                            
                            <label for="address">Địa chỉ <span>*</span></label>
                            <input id="address" type="text" placeholder="Địa chỉ của bạn" required>
                            
                            <label for="phonenumber">Số điện thoại <span>*</span></label>
                            <input id="phonenumber" type="text" placeholder="Số điện thoại của bạn" required>
                            
                            <button class="login-btn" type="submit">Đăng ký</button>
                          </form>
                          
                    </div>
                </div>
                <div class="login-right">
                    <h1>đăng ký</h1>
                    <p>Đăng ký trang web này cho phép bạn truy cập trạng thái và lịch sử đơn hàng của mình. Chỉ cần điền vào các trường bên dưới và chúng tôi sẽ nhanh chóng thiết lập tài khoản mới cho bạn. Chúng tôi sẽ chỉ hỏi bạn những thông tin cần thiết để giúp quá trình mua hàng nhanh hơn và dễ dàng hơn.</p>
                    <a class="register-btn">đăng ký</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END LOGIN / SIGN UP -->

    <script src="../JS/login.js"></script>
</body>
</html>