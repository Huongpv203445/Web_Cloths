<?php require_once "backend/initialize.php";?>
<?php

if(isset($_GET['cart_detail_id'])){
    $cart->deleteDetailCard($_GET['cart_detail_id']);
    redirect_to(url_for("index.php"));
    
}
?>