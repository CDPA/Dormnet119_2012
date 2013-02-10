/*
	*Filename: hiroshi0916.js
	*b003040020@nsysu @2013
*/
	var jQ190=$.noConflict();
	var jQ183;
	var $=jQ190;
	var present='#p1';

/**
 * fastLiveFilter jQuery plugin 1.0.3
 * 
 * Copyright (c) 2011, Anthony Bush
 * License: <http://www.opensource.org/licenses/bsd-license.php>
 * Project Website: http://anthonybush.com/projects/jquery_fast_live_filter/
 **/

jQuery.fn.fastLiveFilter = function(list, options) {
	// Options: input, list, timeout, callback
	options = options || {};
	list = jQuery(list);
	var input = this;
	var timeout = options.timeout || 0;
	var callback = options.callback || function() {};
	
	var keyTimeout;
	
	// NOTE: because we cache lis & len here, users would need to re-init the plugin
	// if they modify the list in the DOM later.  This doesn't give us that much speed
	// boost, so perhaps it's not worth putting it here.
	var lis = list.children();
	var len = lis.length;
	var oldDisplay = len > 0 ? lis[0].style.display : "block";
	callback(len); // do a one-time callback on initialization to make sure everything's in sync
	
	input.change(function() {
		// var startTime = new Date().getTime();
		var filter = input.val().toLowerCase();
		var li;
		var numShown = 0;
		for (var i = 0; i < len; i++) {
			li = lis[i];
			if ((li.textContent || li.innerText || "").toLowerCase().indexOf(filter) >= 0) {
				if (li.style.display == "none") {
					li.style.display = oldDisplay;
				}
				numShown++;
			} else {
				if (li.style.display != "none") {
					li.style.display = "none";
				}
			}
		}
		callback(numShown);
		// var endTime = new Date().getTime();
		// console.log('Search for ' + filter + ' took: ' + (endTime - startTime) + ' (' + numShown + ' results)');
		return false;
	}).keydown(function() {
		// TODO: one point of improvement could be in here: currently the change event is
		// invoked even if a change does not occur (e.g. by pressing a modifier key or
		// something)
		clearTimeout(keyTimeout);
		keyTimeout = setTimeout(function() { input.change(); }, timeout);
	});
	return this; // maintain jQuery chainability
}

var el;

	

jQ190(document).ready(function(){ //when evil 183 is loaded

	jQ183=$.noConflict(); //bye183
	
	jQ190("#p2f1").validate({    			
				rules: {
					k: "required",
    			},
    			messages: {
					k: "",
    			},
    			submitHandler: function(form){
    				jQ190.post('../[include]/search/__backend.php', jQ190("#p2f1").serialize(), function(d) {
						//jQ190("#result").html(d);
						if( d == 'not found')
						{
							if(Math.random()<0.7)
							jQ190('#content_main').effect('shake');	
							else
							jQ190('a img').effect('shake');
						}
						else if( d == 'badass')
						{
							jQ190('#p2 .__title').html('NO SQL INJECTION');
							if(Math.random()<0.4)
								jQ190('a img').effect('shake');
							else
								jQ190('body').fadeOut('fast');
						}
						else
						{
							jQ190('#__p3t1').html(d);
							jQ190('#p2').fadeOut(100);
							present='#p3';
							setTimeout(jQ190('#p3').fadeIn(100),100);
													jQ190('#content_main').css('height',jQ190('#p3').css('height'));
						}
					})
				}
	});
	$=jQ190;
	
	
	/*p1*/

	jQ190('#p1btn1').click(function(){
		jQ190('#p1').fadeOut(100);
		setTimeout("jQ190('#p2').fadeIn(100)",100);
		jQ190('#content_main').css('height',jQ190('#p2').css('height'));
		present='#p2';
	});
	jQ190('#p1btn2').click(function(){
		
		jQ190('#p1').fadeOut(100);
		setTimeout("jQ190('#p4').fadeIn(200)",200);
		jQ190('#content_main').css('height',jQ190('#p4').css('height'));
		present='#p4';
	});
	jQ190('#p1btn3').click(function(){

		jQ190('#p1').fadeOut(100);
		setTimeout("jQ190('#p5').fadeIn(100)",100);
		jQ190('#content_main').css('height',jQ190('#p5').css('height'));
		present='#p5';
	});
	
	/*hentai*/
	var els = document.getElementsByTagName("a");
for (var i = 0, l = els.length; i < l; i++) {
     el = els[i];
    if (el.href.indexOf('/dormnet119_2012/ebola/search/guide.php')!=-1) {
        el.innerHTML = "Search!";
        el.href = "#";
		jQ190(el).parent().click(function(){
		jQ190(present).fadeOut(100);
		jQ190('#content_main').css('height',jQ190('#p1').css('height'));
		setTimeout("jQ190('#p1').fadeIn(100)",100);
		present='#p1';
		
		})
		break;
		}
    }

	/*p2*/
	
	/*p4*/
	jQ190('#__ip4i1').fastLiveFilter("#__hentai__list",{callback:function(){jQ190('#content_main').css('height',jQ190(present).css('height'));}});
    /* p5 */
	jQ190('#__p5t1').tablesorter(); 
	
});


$=jQ183;//here comes the evil 183 ^Q^