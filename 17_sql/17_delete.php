<?php include('17_db_connect.php'); ?>
<?php include('17_functions.php'); ?>
<?php
    if (isset($_POST['submit'])) {
       deleteRow();
    }
?>

<?php include('17_includes/17_header.php')?>

<div class="container">
    <h2 class='text-center'>Delete Form</h2>
    <div class="col-xs-6">
        <form action="17_delete.php" method="post">
            <div class='form-group'>
                <label for="id">ID:</label>
                <select name="id" id="">
                    <?php
                        get_options();
                    ?>
                </select>
            </div>
                

            <input type="submit" value="Delete" name="submit" class="btn btn-primary">

        </form>
    </div>
</div>

<?php include('17_includes/17_footer.php')?>