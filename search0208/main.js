// JavaScript Document
/*
$().ready ( function() {

	ocument.getElementById("container").style.display='none';
	ocument.getElementById("wrapper").style.display='none';
});
*/

   var jQ190=$.noConflict(); 
   var jQ163=$.noConflict(); 
	var jQ183;
	var $;
  
   
var op=3;
jQ190(window).bind("resize", function()
{
    document.getElementById("lol").style.width=$(window).width()*0.4 +'px';
});
var bb=0;

function blinblin(){
if (bb)
{
jQ190("input[type='submit']").css({"background":"rgba(255,255,0,0.8)","border":"5px solid rgba(0,0,0,0.6)"});
bb=0;
}
else
{
jQ190("input[type='submit']").css({"background":"rgba(255,255,255,1)","border":"5px solid rgba(255,0,0,0.8)"});
bb=1;
}
}

jQ190(document).ready(function() //when evil 183 is loaded
{
//alert($.fn.jquery);
 jQ183=$.noConflict(); //bye183
  /* var jQ190=$.noConflict(); 
   var jQ163=$.noConflict(); 
  // alert($.fn.jquery); //190
/*0= wrapper -632;*/

jQ190('#hand').css('-webkit-transition','left 0.5s linear');

jQ190('#hand').css('left', 632- parseInt(jQ190('#wrapper').css('width')) +parseInt(jQ190('#container').css('width') ) + parseInt(window.getComputedStyle(document.getElementById('container'),null).getPropertyValue('margin-left')) +'px');

setTimeout("jQ190('#wrapper').fadeOut(100)",500);//fast
setTimeout("jQ190('#hand').css('left','632px')",1000);
setTimeout("jQ190('#lol').css('opacity','1')",800);

setInterval("blinblin()",250);
  
    	jQ190("#ff").validate({
    			rules: {
    				sn: "required",
    			},
    			messages: {
    				sn: "not valid sn.",
    			},
    			submitHandler: function(form) {
    				jQ190.post('../[include]/search/WTstatusp.php', $("#ff").serialize(), function(d) {
    				if (d == "Not found")
    				{
					jQ190('#ff').effect('shake',500);
					
    				/*jQ190('#msg').html("Not found!!");*/
					
    				}
    				else if ( d == "Keep trying")
    				{
    				jQ190('#ww').val("Keep trying");
					
    				op--;
    				}
					else
					{
					jQ163("#flc").flippy({
					color_target:'aliceblue',
					content:d,
					direction:"TOP",
					duration:"750",
					});
					jQ190("#se").fadeOut('slow');
					jQ190("#msg").html("");
					jQ190("#result").html(d);
					}
					

    				});
    			}
    		});
			   //190
			   //now: 163
   //alert($.fn.jquery);
    		//$("#ninja_walk").sprite({fps: 8, no_of_frames: 8});
			jQ163("#firen_run").sprite({fps: 12, no_of_frames: 6});
    
    jQ163("#ww").hover(function()
    {
        if(op<=0)
        {
		jQ190('#flc').fadeOut();
		jQ190('.vp').css({"background-color":"black","color":"rgba(255,255,255,0.8)"});
        }
    });

	$=jQ183;//here comes the evil 183 ^Q^
});





