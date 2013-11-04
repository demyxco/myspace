
$(document).ready(function() {

	$('.left-sidebar').append($('.elgg-module'));
	$('.elgg-body .elgg-head').remove();
	$('.left-sidebar').append($('.elgg-tabs'));
	$('.elgg-tabs').insertBefore('.elgg-module:nth-child(2)');
	$('.left-sidebar').append($('.guest'));

});