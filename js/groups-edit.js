$(document).ready(function() {

	$('.elgg-module').remove();
	$('.elgg-menu-page').remove();
	$('.left-sidebar').append($('.elgg-module'));
	
	$('form div:nth-child(10)').remove();
	$('form div:nth-child(10)').remove();
	$('form div:nth-child(6)').insertAfter('form div:nth-child(4)');
	$('form div:nth-child(9)').remove();
	$('form div:nth-child(9)').remove();
	$("textarea[class=elgg-input-longtext]").blur(function(){
		$('#counter').css({'visibility': 'hidden'}
		)});
	
    var characters = 300;
    $('.elgg-main').append('<div id="counter"></div>');
    $('.elgg-main').append($("#counter").append(characters));
  
    $("textarea[class=elgg-input-longtext]").keyup(function(){
    	$('#counter').css({'visibility': 'visible'});
        if($(this).val().length > characters){
        $(this).val($(this).val().substr(0, characters));
        }
    var remaining = characters -  $(this).val().length;
    
    $("#counter").html(remaining);
    if(remaining <= 10)
    {
        $("#counter").css("color","red");
    }
    else
    {
        $("#counter").css("color","#aaa");
    }
    });
	
});