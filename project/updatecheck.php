<?php
$type = $_POST["type"];
$No = $_POST["No"];


$time = time();

$URL = $_FILES["URL"]["name"];
$path = pathinfo($URL);
$NewPhoto = "./photo/" .  $time . "." . $path["extension"]; #取photo的新名字
copy($_FILES["URL"]["tmp_name"], $NewPhoto);




include("conn.php");


$SQL = "UPDATE photo SET URL='$NewPhoto', type='$type' WHERE No='$No'";




if ($result = mysqli_query($link, $SQL)) {
    header("Location:photoAdmin.php");
} else {
    echo "更新失敗";
}
?>