
<link href="../css/style.css">
<body>
    <section class="bg-title">
        <div class="container">
        
            <h2>Contato</h2>
            <div class="line"></div><!--line-->
        </div><!--container-->
    </section>
    
    <section class = "contato">
        <div class="container">
            <h2>Deixe sua mensagem!</h2>
            
            <?php
      
                if(isset($_POST['acao'])){
                    //enviei o formulario.

                    if($_POST['nome'] != '' && $_POST['email'] != '' && $_POST['mensagem'] != ''){
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $mensagem = $_POST['mensagem'];
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            //TUDO CERTO É UM EMAIL 
                            $mail= new Email("smtp.gmail.com", 'thiagoggth30@gmail.com', 'animesz16', 'Thiago');
                            $mail->addAdress("thiagoggth30@gmail.com", "Thiago");
                            $info = array('subject'=>'uma nova mensagem','body'=>"Enviado de por $nome dono do email $email: e a mensagem é: $mensagem");
                            $mail->formatarEmail($info);
                            $mail->enviarEmail();
                           
                        }else{
                            //email nao e vailido
                            echo '<script>alert("email nao e valido")</script>';
                        }
                    }else{
                        echo '<script>alert("erro!")</script>';
                    }

                }
            ?>

            <form method="post">
                
                <span>Nome:</span>
                <input type="text" name="nome" placeholder="Nome..." class="form-control" required>
                <span>E-mail:</span>
                <input type="email" name="email" placeholder="E-mail..." class="form-control" required>
                <span>Mensage:</span>
                <textarea name="mensagem" placeholder="Deixe sua mensagem..." class="form-control" rows="3"></textarea>
                
                <button type="submit" class="btn btn-primary" name="acao">Enviar Mensagem!</button>
                <div class="clear"></div><!--clear-->
                
            </form>
        </div><!--container-->

    </section><!--contato-->
</body>
