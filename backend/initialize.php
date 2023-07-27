<?php 
ob_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once "config.php";
require_once "function.php";
spl_autoload_register(function($class){
    require_once "classes/{$class}.php";
});

session_start();

$account = new Account;
$loadProduct = new Products;
$cart = new Cart;
$orders = new Order;
$contact = new Contact;



$cartItems = isset($_SESSION['userLoggedIn']) ? json_encode($cart->getAllItems($_SESSION['userLoggedIn'])) : json_encode(array());
    $userIsLogged = isset($_SESSION['userLoggedIn']) ? $_SESSION['userLoggedIn'] : -1;
    if($userIsLogged != -1){
        $user = $account->getUserInfo($userIsLogged);
        if(is_post_request() && $userIsLogged != -1 && isset($_POST['product_id']) && !isset($_POST['update'])){
            $cart->updateCartDetail($_SESSION['userLoggedIn'], $_POST['product_id'], $_POST['product_size'], $_POST['quanity']);
            $cartItems = json_encode($cart->getAllItems($_SESSION['userLoggedIn']));

            // $cart->addItemToCart($userIsLogged, $_POST['product_id'], $_POST['product_size'], $_POST['quanity']);
            // redirect_to(url_for("index.php"));
        }
    }
