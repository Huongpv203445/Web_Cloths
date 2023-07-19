<?php $pageTitle='ROWAN | Managerment'; ?>
<?php require_once "backend/initialize.php";?>
<?php 
  $categories = $loadProduct->getAllCategories();
  $listProducts = $loadProduct->listProducts();
  if(is_post_request() && isset($_POST['add'])){
    // var_dump($_FILES['image_1']);
    $path1 = 'media/'.$_FILES['image_1']['full_path'];
    $path2 = 'media/'.$_FILES['image_2']['full_path'];
    $path3 = 'media/'.$_FILES['image_3']['full_path'];
    $priceINT = intval($_POST['price']);
    $quantityINT = intval($_POST['quantity']);

    $loadProduct->addProduct($_POST['category_id'],$_POST['name_product'],$_POST['size'],$_POST['weight'],$_POST['color'],$_POST['material'],$_POST['technology'],$_POST['producer'], $path1, $path2,$path3, $priceINT,$quantityINT);
    $listProducts = $loadProduct->listProducts();

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
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
                    <h2>Danh sách sản phẩm</h2>
                </div>
                <div class="cart">
                    <table class="table-design">
                        <tr>
                            <th>STT</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Danh mục</th>
                            <th>Giá</th>
                            <th>Thao tác</th>
                        </tr>
                        
                          <?php 

                            for($i = 0; $i < count($listProducts); $i++){
                              $stt = $i + 1;
                              $category_id = $listProducts[$i]->category_id;
                              echo '<tr><td>'.$stt.'</td>
                              <td>'.$listProducts[$i]->product_id.'</td>
                              <td>'.$listProducts[$i]->name_product.'</td>
                              <td><img src="'.url_for($listProducts[$i]->image_1).'" alt="Ảnh sản phẩm"></td>
                              <td>'.$listProducts[$i]->quantity_product.'</td>
                              <td>'.$loadProduct->getCategoryName($category_id)->name.'</td>
                              <td>'.$listProducts[$i]->price.'đ</td>
                              <td>
                                  <div class="action">
                                  <div class="edit-link"><a href="#">Sửa</a></div>
                                  <div class="delete-link"><a href="deleteProduct.php/?product_id='.$listProducts[$i]->product_id.'">Xóa</a></div>
                                  </div>
                              </td></tr>';
                            }
                          ?>
                        
                        <!-- Thêm các hàng dữ liệu khác vào đây -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Thêm sản phẩm
                        </button>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm sản phẩm</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="contaniner">   
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" placeholder="" id="img" name="add" value="add Product" style = "display: none;">
        <div class="form-group">
          <label for="mdm">Mã danh mục:</label>
          <div class="category">
                            <select name="category_id" id="categories">
                            </select>
                        </div>
        </div>
       
        <div class="form-group">
          <label for="product_name">Tên sản phẩm:</label>
          <input type="text" class="form-control" placeholder="Tên sản phẩm" id="pname" name="name_product">
        </div>
        <div class="form-group">
            <label for="img">Hình ảnh 1:</label>
            <input type="file" class="form-control" placeholder="" id="img" name="image_1">
            <img id="previewImage" src="#">
        </div>
        <div class="form-group">
            <label for="img">Hình ảnh 2:</label>
            <input type="file" class="form-control" placeholder="" id="img1" name = "image_2">
            <img id="previewImage1" src="#" >
        </div>
        <div class="form-group">
            <label for="img">Hình ảnh 3:</label>
            <input type="file" class="form-control" placeholder="" id="img2" name = "image_3">
            <img id="previewImage2" src="#" >
        </div>
        <div class="form-group">
          <label for="quantity">Số lượng: </label>
          <input type="text" class="form-control" placeholder="12000...." id="quantity" name = "quantity">
        </div>
        <div class="form-group">
            <label for="size">Kích thước: </label>
            <input type="text" class="form-control" placeholder="Kích thước...." id="size" name = "size">
        </div>
        <div class="form-group">
          <label for="weight">Trọng lượng: </label>
          <input type="text" class="form-control" placeholder="Trọng lượng...." id="weight" name = "weight">
        </div>
        <div class="form-group">
          <label for="color">Màu sắc: </label>
          <input type="text" class="form-control" placeholder="Màu sắc...." id="color" name = "color">
        </div>
        <div class="form-group">
          <label for="material">Chất liệu: </label>
          <input type="text" class="form-control" placeholder="Chất liệu...." id="material" name = "material">
        </div>
        <div class="form-group">
          <label for="tech">Công nghệ: </label>
          <input type="text" class="form-control" placeholder="Công nghệ...." id="tech" name = "technology">
        </div>
        <div class="form-group">
          <label for="producer">Thương hiệu: </label>
          <input type="text" class="form-control" placeholder="Thương hiệu...." id="producer" name = "producer">
        </div>
        <div class="form-group">
          <label for="tech">Đơn Giá: </label>
          <input type="text" class="form-control" placeholder="Giá...." id="tech" name = "price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>   
      <style>
        img {
            width: 200px;
            height: auto;
            max-height: 300px;
            margin-top: 10px;
        }
        .btn{
            margin: 10px;
        }
      </style>
    </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
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

<script>
const imageInput = document.getElementById('img');
const previewImage = document.getElementById('previewImage');

const imageInput1 = document.getElementById('img1');
const previewImage1 = document.getElementById('previewImage1');

const imageInput2 = document.getElementById('img2');
const previewImage2 = document.getElementById('previewImage2');

imageInput.addEventListener('change', function() {
  const file = imageInput.files[0];
  const reader = new FileReader();

  reader.addEventListener('load', function() {
    previewImage.src = reader.result;
  });

  if (file) {
    reader.readAsDataURL(file);
  }
});

imageInput1.addEventListener('change', function() {
  const file = imageInput1.files[0];
  const reader = new FileReader();

  reader.addEventListener('load', function() {
    previewImage1.src = reader.result;
  });

  if (file) {
    reader.readAsDataURL(file);
  }
});

imageInput2.addEventListener('change', function() {
  const file = imageInput2.files[0];
  const reader = new FileReader();

  reader.addEventListener('load', function() {
    previewImage2.src = reader.result;
  });

  if (file) {
    reader.readAsDataURL(file);
  }
});

const categoriesSelect = document.getElementById('categories');
let listOption = ''
let selectCategory = ''
listCategories = <?php echo json_encode($categories);?>;
listCategories.forEach(function(category) {
  listOption += `<option value="${category.category_id}">${category.name}</option>`;
});
categoriesSelect.innerHTML = listOption
categoriesSelect.addEventListener('change', function() {
  selectCategory = categoriesSelect.value; // Gán giá trị size được chọn vào biến toàn cục
});
</script>
