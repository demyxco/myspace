
$(document).ready(function() {
	
	$('.left-sidebar').append($('.elgg-menu-title'));
	$('.left-sidebar').append($('.elgg-module'));
	$('.elgg-menu-owner-block-default').remove();
	$('.elgg-menu-title').insertBefore($('.ad'));
	$('.elgg-module').insertBefore($('.ad'));
	$('.guest').insertBefore($('.ad'));
	
});