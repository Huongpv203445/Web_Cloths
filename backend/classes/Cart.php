<?php

class Cart{

    private $pdo;
    private $errorArray = array();

    public function __construct(){
        $this->pdo=Database::instance();
    }

    public function getAllItems($user_id){
       $stmt=$this->pdo->prepare("SELECT
                                    cart.*,
                                    cart_detail.*,
                                    products.*
                                FROM
                                    cart_detail
                                INNER JOIN cart ON cart_detail.cart_detail_id = cart.cart_detail_id
                                INNER JOIN products ON cart_detail.product_id = products.product_id
                                WHERE cart.user_id = :userId");
        $stmt->bindParam(":userId",$user_id,PDO::PARAM_INT);
        $stmt->execute();
        $items=$stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $items;
    }

    public function addItemToCart($user_id, $product_id, $product_size, $quanity){
        if($user_id != -1){
            $cart_detail_id = $this->createCartDetail($product_id, $product_size, $quanity);
            $stmt=$this->pdo->prepare("INSERT INTO `cart`(`user_id`, `cart_detail_id`) VALUES (:userId,:cart_detail_id)");
            $stmt->bindParam(":userId",$user_id,PDO::PARAM_INT);
            $stmt->bindParam(":cart_detail_id",$cart_detail_id,PDO::PARAM_INT);
            $stmt->execute();
            return $this->pdo->lastInsertId();
        }
        else{
            require_to('login.php');
        }
        
    }

    public function createCartDetail($product_id, $product_size, $quanity){
        $stmt=$this->pdo->prepare("INSERT INTO `cart_detail`(`product_id`, `quantity`, `product_size`) VALUES (:product_id, :quanity, :product_size)");
        $stmt->bindParam(":product_id",$product_id,PDO::PARAM_INT);
        $stmt->bindParam(":product_size",$product_size,PDO::PARAM_STR);
        $stmt->bindParam(":quanity",$quanity,PDO::PARAM_INT);
        $stmt->execute();
        return $this->pdo->lastInsertId();

    }

    public function getErrorMessage($error){
        if(in_array($error,$this->errorArray)){
            return "<span class='errorMessage'>$error</span>";
        }
    }

    public function deleteDetailCard($id){
        $stmt=$this->pdo->prepare("SELECT * FROM `cart_detail` WHERE `cart_detail_id` = :id");
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $card_detail=$stmt->rowCount();
        if($card_detail > 0){
            $stmt=$this->pdo->prepare("DELETE FROM `cart_detail` WHERE `cart_detail_id` = :id");
            $stmt->bindParam(":id",$id,PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }
        else{
            array_push($this->errorArray,"Have some wrong!");
              return false;
        }
    }

    public function updateCartDetail($user_id, $product_id, $product_size, $quanity){
        $stmt=$this->pdo->prepare("SELECT
                                    quantity, cart_detail.cart_detail_id
                                FROM
                                    cart_detail
                                INNER JOIN cart ON cart_detail.cart_detail_id = cart.cart_detail_id
                                WHERE cart.user_id = :user_id AND cart_detail.product_id = :product_id AND cart_detail.product_size = :product_size");
        $stmt->bindParam(":product_id",$product_id,PDO::PARAM_INT);
        $stmt->bindParam(":user_id",$user_id,PDO::PARAM_INT);
        $stmt->bindParam(":product_size",$product_size,PDO::PARAM_STR);
        $stmt->execute();
        $cart_detail=$stmt->fetch(PDO::FETCH_OBJ); 
        if($cart_detail){
            $cart_detail_id = $cart_detail->cart_detail_id;
            $update_quanity= $cart_detail->quantity + $quanity;
            $stmt=$this->pdo->prepare("UPDATE `cart_detail` SET `quantity`=:quantity  WHERE `cart_detail_id` = :cart_detail_id");
            $stmt->bindParam(":cart_detail_id",$cart_detail_id,PDO::PARAM_STR);
            $stmt->bindParam(":quantity",$update_quanity,PDO::PARAM_INT);
            $stmt->execute();
        }
        else{
                $cart_detail_id = $this->createCartDetail($product_id, $product_size, $quanity);
                $stmt=$this->pdo->prepare("INSERT INTO `cart`(`user_id`, `cart_detail_id`) VALUES (:userId,:cart_detail_id)");
                $stmt->bindParam(":userId",$user_id,PDO::PARAM_INT);
                $stmt->bindParam(":cart_detail_id",$cart_detail_id,PDO::PARAM_INT);
                $stmt->execute();
                return $this->pdo->lastInsertId();
        }
    }

}
?>