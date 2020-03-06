<?php include('17_db_connect.php'); ?>
<?php include('17_functions.php'); ?>
<?php include('17_includes/17_header.php')?>

<div class="container">
    <h2>Reading Data</h2>
    <div class="col-xs-6">
        <?php
           readTable();
        ?>
    </div>
</div>

<?php include('17_includes/17_footer.php')?>