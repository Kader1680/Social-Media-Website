<?php

session_start();
require "./config.php";
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = $_GET['id_user'];
    $sql = "DELETE from user WHERE id_user = '$id' LIMIT 1 ";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    <?php require "./assets/css/style.css" ?>
</style>
<body>
    <div class="success">
        <h2 class="mb-3">Delete User susessful !</h2>
        <a class="login" href="adminpage.php">Back to Admin Page</a>
    </div>
</body>
</html>
