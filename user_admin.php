<?php require_once "backend/initialize.php";?>

<?php
    $users = $account->getAllUsers();
?>
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
                    <h2>Danh sách người dùng</h2>
                </div>
                <div class="cart">
                    <table class="table-design">
                        <tr>
                            <th>STT</th>
                            <th>Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Phân quyền</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php 
                            for($i = 0; $i < count($users); $i++){
                              $stt = $i + 1;
                              $columns = '<tr><td>'.$stt.'</td>
                              <td>'.$users[$i]->user_id.'</td>
                              <td>'.$users[$i]->username.'</td>
                              <td>'.$users[$i]->phone_number.'</td>
                              <td>'.$users[$i]->email.'</td>
                              <td>'.$users[$i]->address.'</td>';
                              if($users[$i]->is_admin){
                                $columns.='<td>Quản trị viên</td>';
                              }
                              else{
                                $columns.='<td>Người dùng</td>';
                              }
                              $columns.='<td>
                                  <div class="action">
                                  <div class="edit-link"><a href="#">Sửa</a></div>
                                  <div class="delete-link"><a href="#">Xóa</a></div>
                                  </div>
                              </td></tr>';
                            echo $columns;
                            }
                          ?>
                        <!-- <tr>
                            <td>1</td>
                            <td>KH01</td>
                            <td>Khách hàng1</td>
                            <td>09871262</td>
                            <td>khachhang1@gmail.com</td>
                            <td>Hà Tây, Hà Nội</td>
                            <td>Người dùng</td>
                            <td>
                                <div class="action">
                                <div class="edit-link"><a href="#">Sửa</a></div>
                                <div class="delete-link"><a href="#">Xóa</a></div>
                                </div>
                            </td>
                           
                        </tr> -->
                        <!-- Thêm các hàng dữ liệu khác vào đây -->
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