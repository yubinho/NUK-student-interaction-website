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
    <?php
    include("conn.php");
    $dadname='';
    $momname='';
    $usrid=$_SESSION['usrid'];
    $SQL="SELECT * FROM home h  WHERE h.homedad=$usrid or h.homemom=$usrid ";
    $result=mysqli_query($link,$SQL);
    $flag=0;
   
    
        while($row=mysqli_fetch_assoc($result)){            
            $dad=$row['homedad'];
            $mom=$row['homemom'];
            $SQL2="SELECT * FROM usr u WHERE u.usrid=$dad ";
            $SQL3="SELECT * FROM usr u WHERE u.usrid=$mom ";
            $result2=mysqli_query($link,$SQL2);
            $result3=mysqli_query($link,$SQL3);
            while($row2=mysqli_fetch_assoc($result2)){
                $dadname=$row2['account'];
                $dadline=$row2['lineid'];
                $dadcount=$row2['home'];
            }
                
            while($row3=mysqli_fetch_assoc($result3)){
                $momname=$row3['account'];
                $momline=$row3['lineid'];
                $momcount=$row3['home'];
            }
                
    
        echo "<div class='comment1'style='height: 800px;'>";
        echo "<h2 id='asd' style='text-align: center;'>全家福</h2>";
        echo "<div style='position:relative;'>";
        // echo "<img src='lovemom.png' width='500' height='300' '>";
        echo "<img src='reallove.png' width='900' height='350' style='display:block; margin:auto;'>";
        echo "<div style='position:absolute; z-index:2; left:230px; top:50px;text-align: center;'><h5 id='headd'>".$momname."<br/>媽迷</h5></div>";
        echo "<div style='position:absolute; z-index:2; left:700px; top:70px;text-align: center; ' ><h5 id='headd'>".$dadname."<br/>爸鼻</h5></div>";
        echo "<div style='position:absolute; z-index:2; left:230px; top:270px;text-align: center; ' ><h5 id='sayy'>-First time?</h5></div>";
        echo "<div style='position:absolute; z-index:2; left:680px; top:270px;text-align: center; ' ><h5 id='sayy'>-First time?</h5></div>";
        echo "<div style='position:absolute; z-index:2; left:240px; top:300px;text-align: center; ' ><h5 id='sayy'>(第".$momcount."次婚姻)<br/></h5></div>";
        echo "<div style='position:absolute; z-index:2; left:690px; top:300px;text-align: center; ' ><h5 id='sayy'>(第".$dadcount."次婚姻)<br/></h5></div>";
        echo "<div class='mmi'>";
        
     
        echo "爸鼻のlineid---->@".$dadline." <br/>"."媽迷のlineid---->@".$momline."<br/>";
        echo "<a href='delhome.php'>我就壞!!</a>";    
        echo "</div></div>";         
        $flag=1;      
    
    }if($flag==0){
 
        echo "<div class='comment1'>";
        echo "<img src='pooru.jpg' width='500' height='300' style='display:block; margin:auto;'> <br/>";
        echo "<h1>魯蛇:</h1>魯蛇即英文「loser」（失敗者）的諧音。由於在ptt上很多酸民喜歡酸其他有成就或過得爽的人（有錢人、公務員、替代役…），反過來就會有些鄉民開始反酸這些人自己是loser（例沒錢、沒工作或領22k、交不到女朋友的阿宅之類），所以只能在網路上酸別人。之後就逐漸出現這個諧音的用法來取代loser一詞。";
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

