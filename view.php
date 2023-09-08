<?php 

require "./config.php";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id_user = $_GET['id_user'];
    $sql ="SELECT * FROM user WHERE id_user = '$id_user' ";
    $res = $conn->query($sql);
        while ($row = mysqli_fetch_array($res)) {
            ?>
            <p> <?php echo $row['FirstName'] ?></p>
            <p > <?php echo $row['LastName'] ?></p>
            <p> <?php echo $row['Email'] ?></p>
            <p> <?php echo $row['UserName'] ?></p>
            <?php
        }
}




?>