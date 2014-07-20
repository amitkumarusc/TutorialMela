$(function(){

	//highlight the tab for current page
	$("#home a:contains('Home')").parent().addClass('active');
	$("#tutorials a:contains('Tutorials')").parent().addClass('active');
	$("#practice a:contains('Practice')").parent().addClass('active');
	$("#study_material a:contains('Study Material')").parent().addClass('active');
	$("#compete a:contains('Compete')").parent().addClass('active');
	$("#about a:contains('About Us')").parent().addClass('active');
	$("#login a:contains('Login')").parent().addClass('active');


	//make menu drop automatically
	$('ul.nav li.dropdown').hover(function(){
		$('.dropdown-menu',this).fadeIn('fast');
	},function(){
		$('.dropdown-menu',this).fadeOut('fast');
	});
	});

});