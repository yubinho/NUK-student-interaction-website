<?php
$No = $_GET["No"];

include('conn.php');
$SQL = "SELECT * FROM photo WHERE No='$No'";
$result = mysqli_query($link, $SQL);

while ($row = mysqli_fetch_assoc($result)) {
    $url = $row["URL"];
    $type = $row["type"];
}



echo "<form action='updatecheck.php' method='post' enctype='multipart/form-data'>";
echo "照片編號:" . $No . "<br>";
echo "<input type='hidden' name='No' value='" . $No . "'>";
// echo "<input type='text' name='URL' value='" . $url . "'><br>";
echo "照片路徑:<img src='" . $url . "' width='200'><br>";
echo "<input type='file' name='URL' ><br>";
echo "宿舍類型:<select name='type'>
　<option value='1'>學一宿舍</option>
　<option value='2'>學二宿舍</option>
　<option value='3'>綜合宿舍</option>　
</select>";



echo "<input type='submit'>";
echo "</form>";
?>