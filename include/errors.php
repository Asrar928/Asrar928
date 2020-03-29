<?php
  if(count($errors)) { ?>
      <div class="alert alert-danger" style="position: relative;bottom: 2em;width: 50%;margin: 0 auto;">
        <?php foreach($errors as $error) { ?>
          <h6><?php echo $error; ?></h6>
        <?php } ?>
      </div>
<?php }?>



<?php
  if(count($succes)) { ?>
      <div class="alert alert-success" style="position: relative;bottom: 2em;width: 50%;margin: 0 auto;">
        <?php foreach($succes as $succes1) { ?>
          <h6><?php echo $succes1; ?></h6>
        <?php } ?>
      </div>
<?php }?>
