<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Rowan Admin</title>
    <link rel="stylesheet" href="/css/admin.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <nav class="" >
        <div class="toggle_menu"><ion-icon name="menu-outline"></ion-icon></div>
        <ul>
            <li><a href="#"> <ion-icon name="cart-outline"></ion-icon>
                Quản lý sản phẩm
            </a>
            </li>
            <li><a href=""> <ion-icon name="cube-outline"></ion-icon>
                Quản lý đơn hàng
            </a></li>
            <li><a href="#"> <ion-icon name="people-outline"></ion-icon>
                Quản lý khách hàng
            </a></li>
            <li><a href="#"> <ion-icon name="document-text-outline"></ion-icon>
                Báo cáo thống kê
            </a></li>
            <li><a href="#"> <ion-icon name="log-out-outline"></ion-icon>
                Đăng xuất
            </a></li>
        </ul>
    </nav>
    <section>
       <div class="content">
            <div class="cart">
                <div class="cart_header">
                    <h2>Danh sách sản phẩm</h2>
                </div>
                <div class="car">
                    <table class = "thear-dark">
                        <tr>
                            <th>STT</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                            <th></th>
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
</html>