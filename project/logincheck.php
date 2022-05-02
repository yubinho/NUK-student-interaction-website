<?php
ini_set('display_errors','off'); 
session_start();
if($_SESSION['logstat']=='ok'){
    header("Location:index.php");
}
?>
<?php
session_start();
$account=$_POST["account"];
$passwd=$_POST["passwd"];
include("conn.php");
$SQL = "SELECT * FROM usr u WHERE u.account='$account'";
$result = mysqli_query($link, $SQL);


if(!$result)
	{
		// echo ("Error: ".mysqli_error($link));
		echo "錯誤";
	}
while($row = mysqli_fetch_assoc($result)){
    if($row["passwd"]=$passwd){
       $_SESSION["logstat"]='ok';
        $_SESSION["usrid"]=$row["usrid"];
    if($row["types"]=='admin'){
        $_SESSION['isadmin']='yes';
    }  
        header("Location:index.php");
    }
    else{
        $_SESSION["logstat"]='fail';
        header("Location:index.php");
    }


}

?>