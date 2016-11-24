<?php
// query command
$id = $_REQUEST['id'];

try{
    $pdo = new PDO("mysql:host=localhost;dbname=iii","root","12345678");
    $sql = "SELECT * FROM state WHERE id = {$id}";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $result['command'];
}catch (Exception $e){
    die("Server Busy");
}
