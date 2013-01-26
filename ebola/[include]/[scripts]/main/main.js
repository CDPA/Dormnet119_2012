
//========== jQuery ==========

//{----- Global variables -----
//}


//{----- Events -----

// \event	When document is ready
$(document).ready ( function init() {
	ini();
});

// \event	When browser windows is resized
$(window).bind("resize", function(){
	resize_headerEles();
	resize_elesWidth();
});

// \event When scrolled
$(window).bind("scroll", function(){
	var pos = $(document).scrollTop();

	check_hideNavSel(pos);
});

//}


//{ ----- Functions -----

// \brief	Init function
function ini() {
	ini_navSel();
	ini_breadcrumb();
	resize_headerEles();
	resize_elesWidth();
}

// \brief	Get pixel or percent number
// \param	s	|	string containing "px" at the end
// \return	Pure number, no suffix "px"
function get_px(s) {
	var indpx = s.indexOf("px");

	if (-1 != indpx) {
		return s.substring(0, s.length - 2);
	}
	else {
		return s;
	}
}

// \brief	Ini nav_sel image by adding class
function ini_navSel() {
	var path = $(location).attr('pathname').toLowerCase();
	var arr = path.split('/');
	var cate = arr[3]; // Current category
	var ind;

	switch (cate) {
		case "repair": {
			ind = 1;
		} break;
		case "search": {
			ind = 2;
		} break;
		case "support": {
			ind = 3;
		} break;
	}

	// Add class
	$($("#header_nav ul li")[ind]).children("div").addClass("OP_header_nav_sel");
}

// \brief	Ini breadcrumb items
function ini_breadcrumb() {
	// Check existence of breadcrumb
	if ( !$("#breadcrumb").length) { return;}

	// TERMS: such "1 repair" is custom id
	//        "repair/index.php" is subHref
	//        "Repair" is title

	// Info
	var root = "/dormnet119_2012/ebola/";
	var path = $(location).attr("pathname").toLowerCase();
	var arr = path.split('/');
	var startInd = 3; // starting index in 'arr'
	// Elements (dictionaries)
	var name2href = {}; // literally (ex. "1 repair"->"repair/index.php")
	var name2title = {}; // literally (ex. "1 repair"->"Repair")
	var links = {}; // table of element code snippet (ex. "")
	var choice = {}; // selected elements (ex. 1->"home", 2->"repair" then would show Home >> Repair)
	// temp.
	var indChoice = 0; // for temp use


	// Ini. home code snippet
	links["0 home"] = ini_breadcrumb_getLink(root, "index.php", "Home", "head");

	// Ini. name2href dictionary (format: <level> <custom id>)
	name2href["1 repair"] = "repair/guide.php";
	name2href["1 search"] = "search/guide.php";
	name2href["1 support"] = "support/guide.php";

	// Ini. name2title dictionary
	name2title["1 repair"] = "Repair";
	name2title["1 search"] = "Search";
	name2title["1 support"] = "Support";


	// Select elements
	choice[indChoice++] = "0 home"; // Of course home element is always 1st one

	for (var i = 0; i < arr.length - startInd; ++i) {
		var name = arr[i + startInd];

		switch (i) {
			case 0: {
				// at guide level
				switch (name) {
					case "repair": {
						choice[indChoice++] = "1 repair";
					} break;
					case "search": {
						choice[indChoice++] = "1 search";
					} break;
					case "support": {
						choice[indChoice++] = "1 support";
					} break;
				}
			} break;
			//////////////////////////////
			case 1: {

			} break;
			//////////////////////////////
		}

		// generate link
		links[ choice[indChoice - 1] ] = ini_breadcrumb_genLink(root, name2href, name2title,
																i, arr.length - startInd - 1, choice[indChoice - 1]);
	}

	// Append codes
	for (var i = 0; i < indChoice; ++i) {
		var name = choice[i];
		$("#breadcrumb ul").append(links[name]);
	}
}

// Sub-function of "ini_breadcrumb", return link for sub-func. "genLink"
function ini_breadcrumb_getLink(root, subHref, title, typ) {
	switch (typ) {
		case "head": {
			return "<li><a href='" + root + subHref + "'>" + title + "</a></li>";
		} break;
		case "mid": {
			return "<li>&nbsp;>>&nbsp;&nbsp; <a href='" + root + subHref + "'>" + title + "</a></li>";
		} break;
		case "tail": {
			return "<li>&nbsp;>>&nbsp;&nbsp; <span>" + title + "</span></li>";
		} break;
	}
}

// Sub-function of "ini_breadcrumb", return link snippet by several settings
function ini_breadcrumb_genLink(root, name2href, name2title,
								ind, ub, name) {
	var typ = (ind == ub) ? "tail" : "mid";
	return ini_breadcrumb_getLink(root, name2href[name], name2title[name], typ);
}


// \brief	Resize header ele position
//			and hide logo when width is too small for logo to show 2gether with other eles in header
function resize_headerEles() {
	var screenw = $(window).width();
	var wrapperw = $("#header_wrap").width(); // Wrapper width
	var defmr = 10; // Default wrapper margin-right
	var subw = screenw - wrapperw;
	var minw = get_px( $("#header_canvas").css("min-width") );

	if (subw < 0) {
		if (-subw + defmr <= minw) {
			$("#header_nav").css("margin-right", -subw + defmr + "px");
			$("#header_nav").css("float", "right");
			$("#header_logo").show();
		}
		else {
			$("#header_nav").css("float", "left");
			$("#header_logo").hide();
		}
	}
	else {
		$("#header_nav").css("margin-right", defmr + "px");
		$("#header_nav").css("float", "right");
		$("#header_logo").show();
	}
}

// \brief	Resize width of several elements 
//			1. body  2. body canvas  3. footer wrap
function resize_elesWidth() {
	var arrw = [5,
	            $("#wrapper").outerWidth(true) - $("#wrapper").width(),
	            $("#content_leftNav").outerWidth(true),
			    $("#content_main").outerWidth(true)];
	var totalw = 0;
	var screenw = $(window).width();

	// Count ele width
	for (var i = 0; i < arrw.length; ++i) {
		totalw += arrw[i];
	}

	if (screenw > totalw) {
		// Choose screen width
		$("body").width(screenw);
		$("#bodyCanvas").width(screenw);
		$("#footer_wrap").width(screenw);
	}
	else {
		// Choose ele widh
		$("body").width(totalw);
		$("#bodyCanvas").width(totalw);
		$("#footer_wrap").width(totalw);
	}
}

// \brief	Check if to hide nav_sel
function check_hideNavSel(scrollpos) {
	var h = get_px( $("#breadcrumb").css("margin-top") );

	if (scrollpos > h) {
		$(".OP_header_nav_sel").removeClass("OP_header_nav_sel").addClass("OP_header_nav_sel_dis");
	}
	else {
		$(".OP_header_nav_sel_dis").removeClass("OP_header_nav_sel_dis").addClass("OP_header_nav_sel");
	}
}

//}

