<!DOCTYPE html>

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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dorm-net 119</title>

<!-- Include CSS -->
<link href="<?php echo "$host"; ?>/[include]/[css]/tp1.css" rel="stylesheet" type="text/css" />
<!--  <link href="<?php echo "$host"; ?>/[include]/[css]/DEBUG_layout.css" rel="stylesheet" type="text/css" />
-->

<!-- Include JavaScripts -->
<script type="text/javascript" src="<?php echo "$host"; ?>/[include]/[scripts]/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo "$host"; ?>/[include]/[scripts]/main.js"></script>
</head>

<body>

<!-- @start .banner -->
<div class="header_canvas">
	<div class="header_wrap">
		<div id="header_logo">
			<a href="<?php echo "$host"; ?>/" title="Home">
				<img alt="Home" src="<?php echo "$host"; ?>/[include]/[images]/main/logo.png">
			</a>
		</div>

		<div id="header_nav">
			<ul>
				<li><div><div><a href="<?php echo "$host"; ?>/repair/guide.php">Repair</a></div></div></li>
				<li><div><div><a href="#">Search</a></div></div></li>
			</ul>
		</div>
	</div>
</div>
<!-- @end .banner -->

<!-- @start .bodyCanvas -->
<div class="bodyCanvas">
	<!-- @start .wrapper -->
	<div class="wrapper">
		<!-- @start .container -->
		<div class="container">
			<!-- @start .container contents -->
			<div class="content" id="content_main">
				<?php // [Info.] Require contents in other files

					/*	Insert "[include]" into current script path
						ex. '/dormnet/rescue/1.php' ->
							'/dormnet/[include]/rescue/1.php'

						So you must put files which have exactly same name as front pages
					*/
					$arr = explode('/', "$script");
					$ct = count($arr);
					$i = array_search("$nameRoot", $arr);

					$arr = array_slice($arr, $i, $ct - $i);

					$i = array_search("$nameRoot", $arr);
					array_splice($arr, $i + 1, 0, array('[include]')); // Insert "[include]"
					$str = implode('/', $arr);

					require_once dirname("$root") . '/' . $str;
				?>
			</div>
			<!-- @end .container contents -->

		</div>
		<!-- @end .container -->

	</div>
	<!-- @end .wrapper -->

	<div class="img_hr" align="middle">
		<img src="<?php echo "$host"; ?>/[include]/[images]/main/hr_gray.png">
	</div>

	<!-- @start .footer_wrap -->
	<div class="footer_wrap">
		<div class="footer">
			<a href="#">Home</a> | <a href="#">Products</a> | <a href="#">Services</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Site Map</a> | <a href="#">Privacy</a><br />
			<br />
			Copyright 2012 NSYSU-CDPA. All Rights Reserved. <img src="" width="1" />
		</div>
	</div>
	<!-- @end .footer_wrap -->
</div>
<!-- @end .bodyCanvas -->

</body>
</html>
