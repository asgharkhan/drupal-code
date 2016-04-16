(function($) {
    Drupal.behaviors.saneable_custom = {
        attach: function(context, settings) {
  $('#edit-field-start-und-0-value,#edit-field-end-und-0-value',context).timeEntry({show24Hours: true});
       // $('#edit-field-sex-und').chosen({width: "100%"});
        }

    };

}(jQuery));
