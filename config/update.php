<?php
require_once($_SERVER['DOCUMENT_ROOT'].'\class\dbClass.php');
$sripts = file_get_contents($_SERVER['DOCUMENT_ROOT'].'\bd\scripts.sql');

$db = new dbClass();
$data = $db->executeSQL("$sripts");
var_dump($data);

?>