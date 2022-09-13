<?php
    $connect = include 'db.php';
    
    $table = 'звонок';
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO `$table`(`Имя`,`Телефон`) VALUES ('$name', '$phone')";

    if ($connect -> query($query)){
        echo '<script src = ../js/good_call.js></script>';
    }
    else{
        echo '<script src = ../js/error_entry.js></script>';
    }
    exit('<meta http-equiv="refresh" content="0; url=../pages/call.html" />');
?>