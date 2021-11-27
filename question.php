<?php require_once('connexion.php'); 
session_start();
if(!array_key_exists("nom",$_SESSION)){
    header('Location: login.php');

}?>
<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>body {
    background-color: #f7f6f6
}

.card {
    border: none;
    box-shadow: 5px 6px 6px 2px #e9ecef;
    border-radius: 4px
}

.dots {
    height: 4px;
    width: 4px;
    margin-bottom: 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block
}

.badge {
    padding: 7px;
    padding-right: 9px;
    padding-left: 16px;
    box-shadow: 5px 6px 6px 2px #e9ecef
}

.user-img {
    margin-top: 4px
}

.check-icon {
    font-size: 17px;
    color: #c3bfbf;
    top: 1px;
    position: relative;
    margin-left: 3px
}

.form-check-input {
    margin-top: 6px;
    margin-left: -24px !important;
    cursor: pointer
}

.form-check-input:focus {
    box-shadow: none
}

.icons i {
    margin-left: 8px
}

.reply {
    margin-left: 12px
}

.reply small {
    color: #b7b4b4
}

.reply small:hover {
    color: green;
    cursor: pointer
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <form>
                                    <br>

</form>
                                <?php $id = $_GET["id"]; 
                                ?>
                                                                <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="headings d-flex justify-content-between align-items-center mb-3">
                <h5>Question :</h5>
                
            </div>
            <?php $conn = new myConnection();
            $conn->connect();
            $posts = $conn->findPostById($id)->fetchAll();
            
            foreach ($posts as $value) {
               ?>
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                <?php
                                    $result = $conn->findUserById($value['id_user'])->fetchAll();
                                    $nameUser = $result[0]['nom'] . ' '. $result[0]['prenom'];
                                ?>
                    <div class="user d-flex flex-row align-items-center">  <span><small class="font-weight-bold text-primary"><?php echo $nameUser; ?> : </small> <br> <small class="font-weight-bold"><?php echo $value[1]; ?></small></span> </div> <small><?php echo $value['date']; ?></small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                </div>
            </div>
            <?php }?>

            <br><br>
            <h5>Commentaires : </h5>
<?php $conn = new myConnection();
            $conn->connect();
            $comments = $conn->findCommentsByPost($id)->fetchAll();
            
            foreach ($comments as $value) {
               ?>

            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                <?php
                                    $result = $conn->findUserById($value['id_user'])->fetchAll();
                                    $nameUser = $result[0]['nom'] . ' '. $result[0]['prenom'];
                                ?>
                    <div class="user d-flex flex-row align-items-center"> <span><small class="font-weight-bold text-primary"><?php echo $nameUser; ?> : </small><br> <small class="font-weight-bold"><?php echo $value['description']; ?></small></span> </div> <small><?php echo $value['date']; ?></small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                </div>
            </div>

            <?php }?>
<br> 
<br>
            <form method ="post", action="question.php?id=<?php echo $id?>">
     <h5>Ajouter un commentaire : </h5>
     
    <textarea class="form-control" name="commentaire" id="exampleFormControlTextarea1" rows="3"></textarea><br>
            <div class="col-12 col-md-3 p-0 mb-3"> <button type="submit" class="btn btn-shadow btn-wide btn-primary" style="margin: 0 0;" ><span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> Publier  </button></div>
            <?php
            if(isset($_POST['commentaire']))
            {
                if($_POST['commentaire']!="") 
                {
                    
                    try{
                        $result = $conn->new_comment($_POST['commentaire'],$_SESSION['id'], $id);
                        echo("<script>location.href = 'question.php?id=$id';</script>");

                        }
                        catch(PDOException $e) {
                             "<br>" . $e->getMessage();

                          }
                          

                }
            }
                                    
                                ?>
        </from>
        </div>
        
    </div>
</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript'></script>
                                </body>
                            </html>