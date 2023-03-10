<?php
    ob_start();
    session_start();
    // *************** For PostgreSQL
        $dsn = "pgsql:host=localhost;dbname=login_course;port=5432";
        $opt = [
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC, 
            PDO::ATTR_EMULATE_PREPARES      => false
        ];
        $pdo = new PDO($dsn, 'postgres', 'blix', $opt);
        //echo "Connected To Database";
    // *************** For MySOL
    //     $dsn = "mysql:host=localhost;dbname=login_course;port=3306;charset=utf8"
    //     $opt = [
    //         PDO::ATTR_ ERRMODE               => PDO::ERRMODE_EXCEPTION,
    //         PDO::ATTR_DEFAULT_FETCH_MODE     => PDO::FETCH_ASSOC,
    //         PDO::ATTR_EMULATE_PREPARES       => false
    //     ];
    // $pdo = new PDO($dsn, $user, $pass, $opt);

    $root_directory = "WebMaps/PHP_registration_login_CMS/login_course";
    $from_email = "admin@imgenv.com";
    $reply_email = "admin@imgenv.com";
    include "php_functions.php";
?>