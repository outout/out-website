<?php
include('config.php');

/******** TABLES CREATION *******/
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

mysql_select_db($dbname);

$sql = 'CREATE TABLE `flexgallerypro_admin` ('
        . ' `ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, '
        . ' `user_id` TEXT NOT NULL, '
        . ' `user_password` TEXT NOT NULL'
        . ' )'
        . ' ENGINE = myisam;';
$sql2 = 'CREATE TABLE `flexgallerypro` (
        `ID` int(11) NOT NULL auto_increment,
		`name` text NOT NULL,
        `description` longtext NOT NULL,
		`image_url` text NOT NULL,
        PRIMARY KEY  (`ID`)
       )';
mysql_query( $sql, $conn );
mysql_query("INSERT INTO flexgallerypro_admin (user_id, user_password) VALUES ('$user', '$pass')");
mysql_query( $sql2, $conn );
$imageURL0='/images/img_0.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (1, 'name1', 'Lorem ipsum dolor sit amet, vestibulum imperdiet, lectus auctor rutrum est arcu in eu, fusce eu, fames blandit tempus, erat dolor. Torquent at tempor porta, laoreet mattis ut amet malesuada volutpat, eget nec mauris suspendisse purus, diam a adipiscing eget, ut pellentesque.', '{$imageURL0}')");
$imageURL1='/images/img_1.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (2, 'name2', 'Nulla rutrum pretium, maecenas pede ipsum mattis eleifend semper nunc. A suspendisse mus ultrices lorem, sociis viverra, blandit ac sagittis consectetuer tempus. Massa sed pede, ultricies elit urna litora a id, quisque in, tincidunt maecenas ultrices pede feugiat. Aliquam neque augue in.', '{$imageURL1}')");
$imageURL2='/images/img_2.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (3, 'name3', 'Tristique pulvinar pede ac quisque vel, eget eu ac orci elit vestibulum, urna ipsum quam quis sagittis, dapibus non. Felis amet lacus a augue.', '{$imageURL2}')");
$imageURL3='/images/img_3.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (4, 'name4', 'Taciti sagittis a. Aliquam ligula quas, amet tristique metus libero eros pharetra enim, nec a, in congue purus luctus amet facilisis nunc. Accumsan imperdiet orci vel morbi massa torquent.', '{$imageURL3}')");
$imageURL4='/images/img_4.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (5, 'name5', 'Neque tellus amet proin suscipit, id sed ipsum, nec consequat ipsum duis sit aut, ante fusce praesent ut vivamus metus, dolor vestibulum nulla phasellus quis sollicitudin.', '{$imageURL4}')");
$imageURL5='/images/img_5.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (6, 'name6', 'Wisi diam nunc ac. Tempore turpis lorem gravida mauris mollis, id placerat purus, suscipit turpis sodales arcu, nec pellentesque donec tempor sit orci ut, tempor habitasse.', '{$imageURL5}')");
$imageURL6='/images/img_6.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (7, 'name7', 'Ac tempor ipsum wisi leo nullam, metus rhoncus suscipit egestas, est turpis morbi interdum posuere pellentesque suspendisse, praesent vivamus sed.', '{$imageURL6}')");
$imageURL7='/images/img_7.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (8, 'name8', 'Lorem ipsum dolor sit amet, vestibulum imperdiet, lectus auctor rutrum est arcu in eu, fusce eu, fames blandit tempus, erat dolor. Torquent at tempor porta, laoreet mattis ut amet malesuada volutpat, eget nec mauris suspendisse purus, diam a adipiscing eget, ut pellentesque.', '{$imageURL7}')");
$imageURL8='/images/img_8.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (9, 'name9', 'Nulla rutrum pretium, maecenas pede ipsum mattis eleifend semper nunc. A suspendisse mus ultrices lorem, sociis viverra, blandit ac sagittis consectetuer tempus. Massa sed pede, ultricies elit urna litora a id, quisque in, tincidunt maecenas ultrices pede feugiat. Aliquam neque augue in.', '{$imageURL8}')");
$imageURL9='/images/img_9.jpg';
mysql_query("INSERT INTO flexgallerypro (`ID`, `name`, `description`, `image_url`) VALUES (10, 'name10', 'Tristique pulvinar pede ac quisque vel, eget eu ac orci elit vestibulum, urna ipsum quam quis sagittis, dapibus non. Felis amet lacus a augue.', '{$imageURL9}')");
mysql_close($conn);
// echo result
echo("<p>success!</p>"."<p><strong>IMPORTANT:</strong> remove install.php from your server</p>"."<p>view the "."<a href=".$galleryURL."/FlexGalleryPro.html>"."<strong>gallery</strong></a>"."<p>go to "."<a href=".$galleryURL."/FlexGalleryPro.html>"."<strong>Admin Panel</strong></a>");
?>