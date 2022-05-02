<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:index.php");
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
        <button  class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='party.php'">趴踢列表!!!</button>
        <button id="bbt" class="button button--ujarak button--border-thin button--text-thick"
            onclick="location.href='openparty.php'">我要開趴踢!!!</button>
        </div>


<
<?php
include("conn.php");
$SQL="SELECT * FROM party p JOIN usr u on p.partyholder=u.usrid ORDER BY p.partyid DESC";

$result=mysqli_query($link,$SQL);
while($row=mysqli_fetch_assoc($result)){
    echo "<div class='comment1'>";
    $pc=0;
    $partyid=$row['partyid'];
    $SQL2="SELECT * FROM partygood pg WHERE pg.partyid=$partyid ";
    $result2=mysqli_query($link,$SQL2);
    
    echo "<p>".$row['partyname']."</p>";
    echo "<blockquote>";
    echo "活動介紹".$row['partygoal']."<br/>";
    echo "活動日期:".$row['partydates']."--".$row['partywhen']."<br/>";
    echo "在".$row['partybuild']."的".$row['partyroom']."號房喔!<br/>";
    echo "</blockquote>";
    while ($row2 = mysqli_fetch_assoc($result2)) {

        if ($row2['partyid'] == $row['partyid'] ) {
            $pc +=1;
        } 
    }
    echo "有興趣的人:".$pc;
    echo "<br/>";
    echo "發起人--<footer>".$row['account'];
    if($row['types']=='admin')
        echo "<span class='badge badge-warning'>管理員</span>";
        else
        echo "<span class='badge badge-primary'>一般用戶</span>";
    echo "</footer><br/>";
    echo "<a href='partygood.php?partyid=" . $row['partyid'] . "'>算我一份</a>";
    if ($_SESSION['isadmin'] == 'yes' || $row['usrid'] == $_SESSION['usrid']) {
            echo  " / <a href='partdelete.php?partyid=" . $row['partyid'] . "'>刪除趴踢</a>";
        }
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

