<?php

    $autoload = function($class){
    if($class = "Email")
        include("vendor/$class.php");
    };

    spl_autoload_register($autoload);

?>