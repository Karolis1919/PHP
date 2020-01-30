<?php

$dsn = "mysql:host=$host;dbname=$db";
try{
    $conn = new PDO($dsn, $username, $password, $options);
    if($conn) {
        $stmt = $conn->query("SELECT * from filmas");
            $filmai = $stmt->fetchAll();
    }

}
catch(PDOException $e){
    echo  $e->getMessage();
}

$errors = [];

if(count($errors) > 0){
    foreach($errors as $error){
        echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
    }
}
if(isset($_POST['submit'])) {
    try{
        if ($conn){
            $sql = "INSERT INTO filmas (pavadinimas, metai, info, imdb, rezisierius, zanro_id)
                    VALUES (:pavadinimas, :metai, :info, :imdb, :rezisierius, :zanro_id)";
            $stmt = $conn->prepare($sql);
            $stmt ->bindParam(':pavadinimas', $_POST['pavadinimas'], PDO::PARAM_STR);
            $stmt ->bindParam(':metai', $_POST['metai'], PDO::PARAM_STR);
            $stmt ->bindParam(':info', $_POST['info'], PDO::PARAM_STR);
            $stmt ->bindParam(':imdb', $_POST['imdb'], PDO::PARAM_STR);
            $stmt ->bindParam(':rezisierius', $_POST['rezisierius'], PDO::PARAM_STR);
            $stmt ->bindParam(':zanro_id', $_POST['zanro_id'], PDO::PARAM_STR);
            $stmt ->execute();
            header('Location:?page-all');
        }
    }catch (PDOException $e) {
        echo $e ->getMessage();
    }

    $errors = [];
    if(!preg_match('/^[a-zA-Z]{2,50}$/', $_POST['pavadinimas'])) {
      $errors[] = "Text only";
    }
    else {
      $_POST['pavadinimas'];
    }
    if(!preg_match('/^[0-9]{1000-3000}$/', $_POST['metai'])) {
      $errors[] = "Number only";
    }
    else {
      $_POST['metai'];
    }
    if(!preg_match('/^[a-zA-Z0-9\s]{1,100}$/', $_POST['rezisierius'])) {
      $errors[] = "Text only";
    }
    else {
      $_POST['rezisierius'];
    }
    if(!preg_match('/^[a-zA-Z]{1,300}$/', $_POST['info'])) {
      $errors[] = "Text only";
    }
    else {
      $_POST['info'];
    }
    if(!preg_match('/^[0-9]{1,10}$/', $_POST['imdb'])) {
        $errors[] = "Numbers only";
    }
    else {
        $_POST['imdb'];
    }
    if(!preg_match('/^[0-9]{1,100}$/', $_POST['zanro_id'])) {
        $errors[] = "Numbers only";
    }
    else {
        $_POST['zanro_id'];
    }
    if($_POST['pavadinimas'] == "" && $_POST['metai'] == "" && $_POST['rezisierius'] == "" && $_POST['info'] == "" && $_POST['imdb'] == "" && $_POST['zanro_id'] =="") {
        $errors[] = "Complete the form";
      }
}

?>


<div class="row">
    <form class="col-12" method="POST">
     <div class="form-group">
       <label>Pavadinimas</label>
       <input name="pavadinimas" class="form-control" type="text">
        </div>
    <div class="form-group">
      <label>Metai</label>
      <select class="form-control" name="metai">
          <?php for($i=1900; $i<=date("Y"); $i++):?>
          <option value="<?=$i?>"><?=$i?></option>
          <?php endfor;?>
      </select>
    </div>
    <div class="form-group">
      <label>Režisierius</label>
      <input name="rezisierius" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label>Info</label>
      <input name="info" type="text" class="form-control">
    </div>
    <div class="form-group">
       <label>Imdb</label>
        <input name="imdb" type="text" class="form-control">
    </div>
    <div class="form-group">
         <label>Žanras</label>
         <input name="zanro_id" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">
  </form>
</div>

