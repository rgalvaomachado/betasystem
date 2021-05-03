<?php
    $username = 'root';
    $password = 'bitnami';
    $host = '192.168.10.5';
    $bd = 'db_shop';

    try {
        $db = new PDO('mysql:host='.$host.';dbname='.$bd,$username,$password);
    }catch(PDOException $err ) {
        echo $err->getCode(); // Outputs: "28000"
        echo $err->getMessage(); // Outputs: "Access denied for user 'user'@'example.com' (usi
    }
    
    