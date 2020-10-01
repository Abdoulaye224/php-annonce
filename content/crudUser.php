<?php
session_start();

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

if (isset($_POST['validUpdate'])){
    if(isset($_POST['login']) AND isset($_POST['mail']) AND isset($_POST['password'])){
        if (!empty($_POST['login']) AND !empty($_POST['mail']) AND !empty($_POST['password'])) {
        $userId = $_SESSION['id'];
        $login = $_POST['login'];
        $email = $_POST['mail'];
        //$password = $_POST['password'];
    
        $password = sha1($_POST['password']);

        $query = $bdd->prepare("UPDATE user SET login='$login', email='$email', password='$password' WHERE id=$userId ");
        $query->execute();

        header("location: disconnect.php");
    }
}

}

?>
