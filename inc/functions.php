<?php
function connectDB(){
    global $host, $db, $username, $password, $options;
    $dsn="mysql:host=$host;dbname=db";
    try{
        $conn = new PDO($dsn, $username, $password, $options);
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}