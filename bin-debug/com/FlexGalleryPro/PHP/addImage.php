<?php
include("config.php");

$name=$_POST["name"];
$des=$_POST["des"];
$img=$_POST["img"];

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to mysql");
mysql_select_db($dbname);

$sql = "INSERT INTO `".$dbname."`.`flexgallerypro` (`ID`, `name`, `description`, `image_url`) VALUES (NULL, \"".$name."\", \"".$des."\", \"".$img."\");";

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES utf8");
if(mysql_query($sql))
{
	echo('ok');
}

mysql_close($conn);
?>