<?php
error_reporting(E_ALL & ~E_NOTICE);
if (count($errors) > 0) { ?>
          <div class="error">
                    <?php foreach ($errors as $error) { ?>
                              <p><?php echo $error ?></p>
                    <?php } ?>
          </div>
<?php
} ?>