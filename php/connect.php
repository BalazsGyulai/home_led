<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "otthonled");

    @ $database = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if(mysqli_connect_errno()){
        echo 'Nem sikerült csatlakozni';
        exit;
    }
