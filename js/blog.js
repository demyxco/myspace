
$(document).ready(function() {
	
	$('.left-sidebar').append($('.elgg-menu-title'));
	$('.left-sidebar').append($('.elgg-menu-filter'));
	$('.left-sidebar').append($('.elgg-module'));
	$('.elgg-menu-extras').remove();
	$('label[for=blog_excerpt]').remove();
	$('input[name=excerpt]').remove();
	//$('.elgg-main > .elgg-head').remove();
	$('.blog-comments h3').remove();
	$('.blog-comments .elgg-body:nth-child(odd)').append($('.blog-comments .elgg-image:nth-child(odd)'));
	$('.elgg-owner-block').remove();
	$('.left-sidebar').append($('.guest'));
	$('.guest').insertBefore($('.ad'));

});