<?php

class Order{

    private $pdo;


    public function __construct(){
        $this->pdo=Database::instance();
    }

    public function createOrderDetail($product_id, $product_size, $quantity){
        $stmt=$this->pdo->prepare("INSERT INTO `order_detail`(`product_id`, `quantity`, `product_size`) VALUES (:product_id, :quantity, :product_size)");
        $stmt->bindParam(":product_id",$product_id,PDO::PARAM_INT);
        $stmt->bindParam(":product_size",$product_size,PDO::PARAM_STR);
        $stmt->bindParam(":quantity",$quantity,PDO::PARAM_INT);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }

    public function addOnOrder($order_detail_id, $user_id, $total_price){
        $stmt=$this->pdo->prepare("INSERT INTO `orders`(`order_detail_id`, `user_id`, `total_price`, `status`) VALUES (:order_detail_id, :user_id, :total_price, 'Đang chờ xác nhận')");
        $stmt->bindParam(":order_detail_id",$order_detail_id,PDO::PARAM_INT);
        $stmt->bindParam(":user_id",$user_id,PDO::PARAM_INT);
        $stmt->bindParam(":total_price",$total_price,PDO::PARAM_INT);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}
?>
<!-- 
SELECT
                                    *
                                FROM
                                    orders
                                INNER JOIN users ON orders.user_id = users.user_id
                                INNER JOIN cart ON cart.user_id = users.user_id           
                                INNER JOIN cart_detail ON cart_detail.cart_detail_id = cart.cart_detail_id
                                INNER JOIN products ON products.product_id = cart_detail.product_id -->
                                