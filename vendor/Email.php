<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once("autoload.php");

class Email
	{
    private $mailer;
    
    public function __construct($host, $userName, $password, $name){
        
        $this->mailer = new PHPMailer;

        
            //Server settings
            $this->mailer->SMTPDebug = 0;                                // Enable verbose debug output
            $this->mailer->isSMTP();                                        // Set mailer to use SMTP
            $this->mailer->Host = $host;
            $this->mailer->SMTPAuth = true;                                   // Enable SMTP 
            $this->mailer->Username = $userName;                     // SMTP username
            $this->mailer->Password = $password;                               // SMTP password
            $this->mailer->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $this->mailer->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $this->mailer->setFrom($userName, $name);
            $this->mailer->CharSet = 'UTF-8';
            
    }
    
    public function addAdress($email, $nome){
        $this->mailer->addAddress($email, $nome);
    }
    
    public function formatarEmail($info){
        $this->mailer->Subject = $info['subject'];
        $this->mailer->Body    = $info['body'];
        
    }
    
    public function enviarEmail(){
        //Validar se a mensagem foi ou nao enviada!
        
            if ($this->mailer->send()){
                //se a mensagem foi enviada!
                ?>
                <script src="js/jquery.js"></script>
                <script>
                    //variaveis com elementos
                    var mensagem = 'section.mensagem-ok';
                    var mensagemContainer = 'section.mensagem-ok .container';
                    
                    //função para apresentar mensagem de resposta!
                    $(function(){
                        
                        $(mensagemContainer).append('<p>Mensagem enviada! a</p>');    
                            //mostrando mensagem na tela e desaparesendo.    
                        
                        $(mensagem).fadeIn(2000, function(){
                            setInterval(function(){
                                $(mensagem).fadeOut(2000);
                            }, 4000)
                        });
                    })
                    
                </script>
                <?php
            }
            else
            {  
                //se a nao mensagem foi enviada
                ?>
                <script src="js/jquery.js"></script>
                <script>
                    //variaveis com os elementos.
                    var mensagem = 'section.mensagem-ok';
                    var mensagemContainer = 'section.mensagem-ok .container';
                    
                    //função para aprensat a mensamgem de resposta!
                    $(function(){
                        //estilo da mensagem de erro.
                        $(mensagem).css('background','#D3474A');
                        
                        $(mensagemContainer).append('<p>Mensagem não enviada! a</p>');
                        //mostrando mensagem na tela e desaparesendo.
                        
                        //mostrando na tela e deseparesendo.
                        $(mensagem).fadeIn(2000, function(){
                            setInterval(function(){
                                $(mensagem).fadeOut(2000);
                            }, 4000)
                        });
                    })
                </script>
                <?php
            } 
    }
}
?>