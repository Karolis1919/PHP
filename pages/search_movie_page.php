<form method="post">
    <div class="form-group">
        <label for="title">Filmo pavadinimas</label>
        <input id="title" type="text" class="form-control" list="pavadinimai" name= title>
        <datalist id="pavadinimai">
            <?php foreach ($filmai as $filmas):?>
            <option value="<?=$filmas['pavadinimas'];?>"
                    <?php endforeach;?>
        </datalist>
    </div>
    <button type="submit" class="btn-primary" name="search">Ieskoti</button>
</form>

<?php if(isset($_POST['search']));?>
<table class="table table-bordered">
    <h3>Rezultatai</h3>
</table>
<?php
