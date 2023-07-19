<?php require_once "backend/initialize.php";?>
<?php 
if($_GET['product_id']){
    $loadProduct->deleteProduct($_GET['product_id']);
    redirect_to(url_for("product_admin.php"));
}

?>