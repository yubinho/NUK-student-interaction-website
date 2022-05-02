<?php
ini_set('display_errors','off'); 
session_start();
if ($_SESSION['isadmin'] != 'yes') {
    header("Location:index.php");
}
?>
<html>
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!-- ///////////////算次數 -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      function drawStuff() {

        
        var data1 = new google.visualization.arrayToDataTable([
            ['用戶名', '次數'],
            <?php
            include("conn.php");
            $SQL="SELECT u.account,u.home FROM usr u ";
            $result=mysqli_query($link,$SQL);
            while($row=mysqli_fetch_assoc($result)){
                $account=$row['account'];
                $home=$row['home'];
                [$account,$home];
                
                echo "['".$account."',".$home."],";
            }
           
            ?>
           
           
         
          
        ]);

        var options = {
          title: '各用戶婚姻次數',
          width: 900,
          legend: { position: 'none' },
          chart: { title: '婚姻次數',
                   subtitle: '各用戶婚姻次數' },
        //   bars: 'horizontal', // Required for Material Bar Charts.
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'buttom', label: '次數'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x1_div'));
        chart.draw(data1, options);
      };
    </script>
    <!-- //////////////// -->

<!-- ///////////////算案讚 -->
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      function drawStuff() {
        $a='asb'
        
        var data2 = new google.visualization.arrayToDataTable([
          ['性別','女生','男生'],
            <?php
            $girlgood=0;$girlbad=0;$malegood=0;$malebad=0;
            include("conn.php");
            ///////////////////////
            $SQL="SELECT count(*) FROM article a,rating r,usr u WHERE a.articleid=r.articleid and a.usrid=u.usrid and u.sex='girl' and r.types='good' ";
            $result=mysqli_query($link,$SQL);
            while($row=mysqli_fetch_assoc($result)){
              $SQL3="SELECT count(*) FROM article a,rating r,usr u WHERE a.articleid=r.articleid and a.usrid=u.usrid and u.sex='male' and r.types='good' ";
              $result3=mysqli_query($link,$SQL3);
              while($row3=mysqli_fetch_assoc($result3)){
                $malegood=$row3['count(*)'];  
            }
            $girlgood=$row['count(*)'];            
            echo "['讚數','".$girlgood."','".$malegood."'],";   
              
          }
          /////////////
          $SQL2="SELECT count(*) FROM article a,rating r,usr u WHERE a.articleid=r.articleid and a.usrid=u.usrid and u.sex='girl' and r.types='bad' ";
          $result2=mysqli_query($link,$SQL2);
          while($row2=mysqli_fetch_assoc($result2)){
            $SQL4="SELECT count(*) FROM article a,rating r,usr u WHERE a.articleid=r.articleid and a.usrid=u.usrid and u.sex='male' and r.types='bad' ";
            $result4=mysqli_query($link,$SQL4);
            while($row4=mysqli_fetch_assoc($result4)){
              $malebad=$row4['count(*)']; 
          }
          $girlbad=$row2['count(*)'];             
          echo "['爛數','".$girlbad."','".$malebad."'],";  
        }
        ///////////////////////////
            ?>     
           
         
          
        ]);
        var options = {
          title: '男女案讚',
          width: 900,
          legend: { position: 'none' },
          chart: { title: '男女案讚',
                   subtitle: '男女案讚' },
        //   bars: 'horizontal', // Required for Material Bar Charts.
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'buttom', label: '次數'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart2 = new google.charts.Bar(document.getElementById('top_x2_div'));
        chart2.draw(data2, options);
      };
    </script>
    <!-- //////////////// -->


    <!-- ////////////////////////開趴1 -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data3 = google.visualization.arrayToDataTable([
          ['房號', '次數'],
         <?php
         $a=2;
         include("conn.php");
         $SQL="SELECT p.partyroom,count(*) FROM party p WHERE p.partybuild='學一' group by p.partyroom";
         $result=mysqli_query($link,$SQL);
         while($row=mysqli_fetch_assoc($result)){
           $room=(int)$row['partyroom'];
           $t=(int)$row['count(*)'];
           echo "[".$room.",".$t."],";
         } ?>
        ]);

        var options = {
          title: '學一開趴次數統計',
          hAxis: {title: '房號', minValue: 0, maxValue: 15},
          vAxis: {title: '次數', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart3 = new google.visualization.ScatterChart(document.getElementById('chart_div3'));

        chart3.draw(data3, options);
      }
    </script>
  </head>




    <!-- ///////////////////////////////////////開趴1 -->
      <!-- ////////////////////////開趴2 -->
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data4 = google.visualization.arrayToDataTable([
          ['房號', '次數'],
         <?php
         $a=2;
         include("conn.php");
         $SQL="SELECT p.partyroom,count(*) FROM party p WHERE p.partybuild='學二' group by p.partyroom";
         $result=mysqli_query($link,$SQL);
         while($row=mysqli_fetch_assoc($result)){
           $room=(int)$row['partyroom'];
           $t=(int)$row['count(*)'];
           echo "[".$room.",".$t."],";
         } ?>
        ]);

        var options = {
          title: '學二開趴次數統計',
          hAxis: {title: '房號', minValue: 0, maxValue: 15},
          vAxis: {title: '次數', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart4 = new google.visualization.ScatterChart(document.getElementById('chart_div4'));

        chart4.draw(data4, options);
      }
    </script>
    </head>
    <!-- ///////////////////////////////////////開趴2 -->
         <!-- ////////////////////////開趴3 -->
         <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data5 = google.visualization.arrayToDataTable([
          ['房號', '次數'],
         <?php
         $a=2;
         include("conn.php");
         $SQL="SELECT p.partyroom,count(*) FROM party p WHERE p.partybuild='綜宿' group by p.partyroom";
         $result=mysqli_query($link,$SQL);
         while($row=mysqli_fetch_assoc($result)){
           $room=(int)$row['partyroom'];
           $t=(int)$row['count(*)'];
           echo "[".$room.",".$t."],";
         } ?>
        ]);

        var options = {
          title: '綜宿開趴次數統計',
          hAxis: {title: '房號', minValue: 0, maxValue: 15},
          vAxis: {title: '次數', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart5 = new google.visualization.ScatterChart(document.getElementById('chart_div5'));

        chart5.draw(data5, options);
      }
    </script>
    </head>
    <!-- ///////////////////////////////////////開趴3 -->


  </head>
  <body>
      <!-- /////////////////////////// -->
  <?php
    include("navbar.php");
    ?>
<!-- /////////////////////////////////////// -->
    <div class="comment1">
    <div id="top_x1_div" style="width: 900px; height: 500px;"></div>
    </div>

    <div class="comment1">
    <div id="top_x2_div" style="width: 900px; height: 500px;"></div>
    </div>

    <div class="comment1">
    <div id="chart_div3" style="width: 900px; height: 500px;"></div>
    </div>

    <div class="comment1">
    <div id="chart_div4" style="width: 900px; height: 500px;"></div>
    </div>

    <div class="comment1">
    <div id="chart_div5" style="width: 900px; height: 500px;"></div>
    </div>













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