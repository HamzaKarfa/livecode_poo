<?php if (isset($_GET['succes'])) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['succes'] ?>
    </div>   
<?php } ?>
<?php if (isset($_GET['error'])) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_GET['error'] ?>
    </div>   
<?php } ?>