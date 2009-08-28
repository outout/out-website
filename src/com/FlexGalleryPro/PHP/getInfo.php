<?php
include('config.php');

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES utf8");
$Query="SELECT * FROM flexgallerypro";
$Result = mysql_query( $Query );
$Return = "<?xml version=".'"1.0"'." encoding=".'"UTF-8"?>'."\n"."<images>";
while ( $image = mysql_fetch_object( $Result ) )
{
     $Return .="<image><ID>".$image->ID."</ID><name>".$image->name."</name><description>".$image->description."</description><image_url>".$image->image_url."</image_url></image>"; 
}
$Return .= "</images>";
mysql_free_result( $Result );
echo ($Return);
mysql_close($conn);
?>