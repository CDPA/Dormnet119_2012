
<?php	// [Info.] The following code will be included in main page : div class "content"
?>
<?php // [Info.] Function prototypes

	//--------------------------------------------------
	// \brief	Get slash type (Slash or backslash)
	// \return		Either slash or backslash
	//__________________________________________________
	if ( !function_exists('get_typSlash'))
	{
		function get_typSlash()
		{
			$pos = strpos(realpath('.'), '/');

			if (false === $pos)
			{
				return '\\';
			}
			else
			{
				return '/';
			}
		}
	}

	//--------------------------------------------------
	// \brief	Get root path
	// \param	$nameRoot		|	Name of root directory
	// \return		Root path
	//__________________________________________________
	if( !function_exists('get_rootPath'))
	{
		function get_rootPath($nameRoot)
		{
			$typSlash = get_typSlash();
			$str = realpath('.');
			$arr = explode("$typSlash", $str);
			$ct = count($arr);
			$i = array_search("$nameRoot", $arr);

			if (false !== $i)
			{
				$arr = array_slice($arr, 0, $i);
				$str = implode("$typSlash", $arr);
			}
			else // No corresponding root name found
			{
				return 'ERROR! Request wrong root name or directory does NOT exist (Path)';
			}

			return "$str" . "$typSlash" . $nameRoot;
		}
	}

	//--------------------------------------------------
	// \brief	Get root URL
	// \param	$nameRoot		|	Name of root URL
	// \return		Root URL
	//__________________________________________________
	if( !function_exists('get_rootURL'))
	{
		function get_rootURL($nameRoot)
		{
			$str = $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
			$arr = explode('/', $str);
			$ct = count($arr);
			$i = array_search("$nameRoot", $arr);

			if (false !== $i)
			{
				$arr = array_slice($arr, 0, $i);
				$str = implode('/', $arr);
			}
			else // No corresponding root name found
			{
				return 'ERROR! Request wrong root name or directory does NOT exist (URL)';
			}

			return "$str" . '/' . $nameRoot;
		}
	}

?>
<?php // [Info.] Prepare variables used in (X)HTML

	// Get type of slash
	$typSlash = get_typSlash();
	// Protocol name, usually "http://"
	$protocol = (80 == $_SERVER["SERVER_PORT"] ? 'http://' : 'https://');
	// Name of the root (Directory)
	$nameRoot = 'ebola';
	// Script (ex. "search?q=123") WITHOUT trailing slash
	$script = $_SERVER['SCRIPT_NAME'];

	// Root path (Directory)
	$root = get_rootPath("$nameRoot");
	// Host (ex. "www.google.com") WITHOUT trailing slash
	$host = "$protocol" . get_rootURL("$nameRoot");
?>
		<form action="teach.php" >
			<input type="submit" value="BACK">
		</form>
		        <div>
			<hr/>
			<a href="#XP">Windows XP</a><br/>
			<a href="#WIN7">Windows 7</a><br/>
			<a href="#WIN8">Windows 8</a><br/>
			<a href="#MAC">MAC OS</a><br/>
			<a href="#Ubuntu">Linux Ubuntu</a>
			<ul>
				<!--Windows XP-->
				<li>
					<a name="XP">Windows XP </a> 
				</li>
				<ol>
					<!--add Win XP-->
				</ol>
				<hr/>
				<!--Windows 7-->
				<li> 
					<a name = "WIN7">Windows 7 </a>
				</li>
				<ol>
					<!--add Win 7-->
				</ol>
				<hr/>
				<!--Windows 8-->
				<li> 
					<a name = "WIN8">Windows 8 </a>
				</li>
				<ol>
					<li>右鍵點選該圖示 選擇 "開啟網路和共用中心"</li>
						<br/>
						<img alt="teach_win8_ip1" title="teach_win8_ip1" src="<?php echo "$host"; ?>/[include]/[images]/ip/ip_win8_1.jpg">
						<img alt="teach_win8_ip2" title="teach_win8_ip2" src="<?php echo "$host"; ?>/[include]/[images]/ip/ip_win8_2.jpg">
						<br/>
					<li>選擇 "變更介面卡設定" </li>
						<br/>
						<img alt="teach_win8_ip3" title="teach_win8_ip3" src="<?php echo "$host"; ?>/[include]/[images]/ip/ip_win8_3.jpg">
						<br/>
					<li>在 "乙太網路" 或 "區域網路" 點選右鍵的 "內容"</li>
						<br/>
						<img alt="teach_win8_ip4" title="teach_win8_ip4" src="<?php echo "$host"; ?>/[include]/[images]/ip/ip_win8_4.jpg">
						<br/>
					<li>選擇 "網際網路通訊協定第4版(TCP/IPv4)" 再選擇內容就可以進入IP的設定頁面</li>
						<br/>
						<img alt="teach_win8_ip5" title="teach_win8_ip5" src="<?php echo "$host"; ?>/[include]/[images]/ip/ip_win8_5.jpg">
						<br/>
						<img alt="teach_win8_ip6" title="teach_win8_ip6" src="<?php echo "$host"; ?>/[include]/[images]/ip/ip_win8_6.jpg">
				</ol>
				<hr/>
				<!--MAC OS-->
				<li> 
					<a name = "MAC">MAC OS</a>
				</li>
				<ol>
					<li>點選 "System Preferences"</li>
						<br/>
						<img alt="teach_mac_ip1" title="teach_mac_ip1" src ="<?php echo "$host"; ?>/[include]/[images]/ip/ip_mac_1.png">
						<br/>
					<li>點選 "Internet & Wireless" 的 "Network"</li>
						<br/>
						<img alt="teach_mac_ip2" title="teach_mac_ip2" src ="<?php echo "$host"; ?>/[include]/[images]/ip/ip_mac_2.png">
						<br/>
					<li>將 "Configure IPv4" 調為 "Manually"(手動) 就可以設定 IP 等資訊</li>
						<br/>
						<img alt="teach_mac_ip3" title="teach_mac_ip3" src ="<?php echo "$host"; ?>/[include]/[images]/ip/ip_mac_3.png">
						<br/>
				</ol>
				<hr/>
				<!--Ubuntu-->
				<li>
					<a name = "Ubuntu">Linux Ubuntu</a>
				</li>
				<ol>
					<!--add ubuntu-->
				<ol>
			</ul>
		</div>
