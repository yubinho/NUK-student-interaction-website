<?php
ini_set('display_errors','off'); 
session_start();
session_destroy();
header("Location:index.php");
?>
