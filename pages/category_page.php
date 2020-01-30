<?php
$dsn = "mysql:host=$host;dbname=$db";
try{
    $conn = new PDO($dsn, $username, $password, $options);
    if($conn){
        $stmt = $conn->query("SELECT * FROM filmas");
        $filmai = $stmt->fetchAll();
    }
}catch (PDOException $e){
    echo $e->getMessage();
}?>