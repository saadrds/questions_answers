<?php 
session_start();
if(!array_key_exists("nom",$_SESSION)){
    header('Location: login.php');

}

echo "edit profile here";

require_once('connexion.php'); ?>