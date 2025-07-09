<?php 

session_unset();
unset($_SESSION['activeID']);
session_destroy();
header('Location:index.php');
?>