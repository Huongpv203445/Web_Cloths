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
                <input type="text" placeholder="Tìm Kiếm">
                <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="right-box">
                <div class="login">
                    <div><a href="login.php">ĐĂNG NHẬP</a> / <a href="login.php">ĐĂNG KÝ</a></div>
                </div>
                <a class="cart" onclick = "toggleCart()">
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