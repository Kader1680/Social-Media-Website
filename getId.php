
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Valley";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id_user from user where UserName = '$_SESSION[userName]'";
    $result = $conn->query($sql);
    
    ?>