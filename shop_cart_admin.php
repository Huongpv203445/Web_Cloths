<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Rowan Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/product_admin.css">
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <nav class="nav" >
        <div class="toggle_menu"><ion-icon name="menu-outline"></ion-icon></div>
        <ul>
            <li><a href="product_admin.php"> <ion-icon name="cart-outline"></ion-icon>
                Quản lý sản phẩm
            </a>
            </li>
            <li><a href="shop_cart_admin.php"> <ion-icon name="cube-outline"></ion-icon>
                Quản lý đơn hàng
            </a></li>
            <li><a href="user_admin.php"> <ion-icon name="people-outline"></ion-icon>
                Quản lý người dùng
            </a></li>
            <!-- <li><a href="toggle_admin.php"> <ion-icon name="document-text-outline"></ion-icon>
                Báo cáo thống kê
            </a></li> -->
            <li><a href="logout.php"> <ion-icon name="log-out-outline"></ion-icon>
                Đăng xuất
            </a></li>
        </ul>
    </nav>
</body>
<body>
    <section>
        <div class="content">
            <div class="cart">
                <div class="cart_header">
                    <h2>Danh sách đơn hàng</h2>
                </div>
                <div class="cart">
                    <table class="table-design">
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Mã khách hàng</th>
                            <th>Người nhận</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th>Xác nhận đơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>DH001</td>
                            <td>SP001</td>
                            <td>Nguyễn Văn A</td>
                            <td>0989100256</td>
                            <td>Hà Nội</td>
                            <td>100,000 đ</td>
                            <td>Đang giao hàng</td>
                            <td>
                                <div class="action">
                                <div class="edit-link"><a href="#">Nhận</a></div>
                                <div class="delete-link"><a href="#">Hủy</a></div>
                                </div>
                            </td>
                            <td>
                                <div class="action">
                                <div class="edit-link"><a href="#">Sửa</a></div>
                                <div class="delete-link"><a href="#">Xóa</a></div>
                                </div>
                            </td>
                           
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    const nav = document.querySelector('nav');
    const toggle_menu = document.querySelector('.toggle_menu');
    const content = document.querySelector('.content');
    toggle_menu.onclick = function() {
        nav.classList.toggle('hide');
        content.classList.toggle('expand');
    }
</script>