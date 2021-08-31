<?php require "header.php" ?>
<?php require "functions.php" ?>

<div class="container">
    <form action="" method="_GET" class="row">
        <div>
            <label class="form-label" for="Org">Organismes</label>
            <select name="Organismes" id="Org" class="form-select">
                <?php for($i=1; $i <= 14; $i++):?>
                    <option value="<?= $i?>">
                    <?php if (isset($i)): ?>
                        <?php $lignes[$i] ?>
                    <?php endif ?>
                    </option>
                <?php endfor?>
            </select>
        </div>  
     </form>
</div>
        
<?php require "footer.php" ?>