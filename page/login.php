<?php 
require "./config.php";



$username = "";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];

    // $sql = "INSERT INTO user (name)". 
    // "VALUE ('$username')";

    $sql = "SELECT * FROM user where name = '$username' ";
    $result = $conn ->query($sql);
    if ( $result) {
       echo "sorry this user exit try agian";
    }else{
        $sql = "INSERT INTO user (name)". 
        "VALUE ('$username')";
        $result = $conn ->query($sql);
        
    }
}





?>

<form action="" method="POST">

        <label for="username">name</label>
        <input name="username" type="text">
        <button name="submit" type="submit">click</button>
</form>
