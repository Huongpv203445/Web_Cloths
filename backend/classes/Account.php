<?php 
class Account{
  private $pdo;
  private $errorArray = array();
  public function __construct(){
    $this->pdo=Database::instance();
 }
 


  public function register($email,$username,$address,$phone_number,$password_1,$password_2){
    $this->validateUsername($username);
    $this->validateEmails($email);
    $this->validatePassword($password_1,$password_2);
    $this->validatePhoneNumber($phone_number);
    if(empty($this->errorArray)){
      return $this->insertUserDetails($email,$username,$address,$phone_number,$password_1,$password_2);
    }else{
        return false;
    }
  }



  public function login($username,$password){
    $pass_hash=$this->getHashPassword($username);
    $stmt=$this->pdo->prepare("SELECT * FROM `users` WHERE (`username`=:username AND `password`=:password) OR (`email`=:username AND password=:password)");
    $stmt->bindParam(":password",$pass_hash,PDO::PARAM_STR);
    $stmt->bindParam(":username",$username,PDO::PARAM_STR);
    $stmt->execute();
    $user=$stmt->fetch(PDO::FETCH_OBJ); 
    $count=$stmt->rowCount();
    if($count != 0){
        if(password_verify($password,$pass_hash)){
            return $user->user_id;
        }else{
            array_push($this->errorArray,Constant::$loginPasswordFailed);
            return false;
        }
          }else{
              array_push($this->errorArray,Constant::$loginPasswordFailed);
              return false;
          }

  }

  private function getHashPassword($username){
    $stmt=$this->pdo->prepare("SELECT `password` FROM `users` WHERE `username`=:username OR `email`=:username");
    $stmt->bindParam(":username",$username,PDO::PARAM_STR);
    $stmt->execute();
    $user=$stmt->fetch(PDO::FETCH_OBJ);
    $count=$stmt->rowCount();
    if($count != 0){
        return $user->password;
    }else{
        return false;       
    }
  }      

  public function insertUserDetails($email,$username,$address,$phone_number,$password){
    $pass_hash=password_hash($password,PASSWORD_BCRYPT);
    echo $pass_hash;
    $stmt=$this->pdo->prepare("INSERT INTO users (email,username,address,phone_number,password) VALUES (:email,:username,:address,:phone_number,:password)");
    $stmt->bindParam(":email",$email,PDO::PARAM_STR);
    $stmt->bindParam(":username",$username,PDO::PARAM_STR);
    $stmt->bindParam(":address",$address,PDO::PARAM_STR);
    $stmt->bindParam(":phone_number",$phone_number,PDO::PARAM_STR);
    $stmt->bindParam(":password",$pass_hash,PDO::PARAM_STR);

    $stmt->execute();

    return $this->pdo->lastInsertId();
  }

  private function validateUsername($fn){
       
    if($this->length($fn,2,25)){
        return array_push($this->errorArray,Constant::$firstNameCharacters);
    }
  }

  private function checkUsernameExist($username){
    $stmt=$this->pdo->prepare("SELECT * FROM `users` WHERE username=:username");
    $stmt->bindParam(":username",$username,PDO::PARAM_STR);
    $stmt->execute();
    $count=$stmt->rowCount();
    if($count >0){
        return true;
    }else{
        return false;
    }
  }

  private function validateEmails($em){
    $stmt=$this->pdo->prepare("SELECT * FROM `users` WHERE email=:email");
    $stmt->bindParam(":email",$em,PDO::PARAM_STR);
    $stmt->execute();
    $count=$stmt->rowCount();
    if($count >0){
        return array_push($this->errorArray,Constant::$emailInUse);
    }
    if(!filter_var($em,FILTER_VALIDATE_EMAIL)){
        return array_push($this->errorArray,Constant::$emailInValid);
    }
  }
  
  private function validatePassword($pw,$pw2){
    if($pw != $pw2){
        return array_push($this->errorArray,Constant::$passwordDoNotMatch);
    }
    if(preg_match("/[^A-Za-z0-9]/",$pw)){
        return array_push($this->errorArray,Constant::$passwordNotAlphanumeric);
    }
    if($this->length($pw,5,30)){
        return array_push($this->errorArray,Constant::$passwordLength);
    }
  }

  private function validatePhoneNumber($phone_number){
    if(!ctype_digit($phone_number)){
        return array_push($this->errorArray,Constant::$phoneNumberContainLetter);
    }
  }
  
  private function length($input,$min,$max){
    if(strlen($input) < $min){
        return true;
    }else if(strlen($input) > $max){
        return true;
    }
  }
  public function getErrorMessage($error){
    if(in_array($error,$this->errorArray)){
        return "<span class='errorMessage'>$error</span>";
    }
  }

  public function getUserInfo($user_id){
      $stmt=$this->pdo->prepare("SELECT * FROM `users` WHERE `user_id`=:userId");
        $stmt->bindParam(":userId",$user_id,PDO::PARAM_INT);
        $stmt->execute();
        $user=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $user[0];
  }
  
}

?>