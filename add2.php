<?php
    $account = $_POST['account']; $passwd = $_POST['passwd'];
    $newPass1 = password_hash($passwd, PASSWORD_DEFAULT);
    echo $newPass1 . '<br />';

    $newPass2 = password_hash($passwd, PASSWORD_DEFAULT);
    echo $newPass2 . '<br />';