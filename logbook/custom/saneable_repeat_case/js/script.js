
var alertX = null;
var confirmX = null;
var windowX = null;
(function($) {
  Drupal.behaviors.saneable_repeat_case = {
    attach : function(context, settings) {


      // CSS Selector for the button which will trigger the AJAX call
// To repeat the previouse case
      $('#repeat_case, .repeat-case-icon', context).once('repeat-case').click(function(event) {
        event.preventDefault();
        if($('input[name="form_id"]').attr('disabled')) {
          return false;
        }
     // console.log($('input[name="form_id"]').attr('disabled'));
        $.ajax({
          url : Drupal.settings.basePath + 'repeat/case',
          type : "GET",
          success : function(data) {
            if (data.length != 0)
            {
              var json_obj = $.parseJSON(data);//parse JSON
              $('#edit-field-location-und-0-value').val(json_obj.location);

              if (json_obj.location != '' && json_obj.location != null) {
                $('#edit-field-location-und-0-value').effect("highlight", {color : '#BECEF7'}, 3000);

              }


              $('#edit-field-supervision-und option[value="' + json_obj.supervision + '"]').attr('selected', true);
              if (json_obj.supervision != null) {
                $('#edit-field-supervision-und').effect("highlight", {color : '#BECEF7'}, 3000);
              }

              if (json_obj.asa != null) {
                $('#edit-field-asa-und').effect("highlight", {color : '#BECEF7'}, 3000);
              }
              $('#edit-field-asa-und option[value="' + json_obj.asa + '"]').attr('selected', true)

              if (json_obj.priority != null) {
                $('#edit-field-priority-und').effect("highlight", {color : '#BECEF7'}, 3000);
              }
              $('#edit-field-priority-und option[value="' + json_obj.priority + '"]').attr('selected', true);

              if (json_obj.procedure != null) {
                $('#edit-field-procedure-und-0-tid').effect("highlight", {color : '#BECEF7'}, 3000);
              }
              $('#edit-field-procedure-und-0-tid option[value="' + json_obj.procedure + '"]').attr('selected', true)

              if (json_obj.anaes != null) {
                $('#edit-field-anaesthetic-und-0-tid').effect("highlight", {color : '#BECEF7'}, 3000);
              }
              $('#edit-field-anaesthetic-und-0-tid option[value="' + json_obj.anaes + '"]').attr('selected', true);

              if (json_obj.specialty != null) {
                $('#edit-field-speciality-und-0-parent').effect("highlight", {color : '#BECEF7'}, 3000);
                //$('#edit-field-speciality-und-0-childs-th-child-1').effect("highlight", {color : '#BECEF7'}, 3000);
              }
              $('#edit-field-speciality-und-0-parent option[value="' + json_obj.specialty + '"]').attr('selected', true);
              ////append the child of specialty
              $("#edit-field-speciality-und-0-childs-th-child-1 option[value='']").remove();
              if (json_obj.specialtyChild != null) {
                //$('#edit-field-speciality-und-0-parent').effect("highlight", {color : '#BECEF7'}, 3000);
                $('#edit-field-speciality-und-0-childs-th-child-1').effect("highlight", {color : '#BECEF7'}, 3000);
              }
              var selectID = "#edit-field-speciality-und-0-childs-th-child-1";
              $.each(json_obj.specialtyChild, function(i, item) {
                $(selectID).append('<option value="' + i + '">' + item + '</option>');
              });
            }
          }
        });

      });

      //Delete the current node on id 
      confirmX = $.dialog.confirm;

      $('.node-type-case .form-actions  #edit-submit').once('case-edit-prompt').click(function(event) {
        event.preventDefault();
        
        var html = '<div class="save_case_text">' + Drupal.t('Do you really want to save changes?') +'</div><div class="save_case_text"></div>';
        confirmX("", html, function() {
          $.dialog._hide("popup_container_confirm", "overflow_confirm");
          $('#case-node-form').submit();
        });
        return false;
      });
      
      $('.page-cases .cases-right-inner-1 > a.delete-icon, .page-reports #report_delete, .page-node-edit .top-left .block-views-icons-block-3, #top_part .hide-for-large-only.block-multiblock-3').once('click-delete-item').bind('click', function(event) {
        event.preventDefault();
        var this_obj = this;
        var id = $(this).attr('id');

        var type = '';
        data_attr = $(this).attr('data-nid');
        if (id == 'report_delete')
        {
          case_ref_html = '<div class="delete_case_text">Delete Report</div><div class="delete_case_text"></div>'
          data_attr = $(this).attr('data-nid');
          type = 'report';
        }
        else
        {

         // case_number = $(this).parent().parent().siblings().find('.cases-reference-wrapper span').text();
          case_number = $(this).parent().parent().siblings().find('.casses-listing-reference').text();

//console.log(  $(this).html());
         // console.log('Case number is = ' +   case_number);
          
          if (typeof data_attr == 'undefined')
          {

            data_url = window.location.pathname.split('/');
            data_attr = data_url[2];

          }
          type = 'case';

          if (case_number == '')
          {
            case_number = $('input[name="hidden_title"]').val();


          }

          case_ref_html = '<div class="delete_case_text">Delete Case:</div><div class="delete_case_text">' + case_number + '</div>'

        }
        confirmX("", case_ref_html, function() {
          $.ajax({
            url : Drupal.settings.basePath + 'delete/' + type + '/' + data_attr,
            type : "GET",
            success : function(data) {
              $.dialog._hide("popup_container_confirm", "overflow_confirm")
              case_url = window.location.href.slice(window.location.href.indexOf('?') + 1);
              if (case_url == 'destination=cases')
              {
                baseUrl = window.location.protocol;
                window.location.href = baseUrl + '/cases';
              }
              if (typeof data.delete != 'undefined')
              {
                // alert('You have no permission to delete this report.')
                $(this_obj).parents('.views-row').hide();
              }
              else
              {
                $(this_obj).parents('.views-row').hide();
              }
            }
          });
        });
               $('#popup_container_confirm').addClass('delete-case-popup-box');

      });
    }

  };

}(jQuery));
