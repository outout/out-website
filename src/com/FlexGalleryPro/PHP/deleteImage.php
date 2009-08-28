<?php
include("config.php");

$img=$_POST["img"];
$id=$_POST["ID"];

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to mysql");
mysql_select_db($dbname);

$sql="DELETE FROM `flexgallerypro` WHERE `flexgallerypro`.`ID` = ".$id." LIMIT 1;";
if(mysql_query($sql) and unlink($img))
{
	echo('ok');
}
mysql_close($conn);
?>