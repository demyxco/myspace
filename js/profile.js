
$(document).ready(function() {

    $('a[href*="avatar/edit"]').addClass('profile-owner-avatar');
    $('a[href$="/edit"]').addClass('profile-owner-edit');
    $('a[href*="reportedcontent"]').addClass('profile-report');
    $('a[href*="add?friend"]').addClass('profile-follow');
    $('a[href*="remove?friend"]').addClass('profile-unfollow');
    $('a[href*="send_to"]').addClass('profile-sendmessage');
    $('.profile-action-menu').append($('.elgg-menu-owner-block-default'));
    $('#profile-details').append($('#profile-owner-block'));
    $('.profile-action-menu').append($('ul[class=profile-admin-menu-wrapper]'));
    $('div[class=elgg-widget-add-control]').remove();
    $('div[id=widgets-add-panel]').remove();
    $('div[id=elgg-widget-col-1]').remove();
    $('div[id=elgg-widget-col-2]').remove();
    $('div[id=elgg-widget-col-3]').remove();
    $('div[id=elgg-widget-loader]').remove();
    $('.elgg-river-comments').remove();
    $('.elgg-river-comments-tab').remove();
    $('input[value=Post]').css('display', 'none');
    //$('input[value=Post]').fadeTo('',0);
    $('textarea[name=message_content]').click(function(){$('input[value=Post]').css('display', 'inline');});
    $('textarea[name=message_content]').blur(function(){$('input[value=Post]').delay(100).hide('fast');});
	$.expr[':'].external = function(obj){
    return !obj.href.match(/^mailto\:/)
            && (obj.hostname != location.hostname);
};

$('a:external').attr('target', '_blank');
    //$('.elgg-list-annotation > li').append($('.elgg-list-river'));
    //$('.elgg-list-river').append($('.elgg-list-annotation > li'));

    //$('.elgg-annotation-list .elgg-item').merge($('.elgg-river'));
    //$('div[class*="wire-status"]').remove();
    //$('#profile-details').append($('.elgg-page-default'));
   //var $aboutme = $('.profile-aboutme');
   //if ($aboutme.text().length >= 200) { $aboutme.css({fontSize:15}); }
   
   function sortEm(a,b){ return parseInt($('acronym', a).text()) > parseInt($('acronym', b).text()) ? 1 : -1;}
   $('.elgg-list-river > li').sort(sortEm).prependTo($('.elgg-list-river'));
   


});