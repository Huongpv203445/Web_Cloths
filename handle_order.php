<?php require_once "backend/initialize.php";?>

<?php 
 $listOrders = $cart->getAllItems($_SESSION['userLoggedIn']);
 $total_price = 0;
 foreach($listOrders as $order){
    $product_price = $loadProduct->getOneProduct($order->product_id)->price;
    $total_price += $product_price * $order->quantity;
    $order_detail_id = $orders->createOrderDetail($order->product_id, $order->product_size, $order->quantity);
    $orders->addOnOrder($order_detail_id, $_SESSION['userLoggedIn'], $total_price);
 }
 $cart->removeAllItem($_SESSION['userLoggedIn']);
 redirect_to('index.php');

?>