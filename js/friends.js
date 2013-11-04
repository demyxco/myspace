
$(document).ready(function() {

	$('.friends-menu').append($('.elgg-menu-page'));
	$('.elgg-heading-main').remove();
	$('.elgg-main > .elgg-head').remove();
	$('.elgg-menu-item-friends-view-collections').remove();
	$('.elgg-menu-item-invite').remove();
	$('.left-sidebar').append($('.guest'));
	$('.ad').remove();

});