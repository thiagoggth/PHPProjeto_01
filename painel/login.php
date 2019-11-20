<?php
    //$pdo = MySql::conectar();

    if(isset($_POST['acao'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql =  MySql::conectar()->prepare("select * from `tb_admin.user`where user = ? and password = ?");
        $sql->execute(array($user, $password));

        if($sql->rowCount() == 1){
            //lagado com sucesso!
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
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
    <link href="<?php echo INCLUDE_PATH_PAINEL;?>css/style.css" rel="stylesheet">
</head>
<body>
    <div class ="box-login">
        

        <h2>Efetue o login</h2>
        <form method = "post">
            
            <input type="text" name="user" placehoader="login..." required>
            <input type="password" name="password" placehoader="senha..." required>
            <input type="submit" name="acao" value="Login">

        </form>
    </div><!--box-login-->
</body>
</html>