<?php
include('../config.php');
$data = [];
if($_POST['email'] != ''){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = MySql::conectar()->prepare("select * from `tb_admin.listaemails` where email = ?");
        $sql->execute(array($email));
        if($sql->rowCount() == 1){
            $data['repitEmail'] = true;
        }else{                        
            $sql = MySql::conectar()->prepare("insert into `tb_admin.listaemails`values(null, ?)");
            $sql->execute(array($email));
            //TUDO CERTO É UM EMAIL.
            
            //Enviando confirmação de cadastro para usuario.
            
            $mailMensage= new Email("smtp.gmail.com", 'thiagoggth30@gmail.com', 'animesz16', 'Thiago');
            $mailMensage->addAdress($email, "Thiago");
            $info = array('subject'=>'Confirmação de cadastro','body'=>"Bem vindo, seu e-mail: $email foi cadastrado com sucesso");
            $mailMensage->formatarEmail($info);
            
            if ($mailMensage->mailer->send()){
                $data['sucesso'] = true;
            }else{
                $data['erro'] = true;
            }
            
            $data['resposta'] = 'sucesso';                      
        }        
    }else{
        //email nao e vailido
        echo '<script>alert("email nao e valido")</script>';
    }
}

die(json_encode($data));