// JavaScript Document
/*
$().ready ( function() {

	ocument.getElementById("container").style.display='none';
	ocument.getElementById("wrapper").style.display='none';
});
*/
var op=3;
$(window).bind("resize", function()
{
    document.getElementById("lol").style.width=$(window).width()*0.4 +'px';
});
var bb=0;

function blinblin(){
if (bb)
{
$("input[type='submit']").css({"background":"rgba(255,255,0,0.8)","border":"5px solid rgba(0,0,0,0.6)"});
bb=0;
}
else
{
$("input[type='submit']").css({"background":"rgba(255,255,255,1)","border":"5px solid rgba(255,0,0,0.8)"});
bb=1;
}
}

$(document).ready(function()
{
//alert($.fn.jquery);
   $.noConflict(); //bye183
  // alert($.fn.jquery); //190
/*0= wrapper -632;*/

$('#hand').css('-webkit-transition','left 0.5s linear');

$('#hand').css('left', 632- parseInt($('#wrapper').css('width')) +parseInt($('#container').css('width') ) + parseInt(window.getComputedStyle(document.getElementById('container'),null).getPropertyValue('margin-left')) +'px');

setTimeout("$('#wrapper').fadeOut(100)",500);//fast
setTimeout("$('#hand').css('left','632px')",1000);
setTimeout("$('#lol').css('opacity','1')",800);

setInterval("blinblin()",250);
  
    	$("#ff").validate({
    			rules: {
    				sn: "required",
    			},
    			messages: {
    				//sn: "not valid sn.",
    			},
    			submitHandler: function(form) {
    				$.post('../[include]/search/WTstatusp.php', $("#ff").serialize(), function(d) {
    				if (d == "Not found")
    				{
    				$('#msg').html("Not found!!");
    				}
    				else if ( d == "Keep trying")
    				{
    				$('#msg').html("Keep trying");
    				op--;
    				}
					else
					{
						$("#se").fadeOut('slow');
					$("#msg").html("");
					$("#result").html(d);
					}
					

    				});
    			}
    		});
			   varjq190=$.noConflict(); //190
			   //now: 163
   //alert($.fn.jquery);
    		//$("#ninja_walk").sprite({fps: 8, no_of_frames: 8});
			$("#firen_run").sprite({fps: 12, no_of_frames: 6});
    
    $("#ww").hover(function()
    {
        if(op<=0)
        {


        }
    });

});





