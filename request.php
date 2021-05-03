<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/db.php');

    $query = $db->prepare("SELECT * FROM users");
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($data)

?>