<?php 
session_start();
require "./config.php";
    $sql ="SELECT * FROM user where UserName = '$_SESSION[userName]' ";
    $res = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($res)) {
        ?>
        <a href='view.php?id_user= <?php echo $row['id_user']; ?>' > 
            profil
        </a>
        <?php
    }
?>
    
