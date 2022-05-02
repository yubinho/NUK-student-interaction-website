<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}
$usrid=$_SESSION["usrid"];
$articleid=$_GET["articleid"];
include('conn.php');
$SQL2 = "SELECT *  FROM rating r WHERE r.articleid=$articleid";
$result2=mysqli_query($link, $SQL2);
$SQL3 = "INSERT INTO rating(articleid,usrid,types) VALUES('$articleid','$usrid','good')";
$SQL = "UPDATE rating SET types = 'good' WHERE rating.articleid = $articleid AND rating.usrid = $usrid" ;
$SQL4 = "UPDATE rating SET types = '' WHERE rating.articleid = $articleid AND rating.usrid = $usrid" ;
while($row=mysqli_fetch_assoc($result2)){
    if($usrid==$row['usrid'] && $row['types']=='good'){
        mysqli_query($link, $SQL4);
        header("Location:showarticle.php");
    }
    elseif($usrid==$row['usrid'] && $row['types']=='bad' || $usrid==$row['usrid'] && $row['types']==''){
        mysqli_query($link, $SQL);
        header("Location:showarticle.php");
    }
  
}
    mysqli_query($link, $SQL3);
    header("Location:showarticle.php");

?>