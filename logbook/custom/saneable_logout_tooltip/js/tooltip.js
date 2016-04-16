(function ($) {
  Drupal.behaviors.saneable_logout_tooltip = {
   attach : function(context, settings) {
     $('.user-info .block-views-icons-block-4 .view-content a').click(function() {
       $('.user-info .block-views-icons-block-4 .view-content').append(settings.saneable_logout_tooltip.popup_box);
       
       return false;
     });
     console.log(settings.saneable_logout_tooltip.popup_box);
   }
  }
  $(document).click(function(e) {
    var target = e.target;

    if (!$(target).is('.arrow_box') && !$(target).parents().is('.arrow_box')) {
        $('.arrow_box').remove();
    }
});
}(jQuery));