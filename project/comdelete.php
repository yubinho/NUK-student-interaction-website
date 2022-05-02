<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}

$commentid=$_GET["commentid"];

include('conn.php');
$SQL="DELETE FROM comment WHERE comment.commentid=$commentid";
mysqli_query($link, $SQL);
header("Location:showarticle.php");

?>