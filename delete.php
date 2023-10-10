<?php
session_start();
require "./config.php";
require "getId.php";

$sql = "DELETE from user WHERE id_user = '$id_user' ";
$result = $conn->query($sql);


?>