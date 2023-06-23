<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <title>CHÍNH SÁCH | ROWAN</title>
</head>
<body>
    <!-- HEADER -->
    <section id="header">
        <div class="header-container">
            <a href="index.php" class="logo"><img src="./images/logo.png" alt=""></a>
            <div class="search-box">
                <input type="text" placeholder="Tìm Kiếm">
                <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="right-box">
                <div class="login">
                    <div><a href="login.php">ĐĂNG NHẬP</a> / <a href="login.php">ĐĂNG KÝ</a></div>
                </div>
                <a class="cart" onclick = "toggleCart()">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span >0</span>
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
                <a href="index.php" class="nav-link">Trang chủ</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-door-open"></i>
                <a href="introduction.php" class="nav-link">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-shirt"></i>
                <a href="product.php" class="nav-link">Sản phẩm</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-book"></i>
                <a href="policy.php" class="nav-link">Chính sách</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-phone"></i>
                <a href="contact.php" class="nav-link">Liên hệ</a>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-people-group"></i>
                <a href="https://www.facebook.com/groups/283978698958770/" class="nav-link" target="_blank">Cộng đồng</a>
            </li>
        </ul>
    </section>
    <!-- END NAVIGATION -->

    <!-- POLICY -->
    <section id="policy">
        <div class="sub-title">
            <h1>Chính sách</h1>
            <p><a href="index.php">trang chủ </a>  /  chính sách</p>
        </div>
        <div class="policy-container">
            <div class="policy-1">
                <h1 class="poli-title">1. Chính sách bảo hành </h1>
                <ul>
                    <li>Bảo hành trọn đời về chất lượng cho toàn bộ sản phẩm (màn hình, bàn phím, …).</li>
                    <li>Bảo dưỡng 1 năm đối với các sản phẩm trên 1.000.000 VND.</li>
                    <li>Không bảo hành đối với quần áo và phụ kiện.</li>
                </ul>
            </div>
            <div class="policy-2">
                <h1 class="poli-title">2. Chính sách đổi trả </h1>
                <ul>
                    <li>Rowan nhận đổi hàng trong vòng 2 ngày kể từ khi nhận hàng (Chỉ nhận đổi hàng không nhận trả hàng)</li>
                    <li>Điều kiện đổi hàng</li>
                    <ul>
                        <li>Còn mới 99,9% (chưa qua sử dụng).</li>
                        <li>Phí ship 2 chiều khách sẽ là người thanh toán.</li>
                    </ul>
                </ul>
            </div>
            <div class="policy-3">
                <h1 class="poli-title">3. Chính sách giao hàng </h1>
                <ul>
                    <li>Nhận ship cod toàn quốc.</li>
                    <li>Được kiểm tra hàng trước khi nhận (LƯU Ý KHÔNG ĐƯỢC THỬ TRƯỚC KHI THANH TOÁN).</li>
                    <li>
                        <span>Giao hàng nội thành (HCM)</span>
                        <ul>
                            <li>Thời gian: Giao hàng trong ngày hoặc thời gian bạn mong muốn.</li>
                            <li>Chi phí giao giày: Giao động từ 30.000 VND -> 45.000 VND tùy khu vực trong Hồ Chí Minh.</li>
                            <li>Chi phí giao sản phẩm khác: 38.000 VND.</li>
                        </ul>
                    </li>
                    <li>
                        <span>Giao hàng ngoại thành</span>
                        <ul>
                            <li>Thời gian: Giao hàng 3 đến 4 ngày tùy vào khu vực & thời tiết.</li>
                            <li>Chi phí: Giao động từ 49.000 VND -> 59.000 VND.</li>
                            <li>Chi phí giao sản phẩm khác: 38.000 VND.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END POLICY -->

    <!-- CONTACT -->
    <section id="contact" class="bgc">
        <div class="contact-container">
            <div class="contact-info">
                <p class="contact-sub">nhận thông tin mới nhất từ rowan</p>
                <h2 class="contact-title">đăng kí nhận thông tin</h2>
                <p class="contact-desc">Chúng tôi sẽ gửi mail thông báo cho bạn về các sự kiện của Rowan</p>
                <div class="contact-form">
                    <input type="text" placeholder="Nhập địa chi email" required>
                    <button type="submit" class="contact__info-btn">đăng kí</button>
                </div>
            </div>
            <div class="contact-ques">
                <p class="contact-sub">bạn đang phân vân điều gì?</p>
                <h2 class="contact-title">bạn có câu hỏi?</h2>
                <p class="contact-desc">Đặt câu hỏi ngay cho chúng tôi để được giải đáp</p>
                <a class="contact__ques-btn">nhắn tin ngay</a>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!-- FOOTER -->
    <section id="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="./images/footerlogo.png" alt="">
                <div class="footer-info">
                    <div class="footer-desc">
                        <p>Chuyên cung cấp các sản phẩm <br> Boots da bò thật.</p>
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Số 1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-mobile"></i>
                            <span><a href="">Tư vấn: 0927.133.332</a></span>
                        </div>
                        <div>
                            <i class="fa-solid fa-mobile"></i>
                            <span><a href="">CSKH: 0384.770.171</a></span>
                        </div>
                        <div>
                            <i class="fa-solid fa-envelope"></i>
                            <span><a href="">huong.pv.hust.vn2@gmail.com</a></span>
                        </div>
                    </div>
                    <ul>
                        <li><a href="index.php">Giới thiệu</a></li>
                        <li><a href="products.php">Sản phẩm</a></li>
                        <li><a href="">Feedback</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                        <li><a href="https://www.facebook.com/groups/283978698958770/">Cộng đồng</a></li>
                    </ul>
                    <div>
                        <ul>
                            <li><a href="">Chính sách bảo hành</a></li>
                            <li><a href="">Chính sách đổi trả</a></li>
                            <li><a href="">Chính sách giao hàng</a></li>
                            <li class="footer-icon"></li>
                                <a href="https://www.facebook.com/Rowanshoes"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/Rowan_Shoes/"><i class="fa-brands fa-instagram"></i></i></a>
                                <a href="https://www.youtube.com/@shoesrowan3281"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-right">
                <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+%C4%90i%E1%BB%87n+L%E1%BB%B1c/@21.046388,105.7827549,17z/data=!3m1!4b1!4m5!3m4!1s0x3135abb158a2305d:0x5c357d21c785ea3d!8m2!3d21.046388!4d105.7849436?hl=vi">
                    <img src="./images/dhdl.jpg" alt="">
                </a>
            </div>
        </div>
        <hr>
        <p class="footer-copyright">
            @Hộ kinh doanh Anh Linh được cấp tại Ủy ban nhân dân quận Hai Bà Trưng.
        </p>
    </section>
    <!-- END FOOTER -->

    <!-- MODAL -->
    <section id="modal">
        <div class="modal-container">
            <div class="close-modal">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="modal-left">
                <h1>nhắn cho chúng tôi</h1>
                <form class="modal-form" action="">
                    <div class="required">
                        <div>
                            <label for="">Họ tên</label>
                            <input type="text" placeholder="Họ tên..." required>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input type="email" placeholder="Email..." required>
                        </div>
                    </div>
                    <div class="optional">
                        <div>
                            <label for="">SĐT (nếu có)</label>
                            <input type="text" placeholder="Số điện thoại...">
                        </div>
                        <div>
                            <label for="">Địa chỉ (nếu có)</label>
                            <input type="text" placeholder="Địa chỉ...">
                        </div>
                    </div>
                    <label for="">Nội dung</label>
                    <textarea name="" id="" cols="30" rows="10">
    
                    </textarea>
                    <button class="modal-btn" type="">Gửi tin nhắn</button>
                </form>
            </div>
            <div class="modal-right">
                <h1>thông tin liên hệ</h1>
                <p><i class="fa-solid fa-location-arrow"></i>Số 1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội</p>
                <p><i class="fa-solid fa-phone"></i></i><a href="">Tư vấn: 0765.76.16.86</a></p>
                <p><i class="fa-solid fa-phone"></i></i><a href="">CSKH: 0898.679.040</a></p>
                <p><i class="fa-solid fa-envelope"></i></i><a href=""></a>Rowanshoesvn@gmail.com</p>
                <p class="modal-desc">
                    Bạn có câu hỏi về cách chúng tôi có thể giúp công ty của bạn không? Gửi email cho chúng tôi và chúng tôi sẽ sớm liên hệ lại.
                </p>
                <div class="modal-icon">
                        <a href="https://www.facebook.com/Rowanshoes"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/Rowan_Shoes/"><i class="fa-brands fa-instagram"></i></i></a>
                        <a href="https://www.youtube.com/@shoesrowan3281"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- END MODAL -->
    <script src="./JS/policy.js"></script>
</body>
</html>