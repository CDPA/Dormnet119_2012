
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
			<table>
					<td><a href="#XP">Windows XP</a></td>
					<td><a href="#WIN7">Windows 7</a></td>
					<td><a href="#WIN8">Windows 8</a></td>
					<td><a href="#MAC">MAC OS</a></td>
					<td><a href="#Ubuntu">Linux Ubuntu</a></td>
			</table>
			<hr/>
			<ul>
				<!--Windows XP-->
				<li>
					<a name="XP">Windows XP </a> 
				</li>
				<ol>
					<li>開始->執行</li>
						<br/>
						<img alt="teach_xp_mac1" title="teach_xp_mac1" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_XP_1.JPG">
						<br/>
					<li>在執行的欄位輸入 "cmd" </li>
						<br/>
						<img alt="teach_xp_mac2" title="teach_xp_mac2" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_XP_2.JPG">
						<br/>
					<li>在黑色的框框中輸入 "ipconfig /all" <br/>"Physical Address" 即為你的網路卡卡號(MAC Address)</li>
						<br/>
						<img alt="teach_xp_mac3" title="teach_xp_mac3" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_XP_3.JPG">
				</ol>
				<hr/>
				<!--Windows 7-->
				<li> 
					<a name = "WIN7">Windows 7 </a>
				</li>
				<ol>
					<li>開始</li>
						<br/>
						<img alt="teach_win7_mac1" title="teach_win7_mac1" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_win7_1.jpg">
						<br/>
					<li>點選"命令提示字元" </li>
						<br/>
						<img alt="teach_win7_mac2" title="teach_win7_mac2" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_win7_2.jpg">
						<br/>
					<li>在黑色的框框中輸入 "ipconfig /all" </li>
						<br/>
						<img alt="teach_win7_mac3" title="teach_win7_mac3" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_win7_3.jpg">
						<br/>
					<li>實體位置即為你的網路卡卡號(MAC Address)</li>
						<br/>
						<img alt="teach_win7_mac4" title="teach_win7_mac4" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_win7_4.jpg">
				</ol>
				<hr/>
				<!--Windows 8-->
				<li> 
					<a name = "WIN8">Windows 8 </a>
				</li>
				<ol>
					<li>按 開始鍵+R鍵 叫出 "執行"</li>
						<br/>
						<img alt="teach_win8_mac1" title="teach_win8_mac1" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_win8_1.jpg">
						<br/>
					<li>鍵入 "ipconfig /all"</li>
						<br/>
						<img alt="teach_win8_mac2" title="teach_win8_mac2" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_win8_2.jpg">
						<br/>
					<li>找到 "實體位置(Physical Address)" 即為網路卡卡號</li>
						<br/>
						<img alt="teach_win8_mac3" title="teach_win8_mac3" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_win8_3.jpg">
						<br/>
				</ol>
				<hr/>
				<!--MAC OS-->
				<li> 
					<a name = "MAC">MAC OS</a>
				</li>
				<ol>
					<li>點選 "System Preferences"</li>
						<br/>
						<img alt="teach_mac_mac1" title="teach_mac_mac1" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_mac_1.png">
						<br/>
					<li>點選 "Internet & Wireless" 的 "Network"</li>
						<br/>
						<img alt="teach_mac_mac2" title="teach_mac_mac2" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_mac_2.png">
						<br/>
					<li>選擇 "Advanced" </li>
						<br/>
						<img alt="teach_mac_mac3" title="teach_mac_mac3" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_mac_3.png">
						<br/>
					<li>選擇 "Hardware" 就可以找到 "MAC Address"</li>
						<br/>
						<img alt="teach_mac_mac4" title="teach_mac_mac4" src ="<?php echo "$host"; ?>/[include]/[images]/mac/mac_mac_4.png">
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
