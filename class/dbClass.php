<?php
    class dbClass {
        private $username;
        private $password;
        private $host;
        private $bd;
        private $conections;
        
        public function __construct(){
            $this->username = 'root';
            $this->password = 'bitnami';
            $this->host = '192.168.10.5';
            $this->bd = 'db';

            $this->conections = new PDO('mysql:host='.$this->host.';dbname='.$this->bd,$this->username,$this->password); 
        }

        public function firstResult($sql){
            $query = $this->conections->prepare($sql);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);

            return $data;
        }

        public function allResults($sql){
            $query = $this->conections->prepare($sql);
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            return $data;
        }

        public function executeSQL($sql){
            $query = $this->conections->prepare($sql);
            $query->execute();

            return $query;
        }
    }