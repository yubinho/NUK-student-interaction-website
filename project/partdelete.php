<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}

$partyid=$_GET["partyid"];
include('conn.php');
$SQL="DELETE FROM party WHERE party.partyid = $partyid";
mysqli_query($link, $SQL);
header("Location:party.php");

?>