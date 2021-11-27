<?php
session_start();
require_once('connexion.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = test_input($_POST["nom"]);
        $prenom = test_input($_POST["prenom"]);
        $password = test_input($_POST["password"]);
        $mail = test_input($_POST["mail"]);
        $conn = new myConnection();
        $conn->connect();
        try{
        $result = $conn->new_user($nom,$prenom,$mail,$password);
        echo "vous etes bien inscrit dans notre site , retour vers la page de login pour se connecter : ";
        }?>
        <a href="login.php">page login</a>
        <?php
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
        
      }
    
?>