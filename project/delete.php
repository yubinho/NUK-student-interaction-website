<?php

session_start();
if ($_SESSION['isadmin'] != 'admin') {
    header("Location:photo.php");
}


$No = $_GET["No"];


include('conn.php');
$SQL = "DELETE FROM photo WHERE No='$No'";

if ($result = mysqli_query($link, $SQL)) {
    header('Location: photoAdmin.php');
} else {
    echo "刪除失敗";
}