<?php
class Contact{

    private $pdo;


    public function __construct(){
        $this->pdo=Database::instance();
    }

    public function sendMail($user_id, $name, $email, $phone, $addr, $content){
        $stmt=$this->pdo->prepare("INSERT INTO `contacts`(`user_id`, `content`, `name`, `email`, `phone`, `address`) VALUES (:user_id, :content,:name,:email,:phone,:address)");
        $stmt->bindParam(":user_id",$user_id,PDO::PARAM_INT);
        $stmt->bindParam(":content",$content,PDO::PARAM_STR);
        $stmt->bindParam(":email",$email,PDO::PARAM_STR);
        $stmt->bindParam(":name",$name,PDO::PARAM_STR);
        $stmt->bindParam(":phone",$phone,PDO::PARAM_STR);
        $stmt->bindParam(":address",$addr,PDO::PARAM_STR);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}

?>