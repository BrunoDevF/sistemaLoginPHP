<?php
    session_start();
    
    //carrega nossas classes
    $autoload = function($class){
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);

    //constantes de acesso ao BD
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','usuarios');

?>