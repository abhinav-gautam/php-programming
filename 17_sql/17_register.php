<?php include('17_db_connect.php'); ?>
<?php include('17_functions.php');
    registerUser();
?>

<?php include('17_includes/17_header.php')?>

<div class="container">
    <h2 class='text-center'>Register Form</h2>
    <div class="col-xs-6">
        <form action="17_register.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" placeholder="Username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <input type="submit" value="Register" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>

<?php include('17_includes/17_footer.php')?>