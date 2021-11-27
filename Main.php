<?php 
session_start();
if(!array_key_exists("nom",$_SESSION)){
    header('Location: login.php');

}

require_once('connexion.php'); ?>
<html><head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>  <link rel="stylesheet" href="styles.css">
<style>body {
    margin: -20 0 0 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .88rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: left;
    background-color: #0b588b
}
#logo{
    width: 300px;
    height: 300px;
    margin: -70 0 0 530;
}
</style>

</head>

<body>
    <a href="myprofile.php"><img src="profile.png"  height="60px" width="60px" style="margin-left:30px;margin-right:300px;"/></a>
    <img src="logo.png" />
    <div class="container-fluid mt-100">
    <div class="d-flex flex-wrap justify-content-between">
        <div> <a  href="post.php" ><button type="button" class="btn btn-shadow btn-wide btn-primary"> <span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> New Post </button> </a> </div>
        <form method ="post", action="logout.php">
            <div class="col-12 col-md-3 p-0 mb-3"> <button type="submit" class="btn btn-shadow btn-wide btn-primary" style="margin: 0 0;" ><span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> Logout </button></div>
        </from>
    </div>
    <div class="card mb-3">
        <div class="card-header pl-0 pr-0">
            <div class="row no-gutters w-100 align-items-center">
                <div class="col ml-3">Topics</div>
                <div class="col-4 text-muted">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">Catégorie</div>
                        <div class="col-8">Published by</div>
                    </div>
                </div>
            </div>
        </div>
        <?php $conn = new myConnection();
            $conn->connect();
            $posts = $conn->getAllPosts()->fetchAll();
            
            foreach ($posts as $value) {
               ?>
            
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col"> <a href="question.php?id=<?php echo $value['id_user']?>" class="text-big" data-abc="true"><?php echo $value[1]; ?></a>
                    <div class="text-muted small mt-1">Published <?php echo $value[2]; ?> &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true"></a></div>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4"><?php echo $value['categorie']; ?></div>
                        <div class="media col-8 align-items-center">
                            <div class="media-body flex-truncate ml-2">
                                <?php
                                    $result = $conn->findUserById($value['id_user'])->fetchAll();
                                    $nameUser = $result[0]['nom'] . ' '. $result[0]['prenom'];
                                ?>
                             <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true"> <?php echo $nameUser; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
        <hr class="m-0">
        
    </div>
    <nav>
        <ul class="pagination mb-5">
            <li class="page-item disabled"><a class="page-link" href="javascript:void(0)" data-abc="true">«</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)" data-abc="true">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">»</a></li>
        </ul>
    </nav>
</div>                            <script type="text/javascript"></script></body></html>