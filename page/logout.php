<?php 


session_start();
unset($_SESSION['firstName']);
unset($_SESSION['lastName']);
unset($_SESSION['email']);
unset($_SESSION['userName']);
unset($_SESSION['password']);

header('Location: login.php')
?>