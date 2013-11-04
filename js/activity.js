$(document).ready(function() {

	$.expr[':'].external = function(obj){
    return !obj.href.match(/^mailto\:/)
            && (obj.hostname != location.hostname);
	};

	$('a:external').attr('target', '_blank');
	$('textarea#thewire-textarea').attr('placeholder','What\'s on your mind?');

});