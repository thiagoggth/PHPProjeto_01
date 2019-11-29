<?php
    class Site{
        
        
        public static function updateUsuarioOnline(){
            if(isset($_SESSION['online'])){
                
                $token = $_SESSION['online'];
                $horariolAtual = date('y-m-d H:i:s');
                $check = MySql::conectar()->prepare("select `id` from `tb_admin.online` where token = ?");
                $check->execute(array($token));
                if ($check->rowCount() == 1){
                    $sql = MySql::conectar()->prepare("update `tb_admin.online` set ultima_acao = ? where token = ?");
                    $sql->execute(array($horariolAtual, $token));
                }else{
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $horariolAtual = date('y-m-d H:i:s');                
                    $token = $_SESSION['online'];                
                    $sql = MySql::conectar()->prepare("insert into `tb_admin.online` values (null,?,?,?)");
                    $sql->execute(array($ip,$horariolAtual, $token));
                }


                
            }else{                
                $_SESSION['online'] = uniqid();
                $ip = $_SERVER['REMOTE_ADDR'];
                $horariolAtual = date('y-m-d H:i:s');                
                $token = $_SESSION['online'];                
                $sql = MySql::conectar()->prepare("insert into `tb_admin.online` values (null,?,?,?)");
                $sql->execute(array($ip,$horariolAtual, $token));
            }
            
        }

        public static function contador(){
            
            if(!isset($_COOKIE['visita'])){
                setcookie('visita','true',time() + (60*60*24*7));
                $dia = date('y-m-d');
                $ip = $_SERVER['REMOTE_ADDR'];
                $sql = MySql::conectar()->prepare("insert into `tb_admin.visitas` values(null, ?,?)");
                $sql->execute(array($ip, $dia));
                
            }
        }
        
    }