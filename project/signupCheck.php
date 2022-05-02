<?php
include('conn.php');


$username = $_POST["username"];
$pwd = $_POST["password"];
$confirm = $_POST["confirm_password"];
$sex=$_POST["sex"];
$lineid=$_POST["lineid"];

$time = time();
$pic=$_FILES["pic"]["name"];
$path=pathinfo($pic);
$newpic = "./photo/" .  $time . "." . $path["extension"]; #取photo的新名字


if ($pwd == $confirm) {
    $SQL = "INSERT INTO usr(account,passwd,sex,lineid,pic) VALUES('$username','$pwd','$sex','$lineid','$newpic')";
    copy($_FILES["pic"]["tmp_name"], $newpic);
    if ($result = mysqli_query($link, $SQL)) {
        echo "註冊成功";
        echo "<Script>
        setTimeout(function()
        {window.location.href='login.php';},1000);
                </Script>";
    } else {
        echo "註冊失敗";
        echo "<Script>
        setTimeout(function()
        {window.location.href='signup.php';},1000);
             </Script>";
    }
} else {
    echo "確認密碼不符";
    echo "<Script>
    setTimeout(function()
    {window.location.href='signup.php';},1000);
            </Script>";
}
?>