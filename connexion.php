<?php
class myConnection{
    public $connection;
    function __construct() {
        $servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=q_and_a", $username, $password);
  
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $this->connection = $conn;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    }
public function connect(){
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=q_and_a", $username, $password);
  $connection = $this->connection;
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}}

public function getAllPosts(){
    $qry = 'select * from post'; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    
}

public function findPostById($id){
    $qry = 'select * from post where id = '.$id ; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    

}
public function findPostByUser($id){
  $qry = 'select * from post where id_user = '.$id ; // Your query
  $result = $this->connection -> query($qry); // execute query
  return $result;
  

}


public function findUserById($fname){
    $qry = 'select * from user where id =' . $fname; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    
}

public function findUserByMailandPassword($mail, $password){
    $qry = "select * from user where mail =  '$mail' and password = '$password'"; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    
}

public function findCommentsByPost($post){
    $qry = 'select * from commentaire  where id_post =' . $post; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    
}

public function new_post($titre,$categorie,$contenu,$id_user){
    $date = date("Y-m_d");
    $sql = "INSERT INTO post (titre, date,categorie, contenu,id_user)
  VALUES ('$titre','$date','$categorie','$contenu','$id_user')";
  // use exec() because no results are returned
  $this->connection->exec($sql);
}

public function new_comment($description,$id_user,$id_post){
    $date = date("Y-m_d");
    $sql = "INSERT INTO commentaire (date, description, id_post,id_user)
  VALUES ('$date','$description','$id_post','$id_user')";
  // use exec() because no results are returned
  $this->connection->exec($sql);
}

public function new_user($nom,$prenom,$mail,$password){
  $date = date("Y-m_d");
  $sql = "INSERT INTO user(nom, prenom, date_inscription, password, mail)
VALUES ('$nom','$prenom','$date','$password','$mail')";
// use exec() because no results are returned
$this->connection->exec($sql);
}
public function deletePost($id){
  $qry = 'delete from post where id_post =' . $id; // Your query
  $result = $this->connection -> query($qry); // execute query
  return $result;
  
}



}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}