<?php
require_once($_SERVER['DOCUMENT_ROOT'].'\class\dbClass.php');

$sql = new dbClass();
$data1 = $sql->firstResult('SELECT * FROM radius');
var_dump($data1);

echo "<br><br>";

$data2 = $sql->allResults('SELECT * FROM radius');

foreach ($data2 as $data){
    echo $data['id'];
    echo "<br>";
}

?>