$(document).ready(function() {

    $('input[name=interests]').remove();
    $('h2').remove();
    $('select[name*="interests"]').remove();
    $('input[name=skills]').remove();
    $('select[name*="skills"]').remove();
    $('input[name=phone]').remove();
    $('select[name*="phone"]').remove();
    $('input[name=mobile]').remove();
    $('select[name*="mobile"]').remove();
    $('input[name=twitter]').remove();
    $('select[name*="twitter"]').remove();
    $('input[name=contactemail]').remove();
    $('select[name*="contactemail"]').remove();
   	$('.elgg-menu-page').remove();
	$('label').remove();
	$('.elgg-owner-block').remove();
	$('input[name=briefdescription]').attr('placeholder','Headline');
	$('input[name=name]').attr('placeholder','Display name');
	$('textarea[name=description]').attr('placeholder','Tell the world about yourself...');
	$('input[name=location]').attr('placeholder', 'Location');
	//$('input[name=location]').attr('value', geoplugin_city()+", "+geoplugin_region());
	$('input[name=website]').attr('placeholder','Website');
	$("textarea[class=elgg-input-longtext]").blur(function(){
		$('#counter').css({'visibility': 'hidden'}
		)});
	$('input[name=location]').each(function(){
        if ($.trim($(this).val()).length == 0){
            $(this).attr('value', geoplugin_city()+", "+geoplugin_region());
            isFormValid = false;
        }
        
    });
	
	$('#counter').css({'visibility': 'hidden'});
	
    var characters = 300;
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