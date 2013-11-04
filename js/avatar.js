$(document).ready(function() {

	$('.elgg-menu-page').remove();
	$('.elgg-owner-block').remove();
	$('input[value*="Crop"]').addClass('avatar-submit');
	$('input[value*="Upload"]').addClass('avatar-upload');
	$('a[title*="Remove"]').addClass('avatar-remove');
	$('input[size=30]').attr('size','62');
	$('textarea#thewire-textarea').attr('placeholder','What\'s on your mind?');
	$('h2').remove();
	
});