<?php

class Painel
{
    public static function logado(){
        return isset($_SESSION['login'])? true:false;
    }
    public static function logout(){
        session_destroy();
        header('location: '.INCLUDE_PATH_PAINEL);
    }
    
    public static function carregarPagina($url){              
        if(file_exists('paginas/'.$url.'.php')){
            include('paginas/'.$url.'.php');
        }else{
            //quando a pagina nao existe.
            header('location: '.INCLUDE_PATH_PAINEL);
        }
        
    }

    public static function listarUsuariosOnline(){
        
        
        self::limparUsuariosOnline();
        $sql = MySql::conectar()->prepare("select * from `tb_admin.online`");
        $sql->execute();
        return $sql->fetchAll();
        
    }

    public static function limparUsuariosOnline(){
        $date = date('y-m-d H:i:s');
        $sql = MySql::conectar()->exec("delete from `tb_admin.online` where ultima_acao <'$date' - INTERVAL 1 MINUTE");
    }
    
}

?>