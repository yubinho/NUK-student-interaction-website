<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}

$invitee=$_SESSION['usrid'];
$inviteid=$_GET['inviteid'];
$usrid=$_SESSION['usrid'];
include("conn.php");

$SQL2='';
$SQL="SELECT * FROM invite i WHERE i.inviteid=$inviteid";



////////////////////////山home
$SQL5="SELECT h.homeid FROM home h WHERE h.homedad=$usrid or h.homemom=$usrid";
$result3=mysqli_query($link,$SQL5);
while($row3=mysqli_fetch_assoc($result3)){
    $getdel=$row3['homeid'];

    $SQL6="DELETE FROM home h WHERE h.homeid=$getdel";
mysqli_query($link,$SQL6);
}

//////////////////////////


///////////////////         home+=1

$SQL4="SELECT * FROM usr u WHERE u.usrid=$usrid";
$result2=mysqli_query($link,$SQL4);
while($row2=mysqli_fetch_assoc($result2)){
    $home=$row2['home'];

    $home+=1;

$SQL5 = "UPDATE usr u SET home = $home WHERE u.usrid = $usrid" ;
mysqli_query($link,$SQL5);
}

///////////////////////////////////////////
$result=mysqli_query($link,$SQL);
while($row=mysqli_fetch_assoc($result)){
    $inviter=$row['inviter'];
    $invitee=$row['invitee'];
    if($row['typess']==1){
        $SQL7="SELECT * FROM usr u WHERE u.usrid=$inviter";
        $result7=mysqli_query($link,$SQL7);
        while($row7=mysqli_fetch_assoc($result7)){
            $home=$row7['home'];
            $home+=1;
        $SQL5 = "UPDATE usr u SET home = $home WHERE u.usrid = $inviter" ;
        mysqli_query($link,$SQL5);}

        $SQL2="INSERT INTO home(homedad,homemom) VALUE('$invitee','$inviter')";
        mysqli_query($link,$SQL2);
    }
    elseif($row['typess']==2){
        $SQL7="SELECT * FROM usr u WHERE u.usrid=$inviter";
        $result7=mysqli_query($link,$SQL7);
        while($row7=mysqli_fetch_assoc($result7)){
            $home=$row7['home'];
            $home+=1;
        $SQL5 = "UPDATE usr u SET home = $home WHERE u.usrid = $inviter" ;
        mysqli_query($link,$SQL5);}
        $SQL2="INSERT INTO home(homedad,homemom) VALUE('$inviter','$invitee')";
        mysqli_query($link,$SQL2);
    }
}
$SQL3="DELETE FROM invite WHERE invite.inviteid=$inviteid";
mysqli_query($link,$SQL3);
header("Location:familynow.php");
?>