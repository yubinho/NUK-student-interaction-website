<!-- 申請頁面 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高大宿舍
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="homepagestyle.css">


</head>


<body>
    <!-- start of nav bar -->
    <!-- ------------------------------------------------------------------------------ -->
    <?php
    include("navbar.php");
    ?>
    <!-- ------------------------------------------------------------------------------ -->
    <!-- end of nav bar -->
    <section id='signup'>
        <div class="jumbotron">
            <div class='container'>
                <div class="col-12">
                    <h2>註冊</h2>
                    <p>請填入資料來創立新的帳戶</p>
                    <form action="signupCheck.php" method="post" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label>帳號</label>
                            <input type="text" name="username" class="form-control" value="" required="required">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Line ID</label>
                            <input type="password" name="lineid" class="form-control" value="" required="required">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>密碼</label>
                            <input type="password" name="password" class="form-control" value="" required="required">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>確認密碼</label>
                            <input type="password" name="confirm_password" class="form-control" value="" required="required">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>性別</label>
                            <select name="sex" id="" required="required">
                                <option value="male">男生</option>
                                <option value="girl">女生</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>上傳當大頭貼的照片</label>
                            <input type="file" accept=".png,.jpg" name="pic" class="form-control" value="" required="required">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="提交">
                            <input type="reset" class="btn btn-default" value="重設">
                        </div>
                        <p>已有帳號? <a href="login.php">按此登入</a>.</p>
                    </form>

                </div>
            </div>
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

</body>

</html>