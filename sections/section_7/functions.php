<?php include "db.php"; ?>

<?php
function showAllData() {

    global $conn;
    $query = "SELECT * FROM users";

    $result = mysqli_query($conn, $query);
    if(!$result)  {
        die('Error in query');
    }

    while($row = mysqli_fetch_assoc($result)) {
        $username = $row['username'];
        $id = $row['id'];

        echo "<option value='$id'>$username id: $id</option>";
    }
}
?>

<?php
    function create() {

        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];

        // prevent SQL injection
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        // encrypting password
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashSalt = $hashFormat . $salt;

        $password = crypt($password, $hashSalt);

        // if($username && $password) {
        //     echo $username;
        //     echo $password;
        // }
        
        // connection to database: localhost = server; root = username; '' = password; loginapp_learn = database
        $conn = mysqli_connect('localhost', 'root', '', 'loginapp_learn'); 
        if(!$conn) {
            die("Not connected to MYSQL");
        } 

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($conn, $query);
        if(!$result)  {
            die('Error in query');
        } else {
            echo "Your account created!";
        }
    }
?>

<?php
    function read() {

        global $conn;
        $query = "SELECT * FROM users";

        $result = mysqli_query($conn, $query);
        if(!$result)  {
            die('Error in query');
        }
        
        while($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }
    }
?>


<?php
    function updateTable() {
        
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        $query = "UPDATE users SET ";
        $query .= "username = '$username', "; // spaces here at the end are very important
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";
    
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query failed, not updated!" . mysqli_error($conn));
        }
    }
?>

<?php
    function delete() {
        
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";
    
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query failed, not deleted!" . mysqli_error($conn));
        }
    }
?>