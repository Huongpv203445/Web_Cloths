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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết đơn hàng</th>
                            <th>Xác nhận đơn hàng</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>SP001</td>
                            <td>Nguyễn Văn A</td>
                            <td>0989100256</td>
                            <td>Hà Nội</td>
                            <td>Đang giao hàng</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_1">
                              Chi tiết
                            </button></td>
                            <td>
                                <div class="action">
                                <div class="edit-link"><a href="#">Nhận</a></div>
                                <div class="delete-link"><a href="#">Hủy</a></div>
                                </div>
                            </td> 
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

   <!-- The Modal -->
   <div class="modal" id="myModal_1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thông tin chi tiết đơn hàng</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
  <!-- Nội dung modal 2 ở đây -->
  <table>
    <tr>
      <th>Mã đơn hàng: </th>
      <td>01</td>
    </tr>
    <tr>
      <th>Mã khách hàng:</th>
      <td>KH01</td>
    </tr>
    <tr>
      <th>Tên khách hàng:</th>
      <td>Nguyễn Văn A</td>
    </tr>
    <tr>
      <th>Địa chỉ nhận hàng:</th>
      <td>Từ Sơn</td>
    </tr>
    <tr>
      <th>Email người nhận:</th>
      <td>nguyenvanA@gamil.com</td>
    </tr>
    <tr>
      <th>Số điện thoại:</th>
      <td>097516118</td>
    </tr>
    <tr>  
    <tr>
        <th>Tổng tiền: </th>
        <td>10000đ</td>
    </tr>
    <tr>
        <th>Trạng thái: </th>
        <td> Đang giao hàng</td>
    </tr>
    <tr>
      <th>Ngày tạo đơn: </th>
      <td>24/06/2023</td>
    </tr>
  </table>
</div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
      </div>

    </div>
  </div>
</div>

<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ccc;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  td {
    font-size: 16px;
    color: #333;
  }
</style>



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