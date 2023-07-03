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