<?php

$dsn = "mysql:host=localhost;dbname=databaseCabi";
$dbname="root";
$senha="root";

try{
    $pdo=new PDO($dsn, $dbname, $senha);
    $pdo->setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo"Connection failed: " . $e->getMessage();
}
