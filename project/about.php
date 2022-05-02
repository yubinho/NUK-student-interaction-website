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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


</head>


<body>
    <!-- start of nav bar -->
    <!-- ------------------------------------------------------------------------------ -->
    <?php
    include("navbar.php");
    ?>
    <!-- ------------------------------------------------------------------------------ -->
    <!-- end of nav bar -->
    <div class="jumbotron">
        <h1 class="display-4">快來加入高大宿舍大家庭!!!</h1>
        <p class="lead">學習彼此尊重、協調溝通與相互關懷，及早適應團體生活的規範，一起攜手展開豐富多元的大學新生活</p>
        <hr class="my-4">
        <p>歡迎各位同學加入國立高雄大學，學生宿舍每年迎接來自各地優秀的新生們入住，一起與不同地區、不同習性與見解的同學共同生活</p>
        <a class="btn btn-primary btn-lg" href="signup" role="button">註冊</a>
    </div>
    <div class='container'>
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="display-4">關於高大宿舍</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src='photo/good09.jpg' width="200">
                    </div>
                    <div class="col-md-8 text-left">
                        <h4>用我們的行動，創建溫馨家園</h4>
                        <p class='lead'>現實的距離不代表心靈的距離，和諧的寢室關鍵在於人與人之間的關係恰到好處</p>
                        <p>學生宿舍是重要的校園學習中心與資源之一，不僅提供課堂教育的實踐與延伸，更兼具非課堂上教導的學習與體現機會。本校學生宿舍即以安定其居、樂在學習、多元關懷、協調合作及自我實現為目標，並規劃多元講座及工作坊等系列學習方案，期待學生宿舍生活成為大家大學生活中重要且難忘的體驗與回憶。也期待我們一起共同維護宿舍的各種資源，真正落實安全、優質、歡樂、及自我實現的高雄大學宿舍生活。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>