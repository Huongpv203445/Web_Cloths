<?php require_once "backend/initialize.php";?>
<?php
    if(isset($_GET['order_detail_id'])){
        $orders->acceptOrder($_GET['order_detail_id']);
    }
    redirect_to(url_for("shop_cart_admin.php"));


?>