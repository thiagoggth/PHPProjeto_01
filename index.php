<?php
include('config.php');
include('paginas/RespostaEnvio.php');

?>
<!--codigo html-->
<!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <link href="<?php echo INCLUDE_PATH;?>css/all.min.css" rel="stylesheet">    
        <!--apagar deois-->
        <link href="css/style.css">
        <!---------------->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo INCLUDE_PATH;?>css/animate.min.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH;?>css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $url?></title>

        <!--scripts-->        
        <script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?php echo INCLUDE_PATH;?>js/all.min.js"></script>
        <script src="<?php echo INCLUDE_PATH;?>js/bootstrap-notify.min.js"></script>   
        
        
    </head>

    <body>
    <base base="<?php echo INCLUDE_PATH; ?>" />       

    <div class="overlay-loading">
        <img src="<?= INCLUDE_PATH; ?>imagens/ajax-loader.gif">
    </div><!--overlay-loading-->
        <header>

            <div class="topo">
                
                <div class="container">
                    
                    <a href="<?php echo INCLUDE_PATH;?>">
                        <div class="logo">
                            Meu WebSite
                        </div><!--logo-->    
                    </a>

                    <nav class="menu-desktop">

                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                            <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                            <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                            <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                            <li><a href="<?php echo INCLUDE_PATH_PAINEL;?>">Area restrita</a></li>
                        </ul>

                    </nav><!--menu-desktop-->
                    
                    <nav class="menu-mobile">
                        <span><i class="fas fa-bars"></i></span>

                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                            <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                            <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                            <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                        </ul>

                    </nav><!--menu-desktop-->
                    
                    <div class="clear"></div><!--clear-->
            
                
                </div><!--container-->

            </div><!--topo-->
        </header>
            
        <!--chamando função php para incluir dinamicamente--> 
       <?php
            $resp = includeDinamic($url); 
        ?>
        <!---------------------------> 
        <!--chamando a função para mudar o footer caso necessario-->
        <footer <?php verificarFooter($resp)?>>
            <p>Todos os direitos reservados</p>
        </footer>
    </body>
    <script src="<?php echo INCLUDE_PATH;?>js/constants.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/Mensagem.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/formSubmit.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/functions.js"></script>
</html>