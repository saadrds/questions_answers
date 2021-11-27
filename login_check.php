<?php
session_start();
require_once('connexion.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = test_input($_POST["user"]);
        $password = test_input($_POST["password"]);
        echo $user . " " .$password;
        $conn = new myConnection();
        $conn->connect();
        $result = $conn->findUserByMailandPassword($user,$password)->fetchAll();

        if(count($result)){
            $result_user = $result[0];
            $_SESSION["mail"] = $result_user['mail'];
            $_SESSION["password"] = $result_user['password'];
            $_SESSION["date_inscription"] = $result_user['date_inscription'];
            $_SESSION["nom"] = $result_user['nom'];
            $_SESSION["prenom"] = $result_user['prenom'];
            $_SESSION["id"] = $result_user['id'];
            header('Location: main.php'); 
        }
        else{
            header('Location: login.php?var=err'); 
        }
        
      }
    
?>