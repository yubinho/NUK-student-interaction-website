<?php
ini_set('display_errors','off'); 
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}
$invitee=$_SESSION['usrid'];
$inviteid=$_GET['inviteid'];
include("conn.php");
$SQL="DELETE FROM invite i WHERE i.inviteid=$inviteid";
mysqli_query($link,$SQL);
header("Location:familynow.php");
?>