<?php
$dblocation = '127.0.0.1';
$dbname = 'shop2';


function db() {
    $db_user = 'newuser';
    $db_pass = 'password';

    try {
        $pdo = new PDO('mysql:host=127.0.0.1; dbname=shop2', $db_user,$db_pass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
    return $pdo;
}


