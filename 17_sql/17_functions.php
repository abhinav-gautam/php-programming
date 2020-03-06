<?php include('17_db_connect.php'); ?>
<?php
    // To get options in the id select tag
    function get_options(){
        global $connection;
        $query = "SELECT * FROM users;";
        $response = mysqli_query($connection,$query);

        if ($response) {
            echo "Done";
        } else {
            die("Error:".mysqli_error);
        }

        while ($row = mysqli_fetch_assoc($response)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }
    // Encrypt Password
    function encryptPassword($password){
        $hashFormat = "$2y$10$";
        $salt = "jxuqnkducjdl48dji3jcia9d";
        $hash_and_salt = $hashFormat . $salt;
        $password = crypt($password,$hash_and_salt);
        
        return $password;
    }

    // Create new user
    function registerUser(){
        global $connection;
        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($connection,$_POST['username']);
            $password = mysqli_real_escape_string($connection,$_POST['password']);

            $password = encryptPassword($password);
            
            if ($username && $password) {
        
                $query = "INSERT INTO users(username,password) VALUES ('$username', '$password');";
                $response = mysqli_query($connection,$query);
    
                if ($response) {
                    echo "Done";
                } else {
                    die("Error:".mysqli_error);
                }
                
            } else {
                echo "Fields are required";
            }
            
        }
    }

    // To update the username and password
    function updateTable(){
        global $connection;
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $id = $_POST['id'];

        $password = encryptPassword($password);

        if ($username && $password && $id) {
            $query = "UPDATE users SET ";
            $query .= "username = '$username', ";
            $query .= "password = '$password' ";
            $query .= "WHERE id = $id ;";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("Error:".mysqli_error($connection));
            }
        }
    }
    
    // Delete row from table
    function deleteRow(){
        global $connection;
        $id = $_POST['id'];

        if ($id) {
            $query = "DELETE FROM users ";
            $query .= "WHERE id = $id ;";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("Error:".mysqli_error($connection));
            }
        }
    }

    // Read Table
    function readTable(){
        global $connection;
        $query = "SELECT * FROM users;";
        $response = mysqli_query($connection,$query);

        if (!$response) {
            die("Error:".mysqli_error);
        }

        while ($row = mysqli_fetch_assoc($response)) {
            ?>
            <pre>
                <?php print_r($row) ?>
            </pre>
            <?php
        }
    }
?>