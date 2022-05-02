<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}
// ini_set('display_errors','off'); 
session_start();
include("conn.php");
$inviter=$_SESSION['usrid'];
$sex=$_POST['invite'];
$invitee='';
$say=$_POST['say'];
$typess=0;
$SQL3;
$timess = date('m\月d\日H\:i');
if($sex=='male')
    $typess=1;
else 
    $typess=2;
$SQL="SELECT * FROM usr WHERE usr.sex='$sex' ORDER BY RAND() LIMIT 1";
$result=mysqli_query($link,$SQL);
$SQL2="SELECT count(*) FROM invite i where i.inviter=$inviter ";
$result2=mysqli_query($link,$SQL2);
while($row2=mysqli_fetch_assoc($result2)){
    if($row2['count(*)']>=3){
        echo "<script>alert('渣男/女你也記出太多邀請了八！');parent.location.href='familybuild.php'</script>";
    }
    else{
        while($row=mysqli_fetch_assoc($result)){
            $invitee=$row['usrid'];
        }
        $SQL3="INSERT INTO invite(inviter,invitee,say,typess,timess) VALUES('$inviter','$invitee','$say','$typess','$timess')";
     
        mysqli_query($link,$SQL3);
echo "<script>alert('邀請已寄出了ㄛ!');parent.location.href='familybuild.php'</script>";
    }
    
}

header("Location:familybuild.php");
?>