<?php
session_start();
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

    <!-- start of nav bar -->
    <!-- ------------------------------------------------------------------------------ -->
    <?php
    include("navbar.php");
    ?>
    <!-- ------------------------------------------------------------------------------ -->
    <!-- end of nav bar -->
    <div class="box bg-1">
        
        <button  class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='familynow.php'">偶們是一家人!</button>
        <button id="bbt" class="button button--ujarak button--border-thin button--text-thick"
            onclick="location.href='message.php'">踹共拉</button>
        <button class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='party.php'">開趴囉</button>
    </div>
<div class="container"><h1>宿舍大小事</h1> </div>
    <?php
    date_default_timezone_set('Asia/Taipei');
    include("conn.php");
    $SQL = "SELECT * FROM article a,usr u WHERE u.usrid=a.usrid ORDER BY a.articleid DESC";
    $result = mysqli_query($link, $SQL);




    while ($row = mysqli_fetch_assoc($result)) {
        $mom = $row['articleid'];
        $SQL3 = "SELECT * FROM comment c WHERE c.articleid=$mom";
        $result3 = mysqli_query($link, $SQL3);
        $SQL2 = "SELECT * FROM rating r ";
        $result2 = mysqli_query($link, $SQL2);
        $goodc = 0;
        $badc = 0;
        echo "<div class='comment1'>";
        if($row['types']=='admin')
        echo "<span class='badge badge-warning'>管理員</span>";
        else
        echo "<span class='badge badge-primary'>一般用戶</span>";
        echo "<img src='".$row['pic']."' alt='' style='width:100px;height:100px'>";
        echo       "<footer>" . "-" . $row["account"];
        echo      "．";
        echo      "</footer>" . "<h6>" . $row['dates'] . "</h6>";
        echo       "<p>" . $row["title"] . "</p>";
        echo    "<blockquote>";
        echo        $row["content"] . "<br/>";
        echo       "</blockquote>";

        // ***********有關讚ㄉ(以下)**************
        while ($row2 = mysqli_fetch_assoc($result2)) {

            if ($row2['articleid'] == $row['articleid'] && $row2['types'] == 'good') {
                $goodc = $goodc + 1;
            } elseif ($row2['articleid'] == $row['articleid'] && $row2['types'] == 'bad') {
                $badc = $badc + 1;
            }
        }
        echo $goodc;
        echo        "<a href='good.php?articleid=" . $row['articleid'] . "'>神串</a>";
        echo "  /  ";
        echo $badc;
        echo        "<a href='bad.php?articleid=" . $row['articleid'] . "'>糞文</a><br/>";
        if ($_SESSION['isadmin'] == 'yes' || $row['usrid'] == $_SESSION['usrid']) {
            echo  "<a href='artdelete.php?articleid=" . $row['articleid'] . "'>刪除文章</a>";
        }
        echo "<hr>";
        // ***********有關讚ㄉ(以上)**************


        // **********************有關寫留言(以下)************************
        $row['articleid'];
        echo "<form action='commentcheck.php' method='post'>";
        echo "<input type = 'hidden' name = 'articleid' value = '" . $row['articleid'] . "'>";
        echo   "<input type='text' name='comment' class='form-control' id='exampleFormControlInput1' placeholder='寫點甚麼吧!' required='required'>";
        echo "<input type='submit' class='btn btn-primary' value='留言'>";
        echo  "</form><hr>";



        // **********************有關寫留言(以上)************************

        //  ********************有關印留言(以下)*********************


        $cwhere = 0;
        while ($row3 = mysqli_fetch_assoc($result3)) {
            echo "<blockquote>";
            echo "B" . $cwhere . "---" . $row3["comment"];
            if($_SESSION['usrid']==$row3['usrid'] || $_SESSION['isadmin']=='yes'){
                echo "/<a href='comdelete.php?commentid=".$row3['commentid']."'>刪除留言</a>";
            }
            echo "<br/>";
            echo "</blockquote>";
            echo "<hr>";
            
            $cwhere = $cwhere + 1;
        }
        // *********************有官印留言(以上)*******************

        echo   "</div>";
    }

    ?>




    <?php
    include("footer.php");
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
</html>