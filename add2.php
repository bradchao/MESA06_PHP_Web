<?php
    $account = $_POST['account']; $passwd = $_POST['passwd'];
    $newPass = password_hash($passwd, PASSWORD_DEFAULT);

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=iii","root","12345678");

    }catch (Exception $e){
        die("Server Busy");
    }
