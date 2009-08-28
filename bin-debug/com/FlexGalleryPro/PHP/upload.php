<?php

//path to storage
$storage = '../images';

//path name of file for storage
$uploadfile = "$storage/" . basename( $_FILES['Filedata']['name'] );

//if the file is moved successfully
if ( move_uploaded_file( $_FILES['Filedata']['tmp_name'] , $uploadfile ) ) {
	echo( '1 ' . $_FILES['Filedata']['name']);

//file failed to move
}else{
	echo( '0');
}

?>
