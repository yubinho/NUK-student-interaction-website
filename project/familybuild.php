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
    <h1>familyinvite</h1>
    <form action="buildcheck.php" method="post">
    <div class="form-group col-md-4">
      <label for="inputState">我想要找</label>
      <select id="inputState" class="form-control" name="invite">
        <option selected value="girl">宿老婆</option>
        <option value="male">宿老公</option>
      </select>
    </div>
    <label for="exampleFormControlTextarea1">我想說!</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name='say'></textarea> <br/>
    <button type="submit" class="btn btn-primary">提交</button>
    </form>
    <blockquote>
    --不只想要宿老公/宿老婆嗎??也想要有宿小孩們嗎??要有宿小孩前要先有另一伴喔!!
    </blockquote>
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

