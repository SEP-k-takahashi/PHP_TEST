<?php
function DB_open(){


    $pdo = new PDO('mysql:dbname=kt-works;charset=utf8;host=localhost', 'root', 'ujoi8zmk');
    
    
    $pdo->query('SET NAMES utf8');
    return $pdo;
}
?>
