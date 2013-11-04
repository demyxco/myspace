$(function() {

   $('html, body, .elgg-page-default, .elgg-page-body, .elgg-inner, .elgg-layout').mousewheel(function(event, delta) {

      this.scrollLeft -= (delta * 60);
    
      event.preventDefault();

   });
});