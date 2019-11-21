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

        <div class="menu"></div><!--menu-->
        
        <header>
            <div class="center">
                <div class="logout">
                    <a href="<?=INCLUDE_PATH_PAINEL;?>?logout"><i class="fas fa-sign-out-alt"></i></a>
                </div><!--logout-->

                <div class="clear"></div><!--clear-->
            </div><!--center-->

        </header>
        <div class="clear"></div><!--clear-->
        
    </body>
</html>