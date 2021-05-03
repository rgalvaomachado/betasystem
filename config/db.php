<?php
    $username = 'root';
    $password = 'bitnami';
    $host = '192.168.10.5';
    $bd = 'betasystem';

    try {
        $db = new PDO('mysql:host='.$host.';dbname='.$bd,$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $err ) {
        echo $err->getCode(); // Outputs: "28000"
        echo $err->getMessage(); // Outputs: "Access denied for user 'user'@'example.com' (usi
    }
    
    