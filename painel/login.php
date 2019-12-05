<?php
    //$pdo = MySql::conectar();

    if(isset($_POST['acao'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql =  MySql::conectar()->prepare("select * from `tb_admin.user`where user = ? and password = ?");
        $sql->execute(array($user, $password));

        if($sql->rowCount() == 1){
            //lagado com sucesso!
            $info=$sql->fetch();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['img'] = $info['img'];
            header('location:'.INCLUDE_PATH_PAINEL);
            die();
        }else{
            //erro ao logar usuario ou senha invalidas!
            echo "<script>alert('usuario ou senha invalidos!')</script>";
        }
    }

?>



<html>
<head>
    <title>Tela de login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">              
    <link href="<?=INCLUDE_PATH_PAINEL;?>css/all.min.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_PAINEL;?>css/style.css" rel="stylesheet">
    <style>
            body{
                background: rgb(82, 86, 101);
            }
    </style>
</head>
<body>
    <div class ="box-login">
        

        <h2>Efetue o login</h2>
        <form method = "post">
            
            <input type="text" name="user" placehoader="login..." required>
            <input type="password" name="password" placehoader="senha..." required>
            <table style="width: 100%; text-align: center;">
                <td>
                    <input class="btn btn-success" type="submit" name="acao" value="Entrar">
                </td>
                <td>
                    <a class="btn btn-danger" href="<?= INCLUDE_PATH?>">Voltar</a>
                </td>
            
            

            </table>
            

        </form>

        
    </div><!--box-login-->
    <script src="<?= INCLUDE_PATH?>/js/jquery.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?=INCLUDE_PATH_PAINEL;?>js/all.min.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/constants.js"></script>
</body>
</html>