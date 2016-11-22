<?php
    $account = $_POST['account']; $passwd = $_POST['passwd'];
    $newPass = password_hash($passwd, PASSWORD_DEFAULT);

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=iii","root","12345678");
        $stmt = $pdo->prepare("INSERT INTO member (account,passwd) VALUES (?,?)");
        $stmt->bindParam(1, $account);
        $stmt->bindParam(2, $newPass);
        if ($stmt->execute()){
            echo 'OK';
        }else{
            echo 'XX';
        }


    }catch (Exception $e){
        die("Server Busy");
    }
