jQuery(document).ready(function($){
  $(".tweet-it").hover(
      function(){
            if ($(this).data('vis') !== true) {
                    $(this).data('vis', true);
                    $(this).find('.sharebuttons').fadeIn(200);
            }
      });
});