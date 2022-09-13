<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "autochange");
    define("DB_TABLE", 'подбор');

    $connect = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if($connect -> connect_errno) exit("404! Error connection to DB!");
    
    else {
        $connect ->set_charset('utf-8');
        return $connect;
    }
?>
