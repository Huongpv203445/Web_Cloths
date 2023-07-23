<?php 
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