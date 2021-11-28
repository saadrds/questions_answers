<?php
session_start();
require_once('connexion.php');
$id = $_GET["id"]; 

    
        $conn = new myConnection();
        $conn->connect();
        try{
        $result = $conn->deletePost($id);
        header('Location: myposts.php');
        }
        
       
        catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
          }
        
      
    
?>
