<?php

require_once "backend/initialize.php";

if(isset($_SESSION['userLoggedIn'])){
   log_out_user();   
   redirect_to(url_for("login.php"));
}else{
    redirect_to(url_for("index.php"));
}

