<?php $pageTitle='Home | ROMAN'; ?>
<?php require_once 'header.php'; ?>


    <!-- SLIDER -->
    <section id="slide-container">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="raido-btn" id="radio1">
                <input type="radio" name="raido-btn" id="radio2">
                <input type="radio" name="raido-btn" id="radio3">
    
                <div class="slide first">
                    <img src="./images/slide1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./images/slide2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./images/slide3.jpg" alt="">
                </div>
    
                <!-- Auto navigation -->
                <div class="auto-navigation">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
                <!-- Manual navigation -->
                <!-- <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div> -->
    
            </div>
        </div>
    </section>
    <!-- END SLIDER -->

    <!-- NEW ARRIVALS -->
    <section id="arrival">
        <div class="title">
            <h1>Hàng Mới Về</h1>
            <span>Mới Nhất 2020</span>
            <h2> DANH MỤC ROWAN</h2>   
        </div>
        <div class="catagories-box">
            <div class="catagory-box">
                <a href="product.php" class="box-shoe">
                    <img src="./images/shoebox.jpg" alt="">
                    <div class="box-desc">
                        <span>GIÀY</span>
                        <button class="catagory-btn">Xem chi tiết</button>
                    </div>
                </a>
            </div>
            <div class="catagory-box">
                <a href="product.php" class="box-clothing">
                    <img src="./images/clothingbox.jpg" alt="">
                    <div class="box-desc">
                        <span>QUẦN ÁO</span>
                        <button class="catagory-btn">Xem chi tiết</button>
                    </div>
                </a>
            </div>
            <div class="catagory-box">
                <a href="product.php" class="box-accessories">
                    <img src="./images/accessoriesbox.jpg" alt="">
                    <div class="box-desc">
                        <span>PHỤ KIỆN</span>
                        <button class="catagory-btn">Xem chi tiết</button>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- END NEW ARRIVALS -->

    <!-- TRENDING -->
    <section id="trending">
        <div class="title">
            <h1>XU HƯỚNG HÀNG ĐẦU</h1>
            <span>MỌI THỜI ĐIỂM</span>
            <h2>SẢN PHẨM BÁN CHẠY</h2>   
        </div>
        <div class="products">
            <div class="row">
                <!-- <a href="product.php" class="product">
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
                        <p class="pro-price">850.000 ₫</p>
                    </div>
                </a> -->
            </div>
        </div>
        <a href="product.php" class="more-btn">xem nhiều hơn</a>
    </section>
    <!-- END TRENDING -->

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

    <?php require_once 'footer.php'; ?>