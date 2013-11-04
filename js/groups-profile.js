$(document).ready(function() {

	$('.left-sidebar').append($('.groups-profile .elgg-image'));
	$('.left-sidebar').append($('.elgg-module'));
	$('.elgg-module:nth-child(5)').insertBefore($('.elgg-module:nth-child(2)'));
	$('.elgg-menu-title').insertAfter($('.elgg-module:nth-child(2)'));
	//$('.elgg-module:nth-child(4)').remove();
	$('.left-sidebar .elgg-owner-block .elgg-head').remove();
	$('.left-sidebar .elgg-module-aside .elgg-head').remove();
	$('.groups-profile').remove();
	$('.elgg-menu-page').insertBefore($('.elgg-menu-title'));
	$('.left-sidebar .elgg-gallery').remove();
	$('.left-sidebar .mts').remove();
	$('.groups-activity').append($('.elgg-module:nth-child(6)'));
	$('.elgg-menu-owner-block-default').remove();
	$('.groups-activity').append($('.elgg-module-info'));
	$('.left-sidebar').append($('.groups-activity .elgg-menu-groups-my-status-default'));
	$('.left-sidebar .elgg-menu-groups-my-status-default').insertAfter($('.left-sidebar .elgg-menu-title'));
	$('.groups-activity').append($('.left-sidebar .elgg-form-groups-search'));
	$('.groups-activity .elgg-form-groups-search').insertBefore($('.groups-activity .elgg-owner-block'));
	$('.left-sidebar').append($('.guest'));
	
	
});