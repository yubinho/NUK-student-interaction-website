<?php
ini_set('display_errors','off'); 
session_start();
if ($_SESSION['isadmin'] != 'yes') {
    header("Location:photo.php");
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <title>高大宿舍相片輯</title>
</head>

<body>
    <!-- start of nav bar -->
    <!-- ------------------------------------------------------------------------------ -->
    <?php
    include("navbar.php");
    ?>
    <!-- ------------------------------------------------------------------------------ -->
    <!-- end of nav bar -->

    <div class="container">
        <!-- 輪播 -->
        <div id="myCarousel" class="carousel slide">
            <!-- 輪播指示 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- 輪播內容 -->
            <div class="carousel-inner">
                <!-- 第一個輪播項目 (包含圖片、標題與介紹) -->
                <div class="item active">
                    <a href="#"><img src="photo/good09.jpg" width="200" style="margin-left: 25% ;"></a>
                    <div class="carousel-caption">
                        <h1 style="color:black;">高大宿舍</h1>
                        <p class="lead" style="color:black;">值得驕傲的窩</p>
                    </div>
                </div>

                <!-- 第二個輪播項目 (包含圖片、標題與介紹) -->
                <div class="item">
                    <a href="#"><img src="photo/good16.jpg" width="400" style="margin-left: 25%;"></a>
                    <div class="carousel-caption">
                        <h1>學二空中花園</h1>
                        <p class="lead">享受課後的時光</p>
                    </div>
                </div>

                <!-- 第三個輪播項目 (包含圖片、標題與介紹) -->
                <div class="item">
                    <a href="#"><img src="photo/good03.jpg" width="400" style="margin-left: 25%;"></a>
                    <div class="carousel-caption">
                        <h1>綜宿房間</h1>
                        <p class="lead">書桌與床鋪分開</p>
                    </div>
                </div>

                <!-- 第四個輪播項目 (包含圖片、標題與介紹) -->
                <div class="item">
                    <a href="#"><img src="photo/good04.jpg" width="400" style="margin-left: 25%;"></a>
                    <div class="carousel-caption">
                        <h1>學二洗衣間</h1>
                        <p class="lead">每層樓專屬洗衣空間</p>
                    </div>
                </div>
                <!-- 第五個輪播項目 (包含圖片、標題與介紹) -->
                <div class="item">
                    <a href="#"><img src="photo/good05.jpg" width="400" style="margin-left: 25%;"></a>
                    <div class="carousel-caption">
                        <h1>學二房間</h1>
                        <p class="lead">乾淨的睡眠環境</p>
                    </div>
                </div>
            </div>

            <!-- 輪播控制 -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>

    <!-- 瀏覽 新增按鈕 -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">瀏覽</a></li>
                    <li><a data-toggle="tab" href="#menu1">新增</a></li>
                </ul>
                <?php
                include("conn.php");
                $SQL = "SELECT * FROM photo";
                $result = mysqli_query($link, $SQL);
                while ($row = mysqli_fetch_assoc($result)) {

                    if ($row["type"] == 1) {
                        $No1[] = $row["No"];
                        $url1[] = $row["URL"];
                    } elseif ($row["type"] == 2) {

                        $url2[] = $row["URL"];
                        $No2[] = $row["No"];
                    } else {
                        $url3[] = $row["URL"];
                        $No3[] = $row["No"];
                    }
                }
                $NoCount1 = count($url1);
                $NoCount2 = count($url2);
                $NoCount3 = count($url3);


                echo "<div class='tab-content'>
                        <div id='home' value='' class='tab-pane fade in active'>";
                // 點圖片可以對圖片進行更新
                echo "<h1 style=text-align:center ;'>學一宿舍</h1>";
                for ($i = 0; $i < $NoCount1; $i += 2) {
                    echo "<a href =update.php?No=" . $No1[$i] . "><img src='$url1[$i]' width='400' style='margin-left: 25%'></a>";
                    $j = $i + 1;
                    echo "<a href =update.php?No=" . $No1[$j] . "><img src='$url1[$j]' width='400' style='margin-left: 5px'></a>" . "<br>";
                    echo "<a style='margin-left: 50%' href =delete.php?No=" . $No1[$i] . ">刪除左邊圖片</a>";
                    echo "<a style='margin-left: 50%' href =delete.php?No=" . $No1[$j] . ">刪除右邊圖片</a>";
                }

                echo "<h1 style=text-align:center;'>學二宿舍</h1>";
                for ($i = 0; $i < $NoCount2; $i += 2) {
                    echo "<a href =update.php?No=" . $No2[$i] . "><img src='$url2[$i]' width='400' style='margin-left: 25%'></a>";
                    $j = $i + 1;
                    echo "<a href =update.php?No=" . $No2[$j] . "><img src='$url2[$j]' width='400' style='margin-left: 5px'></a>" . "<br>";
                    echo "<a style='margin-left: 50%' href =delete.php?No=" . $No2[$i] . ">刪除左邊圖片</a>";
                    echo "<a style='margin-left: 50%' href =delete.php?No=" . $No2[$j] . ">刪除右邊圖片</a>";
                }
                echo "<h1 style=text-align:center;'>綜合宿舍</h1>";
                for ($i = 0; $i < $NoCount3; $i += 2) {
                    echo "<a href =update.php?No=" . $No3[$i] . "><img src='$url3[$i]' width='400' style='margin-left: 25%'></a>";
                    $j = $i + 1;
                    echo "<a href =update.php?No=" . $No3[$j] . "><img src='$url3[$j]' width='400' style='margin-left: 5px'></a>" . "<br>";
                    echo "<a style='margin-left: 50%' href =delete.php?No=" . $No3[$i] . ">刪除左邊圖片</a>";
                    echo "<a style='margin-left: 50%' href =delete.php?No=" . $No3[$j] . ">刪除右邊圖片</a>";
                }

                echo "</div>";
                echo    "<div id='menu1' class='tab-pane fade'>
    <form style='align:center;' action='addcheck.php' method='POST' enctype='multipart/form-data'>
    請選擇檔案<input type='file' name='URL'><br>
    宿舍類型:<select name='type'>
　  <option value='1'>學一宿舍</option>
　  <option value='2'>學二宿舍</option>
　  <option value='3'>綜合宿舍</option>　
        </select><br>
    <input type='submit'>
    </form>
    </div>";

                echo "</div>"; ?>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
















</body>

</html>