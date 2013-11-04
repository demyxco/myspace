$(document).ready(function() {

	$('.left-sidebar').append($('.elgg-module'));
	$('.elgg-menu-owner-block-default').remove();
	$('.elgg-owner-block').insertBefore($('.ad'));
	
});