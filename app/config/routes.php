<?php
    define('__ROOT__', dirname(dirname(__FILE__)));

    $this->get('/', function(){
        require_once(__ROOT__.'/view/login.php');
    });

    $this->get('/home', function(){
        require_once(__ROOT__.'/view/home.php');
    });

    $this->get('/elementos', function(){
        require_once(__ROOT__.'/view/elements.php');
    });

    $this->get('/orcamentos', function(){
        require_once(__ROOT__.'/view/orcamentosADM.php');
    });

    $this->get('/pedidos', function(){
        require_once(__ROOT__.'/view/orcamentos.php');
    });

    $this->get('/teste', function(){
        (new \app\controller\TesteController)->seta();
    });

?>