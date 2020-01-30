<h2>Visi filmai</h2>
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
<table class="table table-bordered">
    <tr>
        <?php foreach($filmai as $filmas):?>
    <tr>
        <td><?=$filmas['id'];?></td>
        <td><?=$filmas['pavadinimas'];?></td>
        <td><?=$filmas['metai'];?></td>
        <td><?=$filmas['rezisierius'];?></td>
        <td><?=$filmas['info'];?></td>
        <td><?=$filmas['imdb'];?></td>
        <td><?=$filmas['zanro_id'];?></td>
        <td><a href="?page=filmo_redagavimas&id=<?=$filmas['id'];?>" name="redaguoti">Redaguoti</a></td>
        <td><a href="?page=filmo_salinimas&id=<?=$filmas['id'];?>" name="salinti">Salinti</a></td>
    </tr>
    <?php endforeach;?>
</tr>
</table>