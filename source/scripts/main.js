import 'select2';
import 'magnific-popup';

import './libs/hamburger_menu.js';
import './libs/form_functions.js';
import './libs/additional_functions.js';
import './libs/plugin_parameters.js';
//import './libs/tree_menu.js';

import $ from 'jquery';
window.jQuery = $;
window.$ = $;

$(document).ready(function(){
	// Hamburger menu
	$("div.resp_menu_toggle").click(function(){
		var $this = $(this);
		$this.toggleClass("toggled");
		$("html, body, div.resp_menu_wrap").toggleClass("toggled");
	});
	setTimeout(function(){
		$("div.resp_menu_wrap").addClass("blurred");
	}, 1000);
	// Scroll down
	$("div.scroll_down a").click(function(){
		var simagle = $("section.hero").height();
		$('html, body').animate({
			scrollTop: simagle + 'px'
		}, 800);
	});
	// Wrap words
	$("section.hero div.container div.message p").each(function() {
		var text = $(this).html().split(' ');
		for(var i = 0, len = text.length; i < len; i++){
			if(text[i].includes('<strong>') && !text[i].includes('</strong>')){
				text[i] = '<span class="outline">' + text[i];
			}else if(!text[i].includes('<strong>') && text[i].includes('</strong>')){
				text[i] = text[i] + '</span>';
			}else{
				text[i] = '<span class="outline">' + text[i] + '</span>';
			}
		}
		$(this).html(text.join(' '));
	});
	$("section.hero figure.bak").addClass("loaded");
	setTimeout(function(){
		$("section.hero div.container div.message").addClass("loaded");
	}, 500);
	setTimeout(function(){
		$("section.hero div.container div.message strong").addClass("loaded");
	}, 600);
	// // Each span finished
	// $("span.outline strong").addClass("baldi");
	// $("span.outline span.outline").contents().unwrap();
	// var index = 0;
	// setTimeout(function(){
	// 	$("p > span.outline").each(function(i){
	// 		var $this = $(this);
	// 		if($this.children().length > 0 ){
	// 		}else{
	// 			setTimeout(function(){
	// 				$this.addClass("loaded");
	// 			}, 300*index);
	// 			index++;
	// 		}
	// 	});
	// 	var total = index + 1;
	// 	setTimeout(function(){
	// 		$("section.hero figure.bak").addClass("loaded");
	// 	}, total*300);
	// }, 300);
});