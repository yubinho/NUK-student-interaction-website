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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="css/homepagestyle.css">


</head>
<body>
  <!-- start of nav bar -->
    <!-- ------------------------------------------------------------------------------ -->
<?php
include("navbar.php");
?>
 <!-- ------------------------------------------------------------------------------ -->
  <!-- end of nav bar -->
    <section id="intro">
    <div class="jumbotron">
        <div class="container">
            <div class="col-12">
                <h1>安安你好</h1>
                <p class="lead">歡迎來到高大宿舍網站，最好的都在這裡ㄛ!</p>
                <hr class="my-4">
                <p>歡迎來到高大宿舍網站，最好的都在這裡ㄛ!歡迎來到高大宿舍網站，最好的都在這裡ㄛ!歡迎來到高大宿舍網站，最好的都在這裡ㄛ!</p>
            </div>
        </div>
    </div>
    </section>

    <section id="graph">
      <div class="jumbotron">
        <div class="row">
        <div class="col" ontouchstart="this.classList.toggle('hover');">
						<div class="container">
							<div class="front" style="background-image: url(dorm1.jpg)">
								<div class="inner">
									<p>學生宿舍一</p>
		              <span>尊爵體驗</span>
								</div>
							</div>
							<div class="back">
								<div class="inner">
								  <p>'That's the feeling of being rich'</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col" ontouchstart="this.classList.toggle('hover');">
						<div class="container">
							<div class="front" style="background-image:url(dorm2.jpg)">
								<div class="inner">
									<p>學生宿舍二</p>
		              <span>陶珠隱園</span>
								</div>
							</div>
							<div class="back">
								<div class="inner">
									<p>'Far from the noise'</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col" ontouchstart="this.classList.toggle('hover');">
						<div class="container">
							<div class="front" style="background-image: url(dorm3.jpg)">
								<div class="inner">
									<p>學生宿舍三</p>
		              <span>極致體驗</span>
								</div>
							</div>
							<div class="back">
								<div class="inner">
									<p>'You could call it HOME''</p>
								</div>
							</div>
						</div>
					</div>


        </div>        
      </div> 
    </section>
    
   
    





<?php
include("footer.php");
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>