<?php
$dsn = "mysql:host=$host;dbname=$db";
    try{
        $conn = new PDO($dsn, $username, $password, $options);
        if($conn) {
            $stmt = $conn->query("SELECT * FROM filmas");
            $filmai = $stmt->fetchAll();
            }
        }
        catch(PDOException $e){
        echo  $e->getMessage();
    }

/*if(isset($_POST['salinti'])) {
    try{
        if ($conn){
            $sql = "DELETE FROM filmas WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt ->bindParam(':id', $_POST['id'],PDO::PARAM_INT);
            $stmt ->execute();
        }
    }catch (PDOException $e) {
        echo $e ->getMessage();
   }
}*/
