<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "elezionifinali";

$conn = mysqli_connect($host, $user, $password, $db_name);
// Check connection
if (!$conn) header('Location: ../index.php');
?>