<?php
session_start();
unset($_SESSION['UssId']);
header("location:index.php");
exit();
?>