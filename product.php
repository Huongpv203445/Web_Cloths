<?php $pageTitle = "Products | ROMAN"?>
<?php require_once 'header.php'; ?>

    <!-- PRODUCTS -->
    <section id="products">
        <div class="sub-title">
            <h1>Cửa hàng</h1>
            <p><a href="index.php">trang chủ </a>  /  sản phẩm</p>
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

    <?php require_once 'footer.php'; ?>