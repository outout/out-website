<?php
include('config.php');
// CONNECT
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

// get login values from Flex
$user=$_POST["user"];
$pass=$_POST["pass"];

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES utf8");

// check admin user and password
$Query="SELECT user_password FROM flexgallerypro_admin";
$Result = mysql_query( $Query );

while ( $txt = mysql_fetch_object( $Result ) )
{
     $checkP=$Return.=$txt->user_password;
}

$Query2="SELECT user_id FROM flexgallerypro_admin";
$Result2 = mysql_query( $Query2 );

while ( $txt = mysql_fetch_object( $Result2 ) )
{
     $checkU=$Return2.=$txt->user_id;
}
// echo to Flex
if($pass==$checkP and $user==$checkU)
{
	echo "ok";
}
else
{
	echo "no";
}
// DISCONNECT
mysql_close($conn);
?>