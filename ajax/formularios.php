<?php
include('../config.php');
$data = [];
if($_POST['email'] != ''){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //TUDO CERTO É UM EMAIL.
        
        //Enviando confirmação de cadastro para usuario.
        /*
        $mailMensage= new Email("smtp.gmail.com", 'thiagoggth30@gmail.com', 'animesz16', 'Thiago');
        $mailMensage->addAdress($email, "Thiago");
        $info = array('subject'=>'Confirmação de cadastro','body'=>"Bem vindo, seu e-mail: $email foi cadastrado com sucesso");
        $mailMensage->formatarEmail($info);
        
        if ($mailMensage->mailer->send()){
            $data['sucesso'] = true;
        }else{
            $data['erro'] = true;
        }
        */
        $data['resposta'] = 'sucesso';
        /*
        $meumailMensage= new Email("smtp.gmail.com", 'thiagoggth30@gmail.com', 'animesz16', 'Thiago');
        //Enviando para mim mesmo novo email cadastrado.
        $meumailMensage->addAdress("thiagoggth30@gmail.com", "Thiago");
        $info = array('subject'=>'Novo email cadastrado','body'=>"email: $email foi cadastrado!");
        $meumailMensage->formatarEmail($info);
        $meumailMensage->enviarEmail();
        */
    }else{
        //email nao e vailido
        echo '<script>alert("email nao e valido")</script>';
    }
}

die(json_encode($data));