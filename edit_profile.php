<?php 
session_start();
if(!array_key_exists("nom",$_SESSION)){
    header('Location: login.php');

}

require_once('connexion.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = test_input($_POST["nom"]);
    $prenom = test_input($_POST["prenom"]);
    $password = test_input($_POST["password"]);
    $mail = test_input($_POST["mail"]);
    $conn = new myConnection();
    $conn->connect();
    try{
    $conn->update_user($_SESSION['id'],$nom,$prenom,$mail,$password);
    echo "<p class='text-success'> <strong>Vos informations sont bien mises à jour </strong><p>";
    $_SESSION['nom'] = $nom;
    $_SESSION["prenom"] = $prenom;
    $_SESSION["mail"] = $mail;
    $_password["password"] =$password;
}catch(PDOException $e){
    echo $e->getMessage();
}}
?>
<!doctype html>
    <html>
                            <head>
                                

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<style>
    body{
        background-color : #9f32;
        margin:100px;

    }
                                
        .note{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}</style>
<body>
    <div class="all">
<div class="container register-form">
    <h1>EZ DEV</h1>
            <div class="form">
                <div class="note">
                    <p>Edit your Profile.</p>
                </div>
                <form action="edit_profile.php" method="post">
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <span>nom</span> <input type="text" class="form-control" placeholder="nom*" name="nom" value="<?php echo $_SESSION['nom'];?>"/>
                            </div>
                            <div class="form-group">
                            <span>prenom</span> <input type="text" class="form-control" placeholder="prenom*" name="prenom" value="<?php echo $_SESSION['prenom'];?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span>password</span><input type="text" class="form-control" placeholder="password" name="password" value="<?php echo $_SESSION['password'];?>"/>
                            </div>
                            <div class="form-group">
                            <span>email</span><input type="text" class="form-control" placeholder="mail" name="mail" value="<?php echo $_SESSION['mail'];?>"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit">Submit</button>
                </div>
</form>
            </div>
        </div>

</div>
</body>
</html>