<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高大宿舍
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/vicons-font.css" />
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="css/test.css" />

</head>
<body>
    <?php
    include("navbar.php");
    ?>
    <div class="box bg-1">
    <button  class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='showarticle.php'">返回</button>
        <button  class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='familyinvite.php'">成家邀請!!!</button>
        <button id="bbt" class="button button--ujarak button--border-thin button--text-thick"
            onclick="location.href='familybuild.php'">成家立業!!!</button>
        <button class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='familynow.php'">偶現在ㄉ家!!</button>
    </div>

 
<div class="comment1">
    <p>寄送給你的邀請</p>
</div>
<div class="comment1">
    <?php
    

include("conn.php");
$usrid=$_SESSION['usrid'];
// echo $usrid;
$SQL="SELECT * FROM invite i JOIN usr u ON i.inviter=u.usrid WHERE i.invitee=$usrid ORDER BY i.inviteid DESC ";

$result=mysqli_query($link,$SQL);
$cand=1;
while($row=mysqli_fetch_assoc($result)){
    echo "<div class='mmi'>";
    echo "<img src='".$row['pic']."' alt='' style='width:300px;height:250px;display:block; margin:auto;border:5px #FFAC55 solid;'>";
    echo "<blockquote>";
    if($row['typess']==1){
       
        echo       "<footer>";
        echo "#口以成為我的宿老公嗎>< <br/>";
        echo      "</footer>";
    }
    elseif($row['typess']==2){
        
    echo       "<footer>";
    echo "口以成為我的宿老婆嗎>< <br/>";  
    echo      "</footer>" ;
} 
    echo "[".$cand."號候選人]    ".$row["account"];
    if($row['sex']=='male')
        echo "先生<br/>";
    else
        echo "小姐<br/>";
    echo "想說說:<br/>".$row['say'];
    echo "<br/>".$row['timess'];
    echo "</blockquote>";
    
   
        echo "<a href='accept.php?inviteid=" . $row['inviteid'] . "'>好挖</a>";
        echo "  /  ";  
        echo  "<a href='decline.php?inviteid=" . $row['inviteid'] . "'>滾</a><br/>";
        $cand+=1;
        echo "</div>";
}
    ?>
</div>






<?php
// include("footer.php");

?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="js/bmain.js"></script>
</body>

