<?php	// [Info.] The following will be included in main page : div class "content"
?>

<center>
	<span><font size = "10" style= "border-style:double " face="標楷體" color="black"> Dormnet 119</font></span></br/>
	<input name="submit"   type=submit  style="border: 0px solid #BB9EF8;color :white;	 height:45px; width: 160px; background:red; font-size: 26px; color:white; " value= "Repair"  onclick="window.open('/Dormnet119_2012/ebola/repair/guide.php');"/>
	<input name="submit"   type=submit  style="border: 0px solid #BB9EF8;color :white;	 height:45px; width: 160px; background:red; font-size: 26px; color:white; " value= "Search"  onclick="window.open('/Dormnet119_2012/ebola/search/guide.php');"/>
	<input name="submit"   type=submit  style="border: 0px solid #BB9EF8;color :white;	 height:45px; width: 160px; background:red; font-size: 26px; color:white; " value= "Support"  onclick="window.open('/Dormnet119_2012/ebola/support/guide.php');"/>
	<br/>
	<span><font style= "border-style:double ">
	<?php
$iipp = $_SERVER["REMOTE_ADDR"];
echo $iipp ;
?>
	</font></span><br/>
</center>
