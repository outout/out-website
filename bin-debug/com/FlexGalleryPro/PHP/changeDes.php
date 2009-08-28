<?php
include("config.php");

$id=$_POST["ID"];
$name=$_POST["name"];
$des=$_POST["des"];

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to mysql");
mysql_select_db($dbname);

$sql = "UPDATE `".$dbname."`.`flexgallerypro` SET `name` = \"".$name."\", `description` = \"".$des."\" WHERE `flexgallerypro`.`ID` = ".$id." LIMIT 1;";

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES utf8");
if(mysql_query($sql))
{
	echo('ok');
}

mysql_close($conn);
?>