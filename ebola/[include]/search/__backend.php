<?php
if (isset($_POST['k']))
{
    $dbhost = '127.0.0.1';
    $dbuser = 'hentai';
    $dbpass = 'IAMVERYHENTAI!!!';
    $dbname = 'hentai';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    mysql_query("SET NAMES utf8");
    mysql_select_db($dbname);

	$hentaistr= $_POST['k'];
	/* wangch method */
	for($i=0; $i <strlen($hentaistr); ++$i )
	{
	if( ($hentaistr[$i] <'Z' || $hentaistr[$i] >'A') && ($hentaistr[$i] <'a' || $hentaistr[$i] >'z') && ($hentaistr[$i] < '0' || $hentaistr[$i] > '9') &&$hentaistr[$i]!='@'&&$hentaistr[$i]!='_' && $hentaistr[$i]!='.') die('badass');
	}

	$sql = "SELECT * FROM `namae` WHERE `email` LIKE '". $hentaistr . " or `sn` LIKE'". $hentaistr . "' LIMIT 0, 30 ";


	$result = mysql_query($sql) or die('MySQL query error');

	$row = mysql_fetch_array($result);

	if (empty($row))
	{
	echo 'not found';
	}
else
{
	/*<tr><td>Status</td><td>EXAMPLE</td></tr>*/
	echo '<tr><td>You @',$row[5],' Said:</td><td>',$row[3],'</td></tr>';
	if ( isset($row[4]) )
	echo '<tr><td>GM @',$row[6],' Said:</td><td>',$row[4],'</td></tr>';
	else
	echo '<tr><td colspan="2">No news|-)</td></tr>';
	}
}


?>