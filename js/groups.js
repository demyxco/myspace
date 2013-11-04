$(document).ready(function() {

	$('.left-sidebar').append($('.elgg-menu-title'));
	$('.left-sidebar').append($('.elgg-menu-filter'));
	$('.left-sidebar').append($('.elgg-menu-page'));
	$('.elgg-menu-extras').remove();
	$('.left-sidebar').append($('.elgg-module'));
	$('.left-sidebar').append($('.guest'));
	
});