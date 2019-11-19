<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once("autoload.php");

class Email
	{
    public $mailer;
    
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
        $this->mailer->send();
    }
}
?>