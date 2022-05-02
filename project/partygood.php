<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:index.php");
}
?>
<?php
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}
$usrid=$_SESSION["usrid"];
$partyid=$_GET["partyid"];
include('conn.php');
$SQL2 = "SELECT *  FROM partygood pg WHERE pg.partyid=$partyid";
$result2=mysqli_query($link, $SQL2);
$SQL3 = "INSERT INTO partygood(partyid,usrid) VALUES('$partyid','$usrid')";
$SQL = "DELETE FROM partygood pg WHERE pg.partyid='$partyid'" ;
// if($row3=mysqli_fetch_assoc($result2))
//     echo "hi";
// else{
//     mysqli_query($link, $SQL3);
//     echo "幹";
//     // header("Refresh:0;url=party.php");
// }
$flag=0;
while($row=mysqli_fetch_assoc($result2)){
    if($usrid==$row['usrid']){
        mysqli_query($link,$SQL);

        header("Location:party.php");
        $flag=1;
    }
  
}
if($flag==0){

mysqli_query($link, $SQL3);
header("Location:party.php");
}
?>