<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}

include('conn.php');

$usrid=$_SESSION["usrid"];
$content = $_POST["content"];
date_default_timezone_set('Asia/Taipei');
$title = $_POST["title"];
$time = date('m\月d\日H\:i');

include('conn.php');
$SQL = "INSERT INTO article(usrid,title,content,dates) VALUES('$usrid','$title','$content','$time')";
if ($result = mysqli_query($link, $SQL)) {
 
    echo "<script>alert('留言成功');parent.location.href='showarticle.php'</script>";
    
} else {
    echo "<script>alert('留言失敗囉哭哭哭哭嗚嗚嗚嗚嗚');parent.location.href='showarticle.php'</script>";
}

?>





