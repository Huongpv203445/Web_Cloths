<?php

class Products{

    private $pdo;

    public function __construct(){
        $this->pdo=Database::instance();
    }

      public function products(){
        // $stmt=$this->pdo->prepare("SELECT * FROM `tweets`, `users` WHERE `tweetBy` = `user_id` AND `user_id`=:userId ORDER BY postedOn DESC LIMIT :num");
       $stmt=$this->pdo->prepare("SELECT * FROM `products` LIMIT 3");
        // $stmt->bindParam(":userId",$user_id,PDO::PARAM_INT);
        // $stmt->bindParam(":num",$num,PDO::PARAM_INT);
        $stmt->execute();
        $products=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach($products as $product){
             echo '<a class="product" data-id="'.$product->product_id.'">
             <div class="pro-top">
                 <img src="'.url_for($product->image_1).'" alt="">
             </div>
             <div class="pro-bottom">
                 <p class="pro-title">'.$product->name_product.'</p>
                 <div class="pro-rate">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                 </div>
                 <p class="pro-price">'.$product->price.' VND</p>
             </div>
         </a>';
       }
       

    }
}
?>