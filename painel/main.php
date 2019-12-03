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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">              
        <link href="<?=INCLUDE_PATH_PAINEL;?>css/all.min.css" rel="stylesheet">
        <link href="<?=INCLUDE_PATH_PAINEL;?>css/style.css" rel="stylesheet">
    </head>
    <body>
    <base base="<?php echo INCLUDE_PATH; ?>" />   
    <basePainel basePainel="<?php echo INCLUDE_PATH_PAINEL; ?>"></basePainel>

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

            <div class="menu-itens">

                <a style="text-align: center;" href="<?=INCLUDE_PATH_PAINEL?>home"><i class="fas fa-home"></i> Home</a>

                <h2>Cadastro</h2>
                <a href="<?=INCLUDE_PATH_PAINEL?>cadastrarDepoimentos">Cadastrar depoimentos</a>
                <a href="">Cadastrar serviços</a>
                <a href="">Cadastrar slides</a>

                <h2>Gestão</h2>
                <a href="">Lista de depoimentos</a>
                <a href="<?=INCLUDE_PATH_PAINEL?>listaEmails">Lista de e-mails</a>
                <a href="">Lista de serviços</a>
                <a href="">Lista de slides</a>
                <a href="<?=INCLUDE_PATH?>">Site</a>
                
                <h2>Adiminstração do painel</h2>
                <a href="">Adicionar usuarios</a>
                <a href="">Editar usuarios</a>
                
                <h2>Configuração geral</h2>
                <a href="">Editar</a>               
                

            </div><!--menu-itens-->

            <div class="menu-btn">
                    <i class="fa fa-times"></i>
                </div><!--menu-btn-->

        </div><!--menu-->
        
        <header>
            <div class="center">

                <div class="menu-btn">
                    <i class="fa fa-bars"></i>
                </div><!--menu-btn-->


                <div class="logout">
                    <a href="<?=INCLUDE_PATH_PAINEL;?>?logout">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div><!--logout-->

                <div class="clear"></div><!--clear-->
            </div><!--center-->

        </header>
        <div class="clear"></div><!--clear-->


        <!--conteudo do painel-->

        <div class="content center">           

            <?php                
                Painel::carregarPagina($url);
            ?>
            

        </div><!--content-->

    <script src="<?= INCLUDE_PATH?>/js/jquery.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?=INCLUDE_PATH_PAINEL;?>js/all.min.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/constants.js"></script>
    <script src="<?=INCLUDE_PATH_PAINEL?>/js/main.js"></script>  
    <script src="<?=INCLUDE_PATH_PAINEL?>/js/deleteEmail.js"></script>
    </body>
</html>