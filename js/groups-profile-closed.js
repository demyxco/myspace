$(document).ready(function() {

	$('.left-sidebar').append($('.groups-profile .elgg-image'));
	$('.left-sidebar').append($('.elgg-module'));
	$('.elgg-module:nth-child(5)').insertBefore($('.elgg-module:nth-child(2)'));
	$('.elgg-menu-title').insertAfter($('.elgg-module:nth-child(2)'));
	$('.elgg-module:nth-child(4)').remove();
	$('.elgg-main .elgg-breadcrumbs').remove();
	$('.elgg-head').remove();
	$('.groups-profile').remove();
	$('.elgg-menu-page').insertBefore($('.elgg-menu-title'));
	$('.left-sidebar .elgg-gallery').remove();
	$('.left-sidebar .mts').remove();
	$('.groups-activity').append($('.elgg-module-info'));
	$('.groups-widget-viewall').remove();
	$('li h3').remove();
	$('.groups-activity').append($('.mtm'));
	$('.left-sidebar').append($('.guest'));
	
});