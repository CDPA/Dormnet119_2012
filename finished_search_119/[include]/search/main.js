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
jQ190("input[type='submit']").css({"background":"rgba(0,0,0,0.4)","border":"5px solid rgba(255,255,0,1)"});
bb=0;
}
else
{
jQ190("input[type='submit']").css({"background":"rgba(255,0,0,1)","border":"5px solid rgba(0,0,0,0.4)"});
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

setTimeout("jQ190('#wrapper').fadeOut(100)",500);
setTimeout("jQ190('#hand').css('left','632px')",1000);
setTimeout("jQ190('#hand').hide()",1500);
setTimeout("jQ190('#lol').fadeIn(500)",600);

setInterval("blinblin()",250);
  
    	jQ190("#s1ff").validate({
    			rules: {
    				sn: "required",
    			},
    			messages: {
    				sn: "not valid",
    			},
    			submitHandler: function(form) {
    				jQ190.post('../[include]/search/WTstatusp.php', $("#s1ff").serialize(), function(d) {
    				if (d == "Not found")
    				{
					jQ190('#s1ff').effect('shake',500);
    				}
    				else if ( d == "Keep trying")
    				{
    				jQ190('#s1btn').val("Keep trying..."+op);
					op--; /* surprise */
    				}
					else
					{
					jQ163("#s1").flippy({
					color_target:'aliceblue',
					content:d,
					direction:"TOP",
					duration:"750",
					});
					/*jQ190("#s1").fadeOut('slow');*/
			
					/*jQ190("#msg").html("");
					jQ190("#result").html(d);*/
					}
					

    				});
    			}
    		});
			   //190
			   //now: 163
   //alert($.fn.jquery);
    		//$("#ninja_walk").sprite({fps: 8, no_of_frames: 8});
			/*jQ163("#firen_run").sprite({fps: 12, no_of_frames: 6});*/
    
    jQ163("#s1btn").hover(function()
    {
        if(op<=0)
        {
		jQ190('#s1').hide();
		jQ190('#s2').css({"background-color":"black","color":"rgba(255,255,255,0.8)"});
		jQ190('#ip').css({"background-color":"black","font-size":"500%"});
		jQ190('#ipt').html("What did I say? WRONG!")
        }
    });

	$=jQ183;//here comes the evil 183 ^Q^
});





