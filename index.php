<?php require "header.php" ?>
<?php require "functions.php" ?>

<div class="container">
    <form action="" method="_GET" class="row">
        <div>
            <label class="form-label" for="Org">Organismes</label>
            <select name="Organismes" id="Org" class="form-select">
                <?php for($i=1; $i <= 15; $i++):?>
                    <option value="<?= $i?>">AMP (Autorité des Marchés Publics)</option>
                <?php endfor?>
            </select>
        </div>  
     </form>
</div>
        
<?php require "footer.php" ?>