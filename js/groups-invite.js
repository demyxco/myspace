$(document).ready(function() {

	//$('.left-sidebar').append($('.elgg-module'));
	$('.elgg-menu-owner-block-default').remove();
	$('.elgg-main .elgg-breadcrumbs').remove();
	$('.elgg-main .elgg-head').remove();
	$('.elgg-module').insertBefore($('.ad'));
	
});