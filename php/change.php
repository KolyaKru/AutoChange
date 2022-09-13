<?php
    $connect = include 'db.php';
    
    $table = 'подбор';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $cost = $_POST['cost'];
    
    $query = "INSERT INTO `$table`(`Имя`,`Телефон`, `Почта`, `Желаемая стоимость авто, $`) VALUES ('$name', '$phone', '$email', $cost)";
    
    if ($connect -> query($query)){
        echo '<script src = ../js/good_entry.js></script>';
    }
    else{
        echo '<script src = ../js/error_entry.js></script>';
    }

    exit('<meta http-equiv="refresh" content="0; url=../pages/entry.html" />');
?>