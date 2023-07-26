<?php

class Order{

    private $pdo;


    public function __construct(){
        $this->pdo=Database::instance();
    }

    public function createOrderDetail($product_id, $product_size, $quantity){
        $currentDateTime = date("Y-m-d");
        $stmt=$this->pdo->prepare("INSERT INTO `order_detail`(`product_id`, `quantity`, `product_size`, `status`,`created_date`) VALUES (:product_id, :quantity, :product_size, 'Đang chờ xác nhận', :currentDate)");
        $stmt->bindParam(":product_id",$product_id,PDO::PARAM_INT);
        $stmt->bindParam(":product_size",$product_size,PDO::PARAM_STR);
        $stmt->bindParam(":currentDate",$currentDateTime,PDO::PARAM_STR);
        $stmt->bindParam(":quantity",$quantity,PDO::PARAM_INT);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }

    public function addOnOrder($order_detail_id, $user_id, $total_price){
        $stmt=$this->pdo->prepare("INSERT INTO `orders`(`order_detail_id`, `user_id`, `total_price`) VALUES (:order_detail_id, :user_id, :total_price)");
        $stmt->bindParam(":order_detail_id",$order_detail_id,PDO::PARAM_INT);
        $stmt->bindParam(":user_id",$user_id,PDO::PARAM_INT);
        $stmt->bindParam(":total_price",$total_price,PDO::PARAM_INT);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }


    public function getAllOrders(){
        $stmt=$this->pdo->prepare("
        SELECT
                                    orders.*,
                                    users.*,
                                    order_detail.*
                                FROM
                                    orders
                                INNER JOIN users ON users.user_id = orders.user_id
                                INNER JOIN order_detail ON order_detail.order_detail_id = orders.order_detail_id
        ");
        $stmt->execute();
        $orders=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $orders;
    }

    public function acceptOrder($order_detail_id){
        $stmt=$this->pdo->prepare("
        UPDATE `order_detail` SET `status`='Đã nhận đơn' WHERE `order_detail_id` = :order_detail_id
        ");
        $stmt->bindParam(":order_detail_id",$order_detail_id,PDO::PARAM_INT);

        $stmt->execute();
    }

    public function deleteOrder($order_detail_id){
        $stmt=$this->pdo->prepare("
        DELETE FROM `order_detail` WHERE `order_detail_id` = :order_detail_id
        ");
        $stmt->bindParam(":order_detail_id",$order_detail_id,PDO::PARAM_INT);

        $stmt->execute();
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
                                