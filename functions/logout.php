<?php
session_start();
$_SESSION["connecte"]==false;
echo $_SESSION["connecte"];
session_destroy();
header('Location: ../index.php');
?>
