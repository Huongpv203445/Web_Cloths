<?php require_once "backend/initialize.php";?>

<?php
    if(isset($_SESSION['userLoggedIn'])){
        if(isset($_POST['contact'])){
            // var_dump($_POST['content']);
            $contact->sendMail($_SESSION['userLoggedIn'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['content']);
            redirect_to('index.php');
        }
    }

    
?>