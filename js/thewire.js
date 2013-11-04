$(document).ready(function() {
	
	$('.elgg-owner-block').remove();
	$('textarea').attr('placeholder','What\'s on your mind?').focus();
	$('textarea').load().autosize();
	$('.elgg-menu-filter').insertBefore($('.ad'));
	$('.guest').insertBefore($('.ad'));

});