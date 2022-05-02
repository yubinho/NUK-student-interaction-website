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
    <img src="pooru.jpg" width="500" height="300" style="display:block; margin:auto;"> <br/>
    <h1>family</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam repudiandae explicabo odit qui sed ratione voluptatibus laudantium enim porro quaerat.
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

