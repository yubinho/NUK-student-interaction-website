<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:index.php");
}
?>
<?php
session_start();
include("conn.php");
$name=$_POST['name'];
$dates=$_POST["dates"];
$when=$_POST['when'];
$build=$_POST['build'];
$room=$_POST['room'];
$purpose=$_POST['purpose'];
$usrid=$_SESSION['usrid'];
$SQL="INSERT INTO party(partyname,partydates,partywhen,partybuild,partyroom,partygoal,partyholder) VALUE('$name','$dates','$when','$build','$room','$purpose','$usrid')";
mysqli_query($link,$SQL);
header("Location:party.php");
?>