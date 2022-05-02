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
    <button  class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='showarticle.php'">返回</button>
        <button  class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='familynow.php'">偶們是一家人!</button>
        <button id="bbt" class="button button--ujarak button--border-thin button--text-thick"
            onclick="location.href='message.php'">踹共拉</button>
        <button class="button button--ujarak button--border-thin button--text-thick" onclick="location.href='party.php'">開趴囉</button>
    </div>
    <?php
    ini_set('display_errors', 'off');

    if ($_SESSION["logstat"] != 'ok') {
        echo "你還沒登入ㄛㄛㄛㄛㄛㄛ";
        header("Refresh:0;url=login.php");
    }
    


    ?>
    <section id='message'>
    
           <div class="comment1" style="height: 500px;">
                    <h2>留言區</h2>
                    <p></p>
                    <form action="messagecheck.php" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">標題</span>
                            </div>
                            <input type="text" class="form-control" name="title" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">內容</span>
                            </div>
                            <textarea class="form-control" name="content" aria-label="With textarea"></textarea>
                        </div>
           
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="送出">
                    <input type="reset" class="btn btn-default" value="重填">
           
                </form>
                </div>
    </section>
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