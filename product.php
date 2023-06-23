<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">
    <title>SẢN PHẨM | ROWAN</title>
</head>
<body>
    <!-- HEADER -->
    <section id="header">
        <div class="header-container">
            <a href="index.html" class="logo"><img src="./images/logo.png" alt=""></a>
            <div class="search-box">
                <input type="text" placeholder="Tìm Kiếm">
                <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="right-box">
                <div class="login">
                    <div><a href="login.html">ĐĂNG NHẬP</a> / <a href="login.html">ĐĂNG KÝ</a></div>
                </div>
                <a class="cart" onclick = "toggleCart();updateCartCount(true, this)">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span id="cart-count">0</span>
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

    <!-- PRODUCTS -->
    <section id="products">
        <div class="sub-title">
            <h1>Cửa hàng</h1>
            <p><a href="index.html">trang chủ </a>  /  sản phẩm</p>
        </div>
        <div id="category">
            <div class="category">
                <div class="cate-container">
                    <a class="cate-box" data-id="all">
                        <img src="./images/slide1.jpg" alt="">
                        <div class="cate-text">
                            <h4 class="click">all</h4>
                            <p>30 sản phẩm</p>
                        </div>
                    </a>
                    <a class="cate-box" data-id="shoes">
                        <img src="./images/shoebox.jpg" alt="">
                        <div class="cate-text">
                            <h4>Giày</h4>
                            <p>11 sản phẩm</p>
                        </div>
                    </a>
                    <a class="cate-box" data-id="clothing">
                        <img src="./images/clothingbox.jpg" alt="">
                        <div class="cate-text">
                            <h4>Quần áo</h4>
                            <p>3 sản phẩm</p>
                        </div>
                    </a>
                    <a class="cate-box" data-id="accessories">
                        <img src="./images/accessoriesbox.jpg" alt="">
                        <div class="cate-text">
                            <h4>Phụ Kiện</h4>
                            <p>7 sản phẩm</p>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="products">
            <div class="row">
                <!-- <a href="product.html" class="product">
                    <div class="pro-top">
                        <img src="./images/pro1.webp" alt="">
                    </div>
                    <div class="pro-bottom">
                        <p class="pro-title">leather chelsea boot in black</p>
                        <div class="pro-rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="pro-price">850.000đ</p>
                    </div>
                </a> -->
            </div>
        </div>
    </section>
    <!-- END PRODUCTS -->

    <!-- DETAIL -->
    <section id="detail">
        <!-- <div class="detail">
            <div class="detail-container">
                <div class="detail-left">
                    <img class="main-img" src="./images/pro10.jpg" alt="">
                    <div class="small-img">
                        <img src="./images/pro10.jpg" alt="">
                        <img src="./images/pro9.jpg" alt="">
                        <img src="./images/pro8.jpg" alt="">
                    </div>
                </div>
                <div class="detail-right">
                    <h1 class="detail-title">Sound of Soul Shirt</h1>
                    <p class="detail-price">420.000đ</p>
                    <ul>
                        <li>Chất liệu: Vải Kate lụa</li>
                        <li>Màu sắc: Đen họa tiết</li>
                        <li>Công nghệ in nhiệt</li>
                        <li>Thiết kế và sản xuất bởi Rowan & De.Cop Studio</li>
                    </ul>
                    <p class="weight"><span>Trọng lượng: </span>N/A</p>
                    <p class="size"><span>Size: </span>S, M, L, XL</p>
                    <div class="conmmition">
                        <div class="conmmition-container">
                            <div class="small-commit">
                                <img src="./images/cmit1.png" alt="">
                                <div class="commit-text">
                                    <h4>cam kết chính hãng</h4>
                                    <p>Hàng chính hãng đúng chất lượng</p>
                                </div>
                            </div>
                            <div class="small-commit">
                                <img src="./images/cmit2.png" alt="">
                                <div class="commit-text">
                                    <h4>giao hàng toàn quốc</h4>
                                    <p>Ship COD toàn quốc</p>
                                </div>
                            </div>
                            <div class="small-commit">
                                <img src="./images/cmit3.png" alt="">
                                <div class="commit-text">
                                    <h4>xem hàng - thanh toán</h4>
                                    <p>Nhận hàng tận tay mới thanh toán</p>
                                </div>
                            </div>
                            <div class="small-commit">
                                <img src="./images/cmit4.png" alt="">
                                <div class="commit-text">
                                    <h4>đổi trả nhanh chóng</h4>
                                    <p>Đổi hàng nếu không vừa ý</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="size-pickup">
                        <span class = "size">Size: </span>
                        <select name="" id="">
                            <option value="">Chọn một tùy chọn</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div class="quantity">
                        <span>Số lượng: </span>
                        <div class="input-container">
                            <input type="button" value="-" class="minus">
                            <input type="number" value="1" class="number" step="1" min="1" max="100">
                            <input type="button" value="+" class="plus">
                        </div>
                    </div>
                    <button class="add-btn">thêm vào giỏ hàng</button>
                </div>
            </div>
        </div> -->
        <!-- <div class="detail-overlay"></div> -->
    </section>
    <!-- END DETAIL -->

    <!-- CART -->
    <section id="cart">
        <div class="cart-overlay"></div>
        <div class="cart-container">
            <div class="cart-header">
                <h1>giỏ hàng</h1>
                <div>
                    <i class="fa-solid fa-circle-xmark"></i>
                    <span>Đóng</span>
                </div>
            </div>
            <div class="cart-body">
                <!-- <div class="cart-item">
                    <div class="cart-content">
                        <img src="./images/pro1.webp" alt="">
                        <div class="cart-info">
                            <h4>leather harness boots in black</h4>
                            <span class = "size">Size: </span>
                            <div>
                                <input class="quantity-input" type="number" name="" id="" value="1" min="1" max="100" step="1">
                                <span>x</span>
                                <span class="cart-price">2.150.000 ₫</span>
                            </div>
                        </div>
                    </div>
                    <i class="fa-solid fa-circle-xmark"></i>
                </div> -->
            </div>
            <div class="cart-footer">
                <div class="sum">
                    <h2>tổng tiền:</h2>
                    <span>0 ₫</span>
                </div>
                <button class="clear">xóa sản phẩm</button>
                <button class="pay">thanh toán</button>
            </div>
        </div>
    </section>
    <!-- END CART -->

    <!-- CONTACT -->
    <section id="contact" class="bgc">
        <div class="contact-container">
            <div class="contact-info">
                <p class="contact-sub">nhận thông tin mới nhất từ rowan</p>
                <h2 class="contact-title">đăng kí nhận thông tin</h2>
                <p class="contact-desc">Chúng tôi sẽ gửi mail thông báo cho bạn về các sự kiện của Rowan</p>
                <div class="contact-form">
                    <input type="text" placeholder="Nhập địa chi email">
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
                            <span><a href="">Tư vấn: 0765.76.16.86</a></span>
                        </div>
                        <div>
                            <i class="fa-solid fa-mobile"></i>
                            <span><a href="">CSKH: 0898.679.040</a></span>
                        </div>
                        <div>
                            <i class="fa-solid fa-envelope"></i>
                            <span><a href="">Rowanshoeshustvn@gmail.com</a></span>
                        </div>
                    </div>
                    <ul>
                        <li><a href="index.html">Giới thiệu</a></li>
                        <li><a href="products.html">Sản phẩm</a></li>
                        <li><a href="">Feedback</a></li>
                        <li><a href="contact.html">Liên hệ</a></li>
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
                <a href="https://www.google.com/maps/dir//21.0062059,105.8431067/@21.0061786,105.8417699,18.03z/data=!4m2!4m1!3e0?entry=ttu">
                    <img src="./images/dhbk.png" alt="">
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
                <p><i class="fa-solid fa-envelope"></i></i><a href=""></a>Rowanshoeshustvn@gmail.com</p>
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

    <script type="module" src="./JS/products.js"></script>
</body>
</html>