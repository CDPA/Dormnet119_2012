<?php
if (isset($_POST['sn']))
{
    $dbhost = '127.0.0.1';
    $dbuser = 'dude';
    $dbpass = 'HOWDOYOUTURNTHISON';
    $dbname = 'dude';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    mysql_query("SET NAMES 'utf8_bin';");
    mysql_select_db($dbname);

	$hentaistr= $_POST['sn'];
	/* wangch method */
	for($i=0; $i <strlen($hentaistr); ++$i )
	{
	if( ($hentaistr[$i] <'Z' || $hentaistr[$i] >'A') && ($hentaistr[$i] <'a' || $hentaistr[$i] >'z') && ($hentaistr[$i] < '0' || $hentaistr[$i] > '9') ) die('Keep trying');
	}

    $sql = 'SELECT * FROM  `repair` WHERE `Serial Number` LIKE \''.$hentaistr.'\'  LIMIT 0 , 30;';

	$result = mysql_query($sql) or die('MySQL query error');

	$row = mysql_fetch_array($result);

	if (empty($row))
	{
	echo 'Not found';
	}
else
{
/* "<span id=\"s1c\" class=\"scontent\"><div class=\"imapct\"></div>,'" */

/*<div class="imapct" style="background:rgba(0,0,0,0.6);color:white; text-align:center;display:block">::Blacklist:: (Only last 10 will be displayed)::</div>
				<colgroup><col/><col/><col/></colgroup><tr><td>IP</td><td>Reason</td><td>Start at</td></tr> */
	echo '<span id="s1c" class="scontent"><div class="impact"><tr><td>You @',$row[5],' Said:<br/>',$row[3],'<br/>';
	if ( isset($row[4]) )
	echo '----------</br>GM @',$row[6],' Said:<br/>',$row[4],'</div></span>';
	else
	echo 'No news|-)</div></span>';
	}
}


?>