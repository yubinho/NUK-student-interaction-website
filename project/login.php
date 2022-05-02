<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']=='ok'){
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
    <link rel="stylesheet" type="text/css" href="css/popnormalize.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/vintage-popup.min.css">
    <link rel="stylesheet" href="dist/popup-material-theme.min.css">

    <link rel="stylesheet" type="text/css" href="">



</head>

<body>
    <!-- start of nav bar -->
    <!-- ------------------------------------------------------------------------------ -->
    <?php
    include("navbar.php");
    ?>
    <!-- ------------------------------------------------------------------------------ -->
    <!-- end of nav bar -->

    <section id='login'>
        <div class='container'>
            <div class="col-md-12">
                <div class='login-form'>
                    <form action="logincheck.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">帳號</label>
                            <input type="text" name="account" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="輸入帳號">
                            <small id="emailHelp" class="form-text text-muted">帳號為您的學號</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">密碼</label>
                            <input type="password" name="passwd" class="form-control" id="exampleInputPassword1"
                                placeholder="輸入密碼">
                        </div>
                        <br>
                        <button type="submit" class="btn-primary">登入</button>
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
    <script src="dist/vintage-popup.min.js"></script>
    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
</body>
</html>