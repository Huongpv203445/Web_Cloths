<?php $pageTitle='Login/Register on ROMAN | ROMAN'; ?>
<?php require_once 'header.php'; 
require_once "backend/initialize.php";?>
<?php
if(is_post_request() && $_POST['function']=='register'){
  $username=FormSanitizer::formSanitizerName($_POST['username']);
  $email=formSanitizer::formSanitizerString($_POST['email']);
  $address=formSanitizer::formSanitizerString($_POST['address']);
  $phone_number=formSanitizer::formSanitizerString($_POST['phone_number']);
  $password_1=formSanitizer::formSanitizerString($_POST['password_1']);
  $password_2=formSanitizer::formSanitizerString($_POST['password_2']);
  $wasSuccessfully = $account->register($email,$username,$address,$phone_number,$password_1,$password_2);
  if($wasSuccessfully){
    session_regenerate_id();
    $_SESSION['userLoggedIn'] = $wasSuccessfully;
    // if(isset($_POST['remember'])){
    //   $_SESSION['rememberMe'] = $_POST['remember'];
    // }
    // var_dump($_SESSION);

    redirect_to(url_for("index.php"));
  }
}
else if(is_post_request() && $_POST['function']=='login'){
    if(isset($_POST['username']) && !empty($_POST['password'])){
        $username_email=formSanitizer::formSanitizerString($_POST['username']);
        $password=formSanitizer::formSanitizerString($_POST['password']);
        $wasSuccessful=$account->login($username_email,$password);
          if($wasSuccessful){
              session_regenerate_id();
              $_SESSION['userLoggedIn']=$wasSuccessful;
            //   if(isset($_POST['rememberMe'])){
            //    $tstrong=true;
            //    $token=bin2hex(openssl_random_pseudo_bytes(64,$tstrong));
            //    $loadFromUser->create("token",["user_id"=>$wasSuccessful,"token"=>sha1($token)]);
            //    setcookie('FBID',$token,time()+3600*24*7,"/",NULL,NULL);
            //   }
            $userInfo = $account->getUserInfo($wasSuccessful);
            if($userInfo->is_admin)
                redirect_to('admin.php');
            else redirect_to('index.php');
         }
       }
  }


?>
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
                            <?php 
                                if(count($account->getError())){
                                    foreach($account->getError() as $error){
                                        echo '<p class="error">'.$error.'</p>';
                                    }
                                }
                            ?>
                        <form id="login-form" action="" method="POST">
                            <label for="username">Email <span>*</span></label>
                            <input id="username" type="text" name="username"placeholder="Email..." required>
                            <label for="pass-word">Mật khẩu <span>*</span></label>
                            <input id="pass-word" type="password" name = "password" placeholder="Mật khẩu..." required>
                            <input name = "function" value = "login" style="visibility: hidden; width:0; height:0;">
                            
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
                        <form id="register-form" action="login.php" method="POST">
                            <label for="email">Tên tài khoản hoặc địa chỉ email <span>*</span></label>
                            <input id="email" type="text" placeholder="Email..." name = "email" required>

                            <label for="username">Tên người dùng <span>*</span></label>
                            <input id="username" type="text" placeholder="Tên người dùng" name = "username" required>
                            
                            <label for="address">Địa chỉ <span>*</span></label>
                            <input id="address" type="text" placeholder="Địa chỉ của bạn" name = "address"required>
                            
                            <label for="phonenumber">Số điện thoại <span>*</span></label>
                            <input id="phonenumber" type="text" placeholder="Số điện thoại của bạn" name = "phone_number" required>
                            
                            <label for="pass-word-1">Mật khẩu <span>*</span></label>
                            <input id="pass-word-1" type="password" placeholder="Mật khẩu..." name = "password_1" required>

                            <label for="pass-word-2">Nhập Lại Mật khẩu <span>*</span></label>
                            <input id="pass-word-2" type="password" placeholder="Nhập Lại Mật khẩu..." name = "password_2" required>
                            <input name = "function" type="text" value = "register"style="visibility: hidden; width:0; height:0;">
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