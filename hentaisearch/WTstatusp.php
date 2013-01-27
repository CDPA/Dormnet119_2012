<?php
if (isset($_POST['sn']))
{
    $dbhost = '127.0.0.1';
    $dbuser = 'dude';
    $dbpass = 'HOWDOYOUTURNTHISON';
    $dbname = 'dude';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    mysql_query("SET NAMES 'utf8';");
    mysql_select_db($dbname);
	
	$hentaistr= $_POST['sn'];
	/* wangch method */
	for($i=0; $i <strlen($hentaistr); ++$i )
	{
	if( ($hentaistr[$i] <'Z' || $hentaistr[$i] >'A') && ($hentaistr[$i] <'a' || $hentaistr[$i] >'z') && ($hentaistr[$i] < '0' || $hentaistr[$i] > '9') ) die('Wakawaka uccu');
	}
	
    $sql = 'SELECT * FROM  `repair` WHERE `Serial Number` LIKE \''.$hentaistr.'\'  LIMIT 0 , 30;';
	
	$result = mysql_query($sql) or die('MySQL query error');
	
	$row = mysql_fetch_array($result);
	
	if (empty($row))
	{
	echo 'NONO!';
	}
else
{	
	echo '<a1>id</a1><a2>Serial Number</a2><a3>From</a3><a4>Content</a4><a5>MSG</a5><a6>Report Date</a6><a7>End Date</a7><br/>';	
	do
	{
	
	for( $i=0; $i< 7; ++$i ) {

	echo '<a'.$i.'>'.$row[$i] . '</a'.$i.'>';
	}
	
	echo '<br/>';
	}while($row = mysql_fetch_array($result));
		
	}
}	
	
	
?>