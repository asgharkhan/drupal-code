(function($) {
  Drupal.behaviors.user_edit = {
    attach : function(context, settings) {
      $('.page-user-edit .block-views-icons-block-2 .view-icons .views-field-label .field-content').css('color', '#A6A7A2');
      $('.page-user-edit .block-views-icons-block-2 .view-icons .views-field-field-image .field-content a img').attr('src', '/sites/all/themes/logbook/images/save_icon_grey.svg');
      $('#user-profile-form input').focus(function() {
        $('.page-user-edit .block-views-icons-block-2 .view-icons .views-field-label .field-content').css('color', '##0066FF');
        $('.page-user-edit .block-views-icons-block-2 .view-icons .views-field-field-image .field-content a img').css('content','url("../../../sites/default/files/save_icon.svg")');
        $('.page-user-edit .block-views-icons-block-2 .view-icons .views-field-field-image .field-content a img').attr('src', '/sites/default/files/save_icon.svg');
//        var empty = false;
//        $('#user-profile-form > input').each(function() {
//          if ($(this).val() == '') {
//            empty = true;
//          }
//        });
//
//        if (empty) {
//          $('#register').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
//        } else {
//          $('#register').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
//        }
      });
    }

  };

}(jQuery));
