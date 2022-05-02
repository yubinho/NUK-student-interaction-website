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


<div class="comment1">
<form action="partycheck.php" method="post">
<p>偶要開趴!!</p>
活動名稱: 
<input type="text" name="name" required="required"> <br/>
活動日期:
<input type="date" name="dates" required="required">  時間:
<input type="time" name="when" required="required"> <br/>
活動地點: 

             
                            <select name="build" id="" required="required">
                                <option value="學一">學一</option>
                                <option value="學二">學二</option>
                                <option value="綜宿">綜宿</option>
                            </select>
的 <input type="text" name="room" pattern="[0-9]{3}" placeholder="偶房間(格式為三位數數字)" size="25" required="required">
<br/>                
活動宗旨:
<textarea name="purpose" id="" cols="30" rows="3" placeholder="這是一個...派對!" required="required"></textarea> <br/>
<button type="submit" class="btn btn-primary">開趴!</button>

</form>
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

