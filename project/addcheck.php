<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']!='ok'){
    header("Location:login.php");
}


$type = $_POST["type"];


$time = time();

$URL = $_FILES["URL"]["name"];
$path = pathinfo($URL);
$NewPhoto = "./photo/" .  $time . "." . $path["extension"]; #取photo的新名字
copy($_FILES["URL"]["tmp_name"], $NewPhoto);




include("conn.php");
$SQL = "INSERT INTO photo(URL,type) VALUES('$NewPhoto','$type')";
if ($result = mysqli_query($link, $SQL)) {
    header("Location:photoAdmin.php");
} else {
    echo "新增失敗";
}