<?php
namespace app\core;

class RouterCore{
    private $uri;
    private $method;
    private $getArr = [];

    public function __construct(){
        $this->initialize();
        require_once('../app/config/routes.php');
        $this->execute();
    }

    private function initialize(){
        $this->method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        $ex = explode ('/',$uri);
        $uri = array_values(array_filter($ex));
        for($i=0; $i < UNSET_URI_COUNT ; $i++){
            unset($uri[$i]);
        }
        $this->uri = implode ('/',array_values(array_filter($uri)));
    }

    private function normalizeURI($arr){
        return array_values(array_filter($arr));
    }

    private function get($router, $call){
        $this->getArr[] = [
            'router' => $router,
            'call' => $call
        ];
    }

    private function execute(){
        switch($this->method){
            case 'GET':
                foreach($this->getArr as $get){
                    if($get['router'] == '/'.$this->uri){
                        if(is_callable($get['call'])){
                            $get['call']();
                            break;
                        }
                    }
                }
                break;
            case 'POST':
                break;
        }
    }
}