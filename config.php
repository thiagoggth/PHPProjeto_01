<?php
session_start();
include("vendor/Email.php");
$url= isset($_GET['url']) ? $_GET['url'] : 'home';

define ('INCLUDE_PATH','http://localhost/cursos/curso%20php/php%20jedai/projeto_01/novo/');
define ('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

//constantes do banco de dados.
define ('HOST', 'localhost');
define ('USER','root');
define ('PASSWORD','');
define ('DATABASE', 'projeto_01');

$autoload = function($class){    
    include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

/*
função para trocar de pagina dinamicamente.
--------
velidação da url, caso no diretario principal,
sera incluido a home, se nao sera incluido
a pagina solicidada depois do diretorio principal.
caso nao exista sera incluido a pagina de erro 404.
**/
function includeDinamic($url){        
    if(file_exists('paginas/'.$url.'.php')){
        include('paginas/'.$url.'.php');
        }

    else{
        include('paginas/404.php');
        //true significa que esta na pagina 404.
        $pagina404 = true;
        return $pagina404;
    }
}


/**
função para mudar o footer
-------
quando estiver na pagina 404 o footer
vai mudar para ficar posicionado corretamente
na parte de baixo do site.
**/

function verificarFooter($pagina404){
    $url= isset($_GET['url']) ? $_GET['url'] : 'home';
    if($pagina404 == true || $url == 'contato')
        echo ' class="fixed"';
    
}

/*funçoes*/

function pegaCargo(int $cargo){
    $arr = [
        '0' => 'Normal',
        '1' => 'Subadministrador',
        '2' => 'Administrador'
    ];

    return $arr[$cargo];

}



?>