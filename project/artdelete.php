<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}

$articleid=$_GET["articleid"];
include('conn.php');
$SQL="DELETE FROM article WHERE article.articleid =$articleid";
mysqli_query($link, $SQL);
header("Location:showarticle.php");

?>