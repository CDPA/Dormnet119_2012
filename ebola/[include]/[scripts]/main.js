
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
	resize_bodyCanvas();
});

//}


//{ ----- Functions -----

// \brief	Init function
function ini() {
	resize_headerEles();
	resize_bodyCanvas();
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

// \brief	Resize header ele position
//			and hide logo when width is too small for logo to show 2gether with other eles in header
function resize_headerEles() {
	var screenw = $(window).width();
	var wrapperw = $(".header_wrap").width(); // Wrapper width
	var defmr = 10; // Default wrapper margin-right
	var subw = screenw - wrapperw;
	var minw = get_px( $(".header_canvas").css("min-width") );
	
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
	}
}

// \brief	Resize body canvas width
function resize_bodyCanvas() {
	var arrw = [5,
	            $(".wrapper").outerWidth(true) - $(".wrapper").width(),
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
		$(".bodyCanvas").width(screenw);
	} 
	else {
		// Choose ele widh
		$("body").width(totalw);
		$(".bodyCanvas").width(totalw);
	}
}


//}

