<?php
// update state
$id = $_REQUEST['id']; $state = $_REQUEST['state'];

try{
    $pdo = new PDO("mysql:host=localhost;dbname=iii","root","12345678");
    if ($pdo->query("update state set state={$state} where id = {$id}")){
        echo '0';
    }else{
        echo '1';
    }
}catch (Exception $e){
    die("Server Busy");
}
