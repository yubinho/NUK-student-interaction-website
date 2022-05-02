<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}
include("conn.php");
$usrid=$_SESSION['usrid'];
$SQL="SELECT h.homeid FROM home h WHERE h.homedad=$usrid or h.homemom=$usrid";
$result=mysqli_query($link,$SQL);
while($row=mysqli_fetch_assoc($result)){
    $ddd=$row['homeid'];
    $SQL2="DELETE FROM home h WHERE h.homeid=$ddd";
    mysqli_query($link,$SQL2);
    header("Location:familynow.php");
}




?>