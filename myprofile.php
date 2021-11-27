<?php 
session_start();
if(!array_key_exists("nom",$_SESSION)){
    header('Location: login.php');

}

require_once('connexion.php'); ?>
<html><head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>  <link rel="stylesheet" href="styles.css">
<style>
    * {
    margin: 0;
    padding: 0
}

body {
    background-color: #0b588b
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.5)
}

.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #150347;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
</style>

</head>

<body>
    <br>
    <br>
    <div class=" d-flex mt-2"> <a href="main.php"><button class="btn1 btn-primary" style="margin: 0 0 0 10px;">My Feed</button> </div></a>

<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="user.png" height="100" width="100" /></button> <span class="name mt-3"><?php echo $_SESSION['nom']." ". $_SESSION['prenom']; ?></span> <span class="idd">@<?php echo $_SESSION['nom']; ?></span>
            <div class=" d-flex mt-2"> <a href="edit_profile.php"><button class="btn1 btn-dark">Edit Profile</button> </div></a>
            <div class="text mt-3"> <span> Mail : <?php echo $_SESSION['mail']; ?><br><br></span> </div>
            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
            <div class=" px-2 rounded mt-4 date "> <span class="join">Joined <?php echo $_SESSION['date_inscription'];?></span> </div>
        </div>
    </div>
</div>

    
</div>                            <script type="text/javascript"></script></body></html>