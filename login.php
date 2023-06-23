<?php $pageTitle='Login/Register on ROMAN | ROMAN'; ?>
<?php require_once 'header.php'; ?>
<body>


    <!-- LOGIN / SIGN UP -->
    <section id="login">
        <div class="sub-title black">
            <h1>Tài khoản</h1>
            <p><a href="index.php">trang chủ </a>  /  tài khoản</p>
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

    <script src="./JS/login.js"></script>
</body>
</html>