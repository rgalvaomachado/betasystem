<?php
    define('__ROOT__', dirname(dirname(__FILE__)));

    $this->get('/', function(){
        require_once(__ROOT__.'/view/login.php');
    });

    $this->get('/teste', function(){
        (new \app\controller\TesteController)->seta();
    });

    $this->get('/home', function(){
        require_once(__ROOT__.'/view/home.php');
    });

    $this->get('/pedidos', function(){
        require_once(__ROOT__.'/view/orcamentos.php');
    });

?>