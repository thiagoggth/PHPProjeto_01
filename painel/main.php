<?php
    if(isset($_GET['logout'])){
        Painel::logout();
    }
?>


<!DOCTYPE = html>
<html>
    <head>
        <title>Painel de controle</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?=INCLUDE_PATH_PAINEL;?>css/all.min.css" rel="stylesheet">
        <link href="<?=INCLUDE_PATH_PAINEL;?>css/style.css" rel="stylesheet">
        <script src="<?=INCLUDE_PATH_PAINEL;?>js/all.min.js"></script>
    </head>
    <body>

        <div class="menu">
            <div class="box-user">
                <?php
                    if($_SESSION['img'] == ''){
                ?>
                <div class="avatar-user">
                    <i class="incon-user fa fa-user"></i>
                </div><!--avatar-user-->
                <?php }else{ ?>
                    <div class="user-img">
                        <img src="<?=INCLUDE_PATH_PAINEL?>uploads/<?=$_SESSION['img'];?>">
                    </div><!--user-img-->
                <?php } ?>
                <div class="user-name">
                    <p><?=$_SESSION['nome'];?></p>
                    <p><?=pegaCargo($_SESSION['cargo'])?></p>
                </div><!--user name-->

            </div><!--box-user-->
        </div><!--menu-->
        
        <header>
            <div class="center">

                <div class="menu-btn" onclick="">
                    <i class="fa fa-bars"></i>
                </div><!--menu-btn-->


                <div class="logout">
                    <a href="<?=INCLUDE_PATH_PAINEL;?>?logout">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div><!--logout-->

                <div class="clear"></div><!--clear-->
            </div><!--center-->

        </header>
        <div class="clear"></div><!--clear-->

        <div class="content">

            <div class="box-content left w100">

            </div><!--box-content-->
            
            <div class="clear"></div><!--clear-->

        </div><!--content-->
    <script src="<?= INCLUDE_PATH?>/js/jquery.js"></script>    
    <script src="<?=INCLUDE_PATH_PAINEL?>/js/main.js"></script>    
    </body>
</html>