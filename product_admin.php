<?php $pageTitle='ROWAN | Managerment'; ?>
<?php require_once "backend/initialize.php";?>
<?php 
  $categories = $loadProduct->getAllCategories();
  $listProducts = $loadProduct->listProducts();
  if(is_post_request()){
    // var_dump($_FILES['image_1']);
    $path1 = 'media/'.$_FILES['image_1']['full_path'];
    $path2 = 'media/'.$_FILES['image_2']['full_path'];
    $path3 = 'media/'.$_FILES['image_3']['full_path'];
    $priceINT = intval($_POST['price']);
    $quantityINT = intval($_POST['quantity']);
    if(isset($_POST['add'])){
      $loadProduct->addProduct($_POST['category_id'],$_POST['name_product'],$_POST['size'],$_POST['weight'],$_POST['color'],$_POST['material'],$_POST['technology'],$_POST['producer'], $path1, $path2,$path3, $priceINT,$quantityINT);
    }
    if(isset($_POST['update'])){
      // echo $path1;
      $loadProduct->updateProduct($_POST['product_id'], $_POST['category_id'],$_POST['name_product'],$_POST['size'],$_POST['weight'],$_POST['color'],$_POST['material'],$_POST['technology'],$_POST['producer'], $path1, $path2,$path3, $priceINT,$quantityINT);
    }
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
                            <th>Danh mục</th>
                            <th>Số lượng</th>
                            <th>Chi tiết sản phẩm</th>
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
                              <td>'.$loadProduct->getCategoryName($category_id)->name.'</td>
                              <td>'.$listProducts[$i]->quantity_product.'</td>
                              <td>
                              <button type="button" class="btn btn-primary detail_product" data-toggle="modal" data-target="#myModal_1" data-id = '.$listProducts[$i]->product_id.'>
                              Chi tiết
                              </button>
                              </td>
                              <td>
                                  <div class="action">
                                  <div>
                                      <button type="button" class="btn btn-primary edit_btn" data-toggle="modal" data-target="#edit" data-id = '.$listProducts[$i]->product_id.'>
                                      Sửa
                                      </button>

                                  </div>
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
<div class="modal" id="myModal_1">

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











    <!-- The Modal  -->
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
        <input type="text" class="form-control" placeholder="" name="add" value="add Product" style = "display: none;">
        <div class="form-group">
          <label for="mdm">Mã danh mục:</label>
          <div class="category">
                            <select name="category_id" id="categories" class="categories">
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
            <img id="previewImage" src="#"/>
        </div>
        <div class="form-group">
            <label for="img">Hình ảnh 2:</label>
            <input type="file" class="form-control" placeholder="" id="img1" name = "image_2">
            <img id="previewImage1" src="#" />
        </div>
        <div class="form-group">
            <label for="img">Hình ảnh 3:</label>
            <input type="file" class="form-control" placeholder="" id="img2" name = "image_3">
            <img id="previewImage2" src="#" />
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
<!-- Edit form -->
<div class="modal" id="edit">

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

// const categoriesSelect = document.getElementById('categories');
// let listOption = ''
// let selectCategory = ''
// listCategories = <?php //echo json_encode($categories);?>;
// listCategories.forEach(function(category) {
//   listOption += `<option value="${category.category_id}">${category.name}</option>`;
// });
// categoriesSelect.innerHTML = listOption
// categoriesSelect.addEventListener('change', function() {
//   selectCategory = categoriesSelect.value; // Gán giá trị size được chọn vào biến toàn cục
// });

const categoriesSelect = document.querySelectorAll('.categories');
let listOption = ''
let selectCategory = ''
listCategories = <?php echo json_encode($categories);?>;
listCategories.forEach(function(category) {
  listOption += `<option value="${category.category_id}">${category.name}</option>`;
});
categoriesSelect.forEach(function (category) {
  category.innerHTML = listOption
  category.addEventListener('change', function() {
    selectCategory = category.value; // Gán giá trị size được chọn vào biến toàn cục
  });
})




const productBoxes = document.querySelectorAll('.detail_product')
const productDetail = document.getElementById('myModal_1')
const listProducts = <?php echo json_encode($listProducts); ?>;
const editForm = document.getElementById('edit')
const editBoxes = document.querySelectorAll('.edit_btn')

productBoxes.forEach(function (product) {
  product.addEventListener('click', function (e) {
  const productId = e.currentTarget.dataset.id
    const productClick = listProducts.filter(function(item) {
       if(item.product_id == parseInt(productId)) {
          return item
       }
    })
    renderProductDetail(productClick)
  })
})

editBoxes.forEach(function (editBoxe) {
  editBoxe.addEventListener('click', function (e) {
  const productId = e.currentTarget.dataset.id
  const productClick = listProducts.filter(function(item) {
       if(item.product_id == parseInt(productId)) {
          return item
       }
    })
    renderEditForm(productClick)
    const imageUpdateInput = document.getElementById('update-img');
    const previewImageUpdate = document.getElementById('update-previewImage');

    const imageUpdateInput1 = document.getElementById('update-img1');
    const previewImageUpdate1 = document.getElementById('update-previewImage1');

    const imageUpdateInput2 = document.getElementById('update-img2');
    const previewImageUpdate2 = document.getElementById('update-previewImage2');
    imageUpdateInput.addEventListener('change', function() {
          const file = imageUpdateInput.files[0];
          const reader = new FileReader();

          reader.addEventListener('load', function() {
            previewImageUpdate.src = reader.result;
          });

          if (file) {
            reader.readAsDataURL(file);
          }
        });


    imageUpdateInput1.addEventListener('change', function() {
          const file = imageUpdateInput1.files[0];
          const reader = new FileReader();

          reader.addEventListener('load', function() {
            previewImageUpdate1.src = reader.result;
          });

          if (file) {
            reader.readAsDataURL(file);
          }
        });


    imageUpdateInput2.addEventListener('change', function() {
          const file = imageUpdateInput2.files[0];
          const reader = new FileReader();

          reader.addEventListener('load', function() {
            previewImageUpdate2.src = reader.result;
          });

          if (file) {
            reader.readAsDataURL(file);
          }
        });
    
  })
})

function renderEditForm(productClick){
  const category = productClick[0].category_id
  editForm.innerHTML = `
  <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sửa sản phẩm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <div class="contaniner">   
      <form action="" method="POST" enctype="multipart/form-data">
          <input type="text"  name="update" value="update"  style = "display: none;">
          <input type="text"  name="product_id" value="${productClick[0].product_id}"  style = "display: none;">
          <div class="form-group">
            <label for="mdm">Mã danh mục:</label>
            <div class="category">
                              <select name="category_id" id="categories" class="categories">
                              <option value="1" ${category == 1 ? "selected":""}>Giày</option>
                              <option value="2" ${category == 2 ? "selected":""}>Quần Áo</option>
                              <option value="3" ${category == 3 ? "selected":""}>Phụ Kiện</option>
                              </select>
                          </div>
          </div>
        
          <div class="form-group">
            <label for="product_name">Tên sản phẩm:</label>
            <input type="text" class="form-control" placeholder="Tên sản phẩm" id="pname" value = "${productClick[0].name_product}" name="name_product">
          </div>
          <div class="form-group">
              <label for="img">Hình ảnh 1:</label>
              <input type="file" class="form-control"  placeholder="" id="update-img" name="image_1">
              <img id="update-previewImage" src="${productClick[0].image_1}"/>
          </div>
          <div class="form-group">
              <label for="img">Hình ảnh 2:</label>
              <input type="file" class="form-control" placeholder="" id="update-img1" name = "image_2">
              <img id="update-previewImage1" src="${productClick[0].image_2}" />
          </div>
          <div class="form-group">
              <label for="img">Hình ảnh 3:</label>
              <input type="file" class="form-control" placeholder="" id="update-img2" name = "image_3">
              <img id="update-previewImage2" src="${productClick[0].image_3}" />
          </div>
          <div class="form-group">
            <label for="quantity">Số lượng: </label>
            <input type="text" class="form-control" placeholder="12000...." id="quantity" value = "${productClick[0].quantity_product}" name = "quantity">
          </div>
          <div class="form-group">
              <label for="size">Kích thước: </label>
              <input type="text" class="form-control" placeholder="Kích thước...." value = "${productClick[0].size}"id="size" name = "size">
          </div>
          <div class="form-group">
            <label for="weight">Trọng lượng: </label>
            <input type="text" class="form-control" placeholder="Trọng lượng...." id="weight" value = "${productClick[0].weight}"name = "weight">
          </div>
          <div class="form-group">
            <label for="color">Màu sắc: </label>
            <input type="text" class="form-control" placeholder="Màu sắc...." id="color" value = "${productClick[0].color}"name = "color">
          </div>
          <div class="form-group">
            <label for="material">Chất liệu: </label>
            <input type="text" class="form-control" placeholder="Chất liệu...." id="material" value = "${productClick[0].material}"name = "material">
          </div>
          <div class="form-group">
            <label for="tech">Công nghệ: </label>
            <input type="text" class="form-control" placeholder="Công nghệ...." id="tech" value = "${productClick[0].technology}"name = "technology">
          </div>
          <div class="form-group">
            <label for="producer">Thương hiệu: </label>
            <input type="text" class="form-control" placeholder="Thương hiệu...." id="producer" value = "${productClick[0].producer}"name = "producer">
          </div>
          <div class="form-group">
            <label for="tech">Đơn Giá: </label>
            <input type="text" class="form-control" placeholder="Giá...." id="tech"value = "${productClick[0].price}" name = "price">
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
  `
}

function renderProductDetail(productClick) {
        productDetail.innerHTML = `
        <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Thông tin chi tiết sản phẩm</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
      <!-- Nội dung modal 2 ở đây -->
      <table>
        <tr>
          <th>Mã sản phẩm: </th>
          <td>${productClick[0].product_id}</td>
        </tr>
        <tr>
          <th>Tên sản phẩm:</th>
          <td>${productClick[0].name_product}</td>
        </tr>
        <tr>
          <th>Kích thước:</th>
          <td>${productClick[0].size}</td>
        </tr>
        <tr>
          <th>Màu sắc: </th>
          <td>${productClick[0].color}</td>
        </tr>
        <tr>  
          <th>Trọng lượng: </th>
          <td>${productClick[0].weight}</td>
        </tr>
        <tr>
          <th>Chất liệu:</th>
          <td>${productClick[0].material}</td>
        </tr>
        <tr>
          <th>Công nghệ: </th>
          <td>${productClick[0].technology}</td>
        </tr>
        <tr>
          <th>Số lượng:</th>
          <td>${productClick[0].quantity_product}</td>
        </tr>
        <tr>
          <th>Đơn giá:</th>
          <td>${productClick[0].price} VND</td>
        </tr>
        <tr>
          <th>Ngày nhập hàng: </th>
          <td>${productClick[0].createdDate} </td>
        </tr>
      </table>
    </div>  

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
          </div>

        </div>
  </div>`
}


</script>
