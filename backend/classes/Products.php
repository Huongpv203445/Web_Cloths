<?php

class Products{

    private $pdo;


    public function __construct(){
        $this->pdo=Database::instance();
    }

      public function products(){
        // $stmt=$this->pdo->prepare("SELECT * FROM `tweets`, `users` WHERE `tweetBy` = `user_id` AND `user_id`=:userId ORDER BY postedOn DESC LIMIT :num");
       $stmt=$this->pdo->prepare("SELECT * FROM `products`");
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
    public function listProducts(){
        $stmt=$this->pdo->prepare("SELECT * FROM `products`");
        $stmt->execute();
        $products=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    public function getOneProduct($id){
        $stmt=$this->pdo->prepare("SELECT * FROM `products` WHERE `product_id` = :id");
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $products=$stmt->fetch(PDO::FETCH_OBJ);
        return $products;
    }


    public function filterProducts($q){
        $stmt=$this->pdo->prepare("SELECT * FROM `products` WHERE `name_product` LIKE '%".$q.'%\'');
        // $stmt->bindValue(":q",'%'.$q.'%');
        // $search = '%'.$q.'%';
        // $stmt->bindParam(":q",$search);
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

    public function getCategoryName($id){
        $stmt=$this->pdo->prepare("SELECT * FROM `categories` WHERE `category_id`=:id");
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $category=$stmt->fetch(PDO::FETCH_OBJ); 
        return $category;
    }

    public function getAllCategories(){
        $stmt=$this->pdo->prepare("SELECT * FROM `categories`");
        $stmt->execute();
        $categories=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    

    public function addProduct($category_id, $name_product, $size, $weight, $color, $material, $technology, $producer, $image_1, $image_2, $image_3, $price, $quantity_product){
        $stmt = $this->pdo->prepare("INSERT INTO `products`
        (`category_id`, `name_product`, `size`, `weight`, `color`, `material`,
         `technology`, `producer`, `image_1`, `image_2`, `image_3`, `price`,`quantity_product`) 
         VALUES (:category_id, :name_product, :size, :weight, :color, :material,
        :technology, :producer, :image_1, :image_2, :image_3, :price, :quantity_product)");
        $stmt->bindParam(":category_id",$category_id,PDO::PARAM_STR);
        $stmt->bindParam(":name_product",$name_product,PDO::PARAM_STR);
        $stmt->bindParam(":size",$size,PDO::PARAM_STR);
        $stmt->bindParam(":weight",$weight,PDO::PARAM_STR);
        $stmt->bindParam(":color",$color,PDO::PARAM_STR);
        $stmt->bindParam(":material",$material,PDO::PARAM_STR);
        $stmt->bindParam(":technology",$technology,PDO::PARAM_STR);
        $stmt->bindParam(":producer",$producer,PDO::PARAM_STR);
        $stmt->bindParam(":image_1",$image_1,PDO::PARAM_STR);
        $stmt->bindParam(":image_2",$image_2,PDO::PARAM_STR);
        $stmt->bindParam(":image_3",$image_3,PDO::PARAM_STR);
        $stmt->bindParam(":price",$price,PDO::PARAM_INT);
        $stmt->bindParam(":quantity_product",$quantity_product,PDO::PARAM_INT);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
    public function getProductWithCI($id){
        $stmt=$this->pdo->prepare("SELECT * FROM `products` WHERE `category_id`=:id");
        $stmt->bindParam(":id",$id,PDO::PARAM_STR);
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

    public function deleteProduct($id){
        $stmt=$this->pdo->prepare("DELETE FROM `products` WHERE  `product_id`=:id");
        $stmt->bindParam(":id",$id,PDO::PARAM_STR);
        $stmt->execute();
    }
    public function updateProduct($product_id, $category_id, $name_product, $size, $weight, $color, $material, $technology, $producer, $image_1, $image_2, $image_3, $price, $quantity_product){
        $stmt = $this->pdo->prepare("UPDATE `products` SET `category_id`=:category_id,`name_product`=:name_product,`size`=:size,`weight`=:weight,`color`=:color,`material`=:material,`technology`=:technology,`producer`=:producer,`image_1`=:image_1,`image_2`=:image_2,`image_3`=:image_3,`price`=:price,`quantity_product`=:quantity_product WHERE `product_id`=:product_id");
        $stmt->bindParam(":category_id",$category_id,PDO::PARAM_STR);
        $stmt->bindParam(":product_id",$product_id,PDO::PARAM_STR);
        $stmt->bindParam(":name_product",$name_product,PDO::PARAM_STR);
        $stmt->bindParam(":size",$size,PDO::PARAM_STR);
        $stmt->bindParam(":weight",$weight,PDO::PARAM_STR);
        $stmt->bindParam(":color",$color,PDO::PARAM_STR);
        $stmt->bindParam(":material",$material,PDO::PARAM_STR);
        $stmt->bindParam(":technology",$technology,PDO::PARAM_STR);
        $stmt->bindParam(":producer",$producer,PDO::PARAM_STR);
        $stmt->bindParam(":image_1",$image_1,PDO::PARAM_STR);
        $stmt->bindParam(":image_2",$image_2,PDO::PARAM_STR);
        $stmt->bindParam(":image_3",$image_3,PDO::PARAM_STR);
        $stmt->bindParam(":price",$price,PDO::PARAM_INT);
        $stmt->bindParam(":quantity_product",$quantity_product,PDO::PARAM_INT);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}


?>