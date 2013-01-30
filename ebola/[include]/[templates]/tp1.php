<!DOCTYPE html>

<!-- [Info.]
This template is for REPAIR, SEARCH, SUPPORT

-->

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
<link href="/dormnet119_2012/ebola/[include]/[css]/tp1.css" rel="stylesheet" type="text/css" />
<!--  <link href="/dormnet119_2012/ebola/[include]/[css]/DEBUG_layout.css" rel="stylesheet" type="text/css" />
-->
</head>
<body>

<!-- @start .header_canvas -->
<div id="header_canvas">
	<div id="header_wrap">
		<div id="header_logo">
			<a href="/dormnet119_2012/ebola/index.php" title="Home">
				<img alt="Home" src="/dormnet119_2012/ebola/[include]/[images]/main/logo.png">
			</a>
		</div>

		<div id="header_nav">
			<ul>
				<li>
					<div class="OP_header_nav_home">
					<a href="/dormnet119_2012/ebola/index.php" title="Home" class="OP_header_nav_home">
					<img id="img_home" src="/dormnet119_2012/ebola/[include]/[images]/main/home.png">
					</a></div></li>
				<li>
					<div>
					<a href="/dormnet119_2012/ebola/repair/guide.php">Repair
					</a></div></li>
				<li>
					<div>
					<a href="/dormnet119_2012/ebola/search/guide.php">Search
					</a></div></li>
				<li>
					<div>
					<a href="/dormnet119_2012/ebola/support/guide.php">Support
					</a></div></li>
			</ul>
		</div>
	</div>
</div>
<!-- @end .header_canvas -->

<!-- @start .bodyCanvas -->
<div id="bodyCanvas">
	<!-- @start .wrapper -->
	<div id="wrapper">
		<!-- @start .container -->
		<div id="container">
			<div id="breadcrumb">
				<ul>
				</ul>
			</div>
		
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
	
	<!-- @start .footer -->
	<div id="footer_wrap">
		<div id="footer">
			<p>
				<a href="#">Home</a> • <a href="#">Products</a> • <a href="#">Services</a> • <a href="#">About Us</a> • <a href="#">Contact Us</a> • <a href="#">Site Map</a> • <a href="#">Privacy</a><br />
				<br />
				® 2013 NSYSU-CDPA. All Rights Reserved.
			</p>
		</div>
	</div>
	<!-- @end .footer --> 
</div>
<!-- @end .bodyCanvas -->

</body>

<!-- Include JavaScripts -->
<script type="text/javascript" src="/dormnet119_2012/ebola/[include]/[scripts]/main/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/dormnet119_2012/ebola/[include]/[scripts]/main/main.js"></script>
</html>
