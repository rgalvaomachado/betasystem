<?php
namespace app\controller;

class TesteController{
    // public function __construct()
    // {
    //     echo 'estamos aqui';
    // }
    public function seta(){
        $dados = [
            'nome' => 'Romulo'
        ];
        json_encode($dados);

        echo '111';
    }

    
}