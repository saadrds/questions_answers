<?php
session_start();
require_once('connexion.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cat = test_input($_POST["cat"]);
        $titre = test_input($_POST["titre"]);
        $question = test_input($_POST["question"]);
        $id_user = $_SESSION['id'];
        $conn = new myConnection();
        $conn->connect();
        try{
        $result = $conn->new_post($titre,$cat,$question,$id_user);
        header('Location: main.php');
                }
                
        catch(PDOException $e) {
            echo  "<br>" . $e->getMessage();
          }
        
      }
    
?>