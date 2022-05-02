<?php

ini_set('display_errors','off'); 
session_start();

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 100px;">

    <img src="nuk.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">

    <a class="navbar-brand" href="index.php">高大宿舍</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">

                <a class="nav-link" href="index.php">首頁 <span class="sr-only">(current)</span></a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="login.php">登入</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="logout.php">登出</a>

            </li>

            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">

                    更多

                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="showarticle.php">社交</a>

                    <a class="dropdown-item" href="about.php">關於高大宿舍</a>

                    <a class="dropdown-item" href="photo.php">照片輯</a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="signup.php">註冊</a>

                    <?php

                    ini_set('display_errors','off'); 

                    

                    if($_SESSION['isadmin']=='yes')

                    echo "<a class='dropdown-item' href='statistics.php'>統計</a>";

                    ?>

                </div>

            </li>



        </ul>

        <?php

    ini_set('display_errors', 'off');

    include('conn.php');



    $usrid = $_SESSION['usrid'];

    $SQL = "SELECT * FROM usr u WHERE u.usrid=$usrid";

    $result = mysqli_query($link, $SQL);

    $row = mysqli_fetch_assoc($result);

    if ($_SESSION['logstat'] == 'ok') {

        echo "<img src='".$row['pic']."' alt='' style='width:50px;height:50px'>";

      echo "您已順利登入了，歡迎" . $row['account'] . "回來!   ";

      if ($_SESSION['isadmin'] == 'yes') {

        echo "<span class='badge badge-warning'>管理員</span>";

      } else {

        echo "<span class='badge badge-primary'>一般用戶</span>";

      }

    } else {

      echo "您還尚未登入ㄛ!";

    }

    ?>

    </div>

</nav>