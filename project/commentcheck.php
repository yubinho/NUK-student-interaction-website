<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}
include('conn.php');
$comment=$_POST['comment'];
$articleid=$_POST['articleid'];
$usrid=$_SESSION['usrid'];
$SQL4="INSERT INTO comment(articleid,usrid,comment) VALUES('$articleid','$usrid','$comment')";
mysqli_query($link,$SQL4);
header("Location:showarticle.php");
?>
