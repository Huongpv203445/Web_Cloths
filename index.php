<?php $pageTitle='Home | ROMAN'; ?>

<?php require_once "backend/initialize.php";?>
<?php 
    // $cartItems = isset($_SESSION['userLoggedIn']) ? json_encode($cart->getAllItems($_SESSION['userLoggedIn'])) : json_encode(array());
    // $userIsLogged = isset($_SESSION['userLoggedIn']) ? $_SESSION['userLoggedIn'] : -1;
    // $user = $account->getUserInfo($userIsLogged);
    // if(is_post_request() && $userIsLogged != -1){
    //     $cart->addItemToCart($userIsLogged, $_POST['product_id'], $_POST['product_size'], $_POST['quanity']);
    // }
    
    
    
    // var_dump($cart->getAllItem($_SESSION['userLoggedIn']));
    
?>
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
    <title><?php echo $pageTitle?></title>
    
</head>
<body>
        <!-- HEADER -->
        <section id="header">
        <div class="header-container">
            <a href="index.php" class="logo"><img src="./images/logo.png" alt=""></a>
            <div class="search-box">
                <form action="product.php" method = "GET">
                    <input type="text" placeholder="Tìm Kiếm" name = 'q'>
                    <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                
            </div>
            <div class="right-box">
                <div class="login">
                <?php if(!isset($_SESSION['userLoggedIn'])) {
                        echo '<a href="login.php">ĐĂNG NHẬP</a> / <a href="login.php">ĐĂNG KÝ</a>';
                    } else {
                        echo '<a href="">Hi, '.$user->username.' </a> / <a href="logout.php">ĐĂNG XUẤT</a>';
                    }?>
                </div>
                <a class="cart" onclick = "toggleCart()">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span id="cart-count"><?php if(isset($_SESSION['userLoggedIn'])) echo count($cart->getAllItems($_SESSION['userLoggedIn'])); else echo '0';?></span>
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
                <a href="product.php?category=1" class="box-shoe">
                    <img src="./images/shoebox.jpg" alt="">
                    <div class="box-desc">
                        <span>GIÀY</span>
                        <button class="catagory-btn">Xem chi tiết</button>
                    </div>
                </a>
            </div>
            <div class="catagory-box">
                <a href="product.php?category=2" class="box-clothing">
                    <img src="./images/clothingbox.jpg" alt="">
                    <div class="box-desc">
                        <span>QUẦN ÁO</span>
                        <button class="catagory-btn">Xem chi tiết</button>
                    </div>
                </a>
            </div>
            <div class="catagory-box">
                <a href="product.php?category=3" class="box-accessories">
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
                <!-- <a class="product" data-id="1">
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
                <?php $loadProduct->products();?>
                
            </div>
        </div>
        <a href="product.php" class="more-btn">xem nhiều hơn</a>
    </section>
    <!-- END TRENDING -->

    <!-- DETAIL -->
    <section id="detail">
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
<script>
        // VARIABLES
    const menu = [
        {
            id: 1,
            title: 'Boots Da Chelsea Màu Đen',
            category: 'shoes',
            price: '850.000 ₫',
            img: './images/pro1.webp',
            img1: './images/pro1.1.webp',
            img2: './images/pro1.2.webp',
        },
        {
            id: 2,
            title: 'Ủng dây xích màu đen',
            category: 'shoes',
            price: '2.150.000 ₫',
            img: './images/pro2.jpg',
            img1: './images/pro2.1.jpg',
            img2: './images/pro2.2.jpg',
        },
        {
            id: 3,
            title: 'Thắt lưng 2 mặt | Phiên bản giới hạn',
            category: 'accessories',
            price: '750.000 ₫',
            img: './images/pro3.jpg',
            img1: './images/pro3.1.jpg',
            img2: './images/pro3.2.jpg',
        },
        {
            id: 4,
            title: 'Thắt lưng Rowan Ajon [B.L 2]',
            category: 'accessories',
            price: '450.000 ₫',
            img: './images/pro4.jpg',
            img1: './images/pro4.1.jpg',
        },
        {
            id: 5,
            title: 'Ví dài Rown đơn bản',
            category: 'accessories',
            price: '450.000 ₫',
            img: './images/pro5.jpg',
            img1: './images/pro5.1.webp',
            img2: './images/pro5.2.webp',
        },
        {
            id: 6,
            title: 'Áo Sơ Mi Âm Thanh',
            category: 'clothing',
            price: '420.000 ₫',
            img: './images/pro6.jpg',
            img1: './images/pro6.1.jpg',
            img2: './images/pro6.2.jpg',
        },
        {
            id: 7,
            title: 'Boots da có khóa kéo màu đen',
            category: 'shoes',
            price: '1.950.000 ₫',
            img: './images/pro7.jpg',
            img1: './images/pro7.1.jpg',
            img2: './images/pro7.2.jpg',
        },
        {
            id: 8,
            title: 'Boots Da Màu Đen',
            category: 'shoes',
            price: '2.150.000 ₫',
            img: './images/pro8.jpg',
            img1: './images/pro8.1.jpg',
            img2: './images/pro8.2.png',
        },
        {
            id: 9,
            title: 'Boots Chelsea màu đen',
            category: 'shoes',
            price: '850.000 ₫',
            img: './images/pro9.jpg',
            img1: './images/pro9.1.jpg',
            img2: './images/pro9.2.jpg',
        },
        {
            id: 10,
            title: 'Boots Chelsea da lộn màu đen',
            category: 'shoes',
            price: '850.000 ₫',
            img: './images/pro10.jpg',
            img1: './images/pro10.1.jpg',
            img2: './images/pro10.2.jpg',
        },
        {
            id: 11,
            title: 'Boots Chelsea da lộn màu be',
            category: 'shoes',
            price: '850.000 ₫',
            img: './images/pro11.jpg',
            img1: './images/pro11.1.jpg',
            img2: './images/pro11.2.jpg',
        },
        {
            id: 12,
            title: 'Boots da Chelsea màu đen',
            category: 'shoes',
            price: '1.590.000 ₫',
            img: './images/pro12.jpg',
            img1: './images/pro12.1.jpg',
            img2: './images/pro12.2.jpg',
        },
        {
            id: 13,
            title: 'Boots Theia khóa kéo bằng vàng',
            category: 'shoes',
            price: '1.990.000 ₫',
            img: './images/pro13.jpg',
            img1: './images/pro13.1.jpg',
            img2: './images/pro13.2.jpg',
        },
        {
            id: 14,
            title: 'Boots da lộn',
            category: 'shoes',
            price: '2.150.000 ₫',
            img: './images/pro14.jpg',
            img1: './images/pro14.1.jpg',
            img2: './images/pro14.2.jpg',
        },
        {
            id: 15,
            title: 'Boots Snake khóa kéo',
            category: 'shoes',
            price: '2.390.000 ₫',
            img: './images/pro15.jpg',
            img1: './images/pro15.1.jpg',
            img2: './images/pro15.2.jpg',
        },
        {
            id: 16,
            title: 'Quần Rowan Jean Skinny màu đen',
            category: 'clothing',
            price: '500.000 ₫',
            img: './images/pro16.jpg',
            img1: './images/pro16.1.jpg',
            img2: './images/pro16.2.webp',
        },
        {
            id: 17,
            title: 'Rowan Waxed Skinny Jeans màu đen',
            category: 'clothing',
            price: '500.000 ₫',
            img: './images/pro17.jpg',
            img1: './images/pro17.1.jpg',
            img2: './images/pro17.2.jpg',
        },
        {
            id: 18,
            title: 'Thắt lưng Rowan Aiioy [B.L]',
            category: 'accessories',
            price: '450.000 ₫',
            img: './images/pro18.jpg',
            img1: './images/pro18.1.jpg',
            img2: './images/pro18.2.jpg',
        },
        {
            id: 19,
            title: 'Thắt lưng Rowan Aiioy [BN]',
            category: 'accessories',
            price: '450.000 ₫',
            img: './images/pro19.jpg',
            img1: './images/pro19.1.jpg',
        },
        {
            id: 20,
            title: 'Túi Rowan Gile (Da Thật)',
            category: 'clothing',
            price: '750.000 ₫',
            img: './images/pro20.jpg',
            img1: './images/pro20.1.jpg',
            img2: './images/pro20.2.jpg',
        },
    ]
    const row = document.querySelector('.row')
    const filterProducts = document.querySelectorAll('.cate-box')
    const productTitles = document.querySelectorAll('.cate-text h4')
    const productDetail = document.querySelector('#detail')
    const cartBtn = document.querySelector('.cart')
    const cartDetail = document.querySelector('#cart')
    const closeCart = document.querySelector('.cart-header div')
    const cartOverlay = document.querySelector('.cart-overlay')
    const cartBody = document.querySelector('.cart-body')
    const sum = document.querySelector('.sum span')

    let userLoggedIn = <?php if(isset($_SESSION['userLoggedIn'])) echo "true"; else echo "false" ?>;


    var cart = <?php echo $cartItems; ?>;
    renderItemsToCart();
    console.log(cart);
    <?php $data = $loadProduct->listProducts()?>
    const listProducts = <?php echo json_encode($data); ?>
    // ENVENT
    window.addEventListener('DOMContentLoaded', function () {
        // renderProducts(products)
        renderFilterProducts()
        titlesClick()
        toggleCart()
        addClickEventProduct()
    })


    // function renderProducts(productItems) {
    //     const products = productItems.map((product) => {
    //         return `
    //             <a class="product" data-id="${product.id}">
    //                 <div class="pro-top">
    //                     <img src="${product.image_1}" alt="">
    //                 </div>
    //                 <div class="pro-bottom">
    //                     <p class="pro-title">${product.name_product}</p>
    //                     <div class="pro-rate">
    //                         <i class="fa-solid fa-star"></i>
    //                         <i class="fa-solid fa-star"></i>
    //                         <i class="fa-solid fa-star"></i>
    //                         <i class="fa-solid fa-star"></i>
    //                         <i class="fa-solid fa-star"></i>
    //                     </div>
    //                     <p class="pro-price">${product.price}</p>
    //                 </div>
    //             </a>
    //         `
    //     })
    //     .join('')
    //     row.innerHTML = products
    //     const productBoxes = document.querySelectorAll('.product')
    //     productBoxes.forEach(function (product) {
    //         product.addEventListener('click', function (e) {
    //             console.log(product)
    //             const productId = e.currentTarget.dataset.id
    //             productDetail.classList.add('show')
    //             const productClick = menu.filter(function(item) {
    //                 if(item.id === parseInt(productId)) {
    //                     return item
    //                 }
    //             })
    //             renderProductDetail(productClick)
    //         })
    //     })
    // }

    function addClickEventProduct(){
        const productBoxes = document.querySelectorAll('.product')
        productBoxes.forEach(function (product) {
            product.addEventListener('click', function (e) {
                const productId = e.currentTarget.dataset.id
                productDetail.classList.add('show')

                const productClick = listProducts.filter(function(item) {
                    if(item.product_id == parseInt(productId)) {
                        return item
                    }
                })
                renderProductDetail(productClick)
            })
        })
    }


    function renderFilterProducts() {
        filterProducts.forEach(function(filterProduct) {
            filterProduct.addEventListener('click', function(e) {
                const category = e.currentTarget.dataset.id
                const productCategory = menu.filter(function(product) {
                    if(product.category === category) {
                        return product
                    }
                })
                if(category === "all") {
                    renderProducts(menu)
                }
                else {
                    renderProducts(productCategory)
                }
            })
        })
    }



    var cartCountElement;
    cartCountElement = document.querySelector('#cart-count');
    let selectedSize = ''; // Biến toàn cục để lưu giá trị size được chọn
    let selectedNumber = 1;






    function renderProductDetail(productClick) {
        productDetail.innerHTML = `
            <div class="detail">
                <div class="detail-container">
                    <div class="detail-left">
                        <img class="main-img" src="${productClick[0].image_1}" alt="">
                        <div class="small-img">
                            <img src="${productClick[0].image_1}" alt="">
                            <img src="${productClick[0].image_2}" alt="">
                            <img src="${productClick[0].image_3}" alt="">
                        </div>
                    </div>
                    <div class="detail-right">
                    <form action="" method="POST">
                        <h1 class="detail-title">${productClick[0].name_product}</h1>
                        <p class="detail-price">${productClick[0].price}</p>
                        <ul>
                            <li>Chất liệu: ${productClick[0].material}</li>
                            <li>Màu sắc:  ${productClick[0].color}</li>
                            <li>Công nghệ: ${productClick[0].technology}</li>
                            <li>Thiết kế và sản xuất: ${productClick[0].producer}</li>
                        </ul>
                        <p class="weight"><span>Trọng lượng: </span>${productClick[0].weight}</p>
                        <p class="size"><span>Size: </span>${productClick[0].size}</p>
                        <div class="conmmition">
                            <div class="conmmition-container">
                                <div class="small-commit">
                                    <img src="./images/cmit1.png" alt="">
                                    <div class="commit-text">
                                        <h4>cam kết chính hãng</h4>
                                        <p>Hàng chính hãng  ₫úng chất lượng</p>
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
                                        <h4> ₫ổi trả nhanh chóng</h4>
                                        <p> ₫ổi hàng nếu không vừa ý</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size-pickup">
                            <span class = "size">Size: </span>
                            <select name="product_size" id="sizeSelect">
                            </select>
                        </div>
                        <div class="quantity">
                            <span>Số lượng: </span>
                            <div class="input-container" id ="values">
                                <input type="button" value="-" class="minus">
                                <input name = "quanity" type="quantity" value="1" class="number" id ="number" step="1" min="1" max="100">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <button class="add-btn" value = "${productClick[0].product_id}" name = "product_id">thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="detail-overlay"></div>
        `
        const sizeSelect = document.getElementById('sizeSelect');
        let listOption = ''
        listSize = productClick[0].size.split(',')
        listSize.forEach(function(size) {
            listOption += `<option value="${size}">${size}</option>`;
        });
        sizeSelect.innerHTML = listOption
            sizeSelect.addEventListener('change', function() {
            selectedSize = sizeSelect.value; // Gán giá trị size được chọn vào biến toàn cục
        });

        const numberInput = document.getElementById('number');
    // Gán giá trị ban đầu cho biến selectedNumber
        numberInput.value = selectedNumber;
        numberInput.addEventListener('change', function() {
        selectedNumber = parseInt(numberInput.value);
        });
    

        productsDetail()
        // const addBtn= document.querySelector('.add-btn')
        // addBtn.addEventListener('click', function() {
            //size sản phẩm
        // var sizeSelect = document.querySelector('.size-pickup select');
        // var selectedSize = sizeSelect.value;
            // if (selectedSize === '') {
            //     Swal.fire({
            //     icon: 'error',
            //     title: 'Vui lòng chọn kích thước trước khi thêm vào giỏ hàng',
            //     showConfirmButton: false,
            //     timer: 1200
            //     });
            //     return;
            // }
            // else{
                // cart.forEach(function(item) {
                //     // console.log(item.product_id, '     ', productClick[0].product_id)
                //     if (item.product_id === productClick[0].product_id && item.product_size == productClick[0].product_size) { // if id = id && size = size
                //         // tang so luong san pham da co
                //         Swal.fire({
                //             icon: 'info',
                //             title: 'Sản phẩm đã được thêm vào giỏ hàng trước đó',
                //             showConfirmButton: false,
                //             timer: 1200
                //         });
                //         return;
                //     }
                //     else{
                //         // tao detail card
                //     }
                // });
                // var currentCount = parseInt(cartCountElement.textContent); // Value current
                // var newCount = currentCount + 1;
                // cartCountElement.textContent = newCount; 
                // cart.push(...productClick)
                // productDetail.classList.remove('show')
                // renderItemsToCart()
                // cartDetail.classList.add('show')
            // }

        // })
        
    }


    function renderItemsToCart() {
        const cartItem = cart.map(function(item) {
            return `
                <div class="cart-item" data-id="${item.cart_detail_id}">
                    <div class="cart-content">
                        <img src="${item.image_1}" alt="">
                        <div class="cart-info">
                            <h4>${item.name_product}</h4>
                            <span class="size">Size: ${item.product_size}</span>
                            <div>
                                <input class="quantity-input" type="number" name="" id="" value="${item.quantity}" min="1" max="100" step="1">
                                <span>x</span>
                                <span class="cart-price">${item.price}</span>
                            </div>
                        </div>
                    </div>
                    <a href="deleteCart.php?cart_detail_id=${item.cart_detail_id}"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>
            `;
            // <i class="fa-solid fa-circle-xmark"></i>
        })
        .join('')
        cartBody.innerHTML = cartItem
        const cartItems = document.querySelectorAll('.cart-item')
        const quantityInputs = document.querySelectorAll('.quantity-input')
        inputChange(quantityInputs, cartItems)
        updateCart(cartItems)
        removeItem(cartItems)
    }




    function toggleCart() {

        cartBtn.addEventListener('click', function () {
            cartDetail.classList.add('show')
        })
        closeCart.addEventListener('click', function() {
            cartDetail.classList.remove('show')
        })
        cartOverlay.addEventListener('click', function() {
            cartDetail.classList.remove('show')
        })
    }

    function removeItem(cartItems) {
        cartItems.forEach(function(item) {
            item.addEventListener('click', function(e) {
                const removeIcon = e.target.classList.contains('fa-circle-xmark')
                if (cartCountElement.textContent < 1) {
                    cartCountElement.textContent = 0;
                } else {
                    cartCountElement.textContent -= 1;
                }              
                if(removeIcon) {
                    cart = cart.filter(function(item) {
                        if(item.cart_detail_id !== parseInt(removeItemId)) {
                            return item
                        }
                    })
                    renderItemsToCart()
                }
            })
        })
    }



    function checkOut_clear() {
        if (cart.length > 0) {
            // Giỏ hàng có sản phẩm, cho phép thanh toán
            // cart = [];
            renderItemsToCart();
            cartCountElement.textContent = 0;  
            Swal.fire({
                icon: 'success',
                title: 'Xóa giỏ hàng thành công!',
                showConfirmButton: false,
                timer: 1200
            });
            hideModal();
        } else {
            // Giỏ hàng không có sản phẩm, hiển thị thông báo
            Swal.fire({
                icon: 'error',
                title: 'Vui lòng thêm sản phẩm trước khi xóa sản phẩm trong vào giỏ hàng',
                showConfirmButton: false,
                timer: 1200
            });
        }
    }


    document.addEventListener('DOMContentLoaded', function() {
        const clearButton = document.querySelector('.clear');

        clearButton.addEventListener('click', checkOut_clear);
    });



    // function checkLogin() {
    // // Kiểm tra trạng thái đăng nhập
    // if (userLoggedIn) {
    //     return true; // Người dùng đã đăng nhập
    // } else {
    //     return false; // Người dùng chưa đăng nhập
    // }
    // }


    function checkOut() {
        if (userLoggedIn) {
            // Người dùng đã đăng nhập
            if (cart.length > 0) {
                // Giỏ hàng có sản phẩm, cho phép thanh toán
                // cart = [];
                renderItemsToCart();
                cartCountElement.textContent = 0;  
                Swal.fire({
                    icon: 'success',
                    title: 'Thanh toán thành công!',
                    showConfirmButton: false,
                    timer: 1200
                });
                hideModal();
            } else {
                // Giỏ hàng không có sản phẩm, hiển thị thông báo
                Swal.fire({
                    icon: 'error',
                    title: 'Vui lòng thêm sản phẩm trước khi thanh toán',
                    showConfirmButton: false,
                    timer: 1200
                });
            }
        } else {
            // Người dùng chưa đăng nhập, hiển thị thông báo và chuyển đến trang đăng nhập
            Swal.fire({
                icon: 'warning',
                title: 'Cần đăng nhập!',
                text: 'Vui lòng đăng nhập trước khi thanh toán.',
                confirmButtonText: 'OK',
            }).then(function() {
                // Chuyển đến trang đăng nhập
                window.location.href = 'login.php'; // Thay 'duong_dan_dang_nhap' bằng đường dẫn đến trang đăng nhập của bạn
            });
        }
    }




    document.addEventListener('DOMContentLoaded', function() {
        const payButton = document.querySelector('.pay');

        payButton.addEventListener('click', checkOut);
    });

    function inputChange(quantityInputs, cartItems) {
        quantityInputs.forEach(function (input) {
            input.addEventListener('change', function() {
                if(isNaN(input.value) || input.value <= 0) {
                    input.value = 1
                }   
                updateCart(cartItems)
            })
        })
    }

    function titlesClick() {
        productTitles.forEach(function(title) {
            title.addEventListener('click', function () {
                const titleClick = document.querySelector('.cate-text h4.click')
                titleClick.classList.remove('click')
                this.classList.add('click')
            })
        })
    }



    function productsDetail() {
        const smallImg = document.querySelectorAll('.small-img img')
        const mainImg = document.querySelector('.main-img')
        const minusBtn = document.querySelector('.minus')
        const plusBtn = document.querySelector('.plus')
        const inputQuantity = document.querySelector('.number')
        const productDetail = document.querySelector('#detail')
        const detailOverlay = document.querySelector('.detail-overlay')
    

        detailOverlay.addEventListener('click', function() {
            productDetail.classList.remove('show')
        })
        plusBtn.addEventListener('click', function() {
            inputQuantity.value++
        })
        minusBtn.addEventListener('click', function() {
            if(inputQuantity.value < 1) {
                inputQuantity.value = 1
            }
            inputQuantity.value--
        })

        smallImg.forEach(function(img) {
            img.addEventListener('click', function() {
                const src = img.getAttribute('src')
                mainImg.setAttribute('src', src)
            })
        })
    }


    function updateCart(cartItems) {
        let total = 0
        cartItems.forEach(function (cartItem) {
            const price = parseFloat(cartItem.querySelector('.cart-price').innerHTML.replace(' ₫', '').replace('.', '').replace('.', ''))
            const quantityInput = cartItem.querySelector('.quantity-input')
            const quantity = parseFloat(quantityInput.value)
            total += (price * quantity)
        })
        var totals = total.toLocaleString();
        sum.innerHTML = total.toLocaleString() + ' ₫'   
    }

    // const closeModal = document.querySelector('.close-modal')
    // const overlay = document.querySelector('.overlay')
    // const contactBtn = document.querySelector('.contact__ques-btn')
    // const modal = document.querySelector('#modal')
    // contactBtn.addEventListener('click', showModal)
    // closeModal.addEventListener('click', hideModal)
    // overlay.addEventListener('click', hideModal)

    // function showModal() {
    //     modal.classList.add('show')
    // }
    // function hideModal() {
    //     modal.classList.remove('show')
    // }


</script>
