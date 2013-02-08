<!DOCTYPE HTML><html><head><title>Hey Dude!</title>
<style type="text/css">

.MSGothic{font-family: "MS Gothic";}

</style>
<script type="text/javascript">



document.onkeyup = KeyCheck;

function KeyCheck(e)
{

   var KeyID = (window.event) ? event.keyCode : e.keyCode;


   switch( (window.event) ? event.keyCode : e.keyCode)

   {

      case 16:

      document.Form1.KeyName.value += "Shift";

      break;

      case 17:

      document.Form1.KeyName.value += "Ctrl";

      break;

      case 18:

      document.Form1.KeyName.value += "Alt";

      break;

      case 19:

      document.Form1.KeyName.value = "Pause";

      break;

      case 37:

      document.Form1.KeyName.value += "L";

      break;

      case 38:

      document.Form1.KeyName.value += "U";

      break;

      case 39:

      document.Form1.KeyName.value += "R";

      break;

      case 40:

      document.Form1.KeyName.value += "D";

      break;
   }


}
</script>

</head><body>
<form name="Form1">

<input type="text" name="KeyName" value="" />

</form>

<d class="MSGothic">
<?php
    $dbhost = '127.0.0.1';
    $dbuser = 'dude';
    $dbpass = 'HOWDOYOUTURNTHISON';
    $dbname = 'dude';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    mysql_query("SET NAMES 'utf8_bin'");
    mysql_select_db($dbname);
    $sql = "SELECT * FROM  `jail` WHERE 1 LIMIT 0 , 30;";
    $result = mysql_query($sql) or die('MySQL query error');
    while($row = mysql_fetch_array($result)){

        echo $row['IP'].'<>'.$row['IP'].' '.$row['Reason'].'<br/>';
    }
?>
</d>
</body>
</html>