<?php
  if(count($errors)) { ?>
      <div class="alert alert-danger" style="width: 50%;margin: 0 auto;position: relative;bottom: 12px;text-align:center;">
        <?php foreach($errors as $error) { ?>
          <h6><?php echo $error; ?></h6>
        <?php } ?>
      </div>
<?php }?>



<?php
  if(count($succes)) { ?>
      <div class="alert alert-success" style="width: 50%;margin: 0 auto;position: relative;bottom: 12px;text-align:center;">
        <?php foreach($succes as $succes1) { ?>
          <h6><?php echo $succes1; ?></h6>
        <?php } ?>
      </div>
<?php }?>
