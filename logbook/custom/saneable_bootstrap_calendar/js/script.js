(function ($) {
    Drupal.behaviors.saneable_bootstrap_calendar = {
        attach: function (context) {

            /*       $('#edit-field-dob-und-0-value-datepicker-popup-1').datepicker({format:"dd/mm/yyyy",todayHighlight:true, weekStart:1, 
             }).on('changeDate', function(ev){
             $('#edit-field-dob-und-0-value-datepicker-popup-1').datepicker('hide'); 
             });*/
            //$('#edit-field-dob-und-0-value-datepicker-popup-1').datepicker({format: "dd/mm/yyyy", todayHighlight: true, weekStart: 1, });


            /*        $('#edit-field-date-und-0-value-datepicker-popup-1').datepicker({format:"dd/mm/yyyy",todayHighlight:true,weekStart:1}).on('changeDate', function(ev){
             $('#edit-field-date-und-0-value-datepicker-popup-1').datepicker('hide'); 
             });    */
            $('#edit-field-date-und-0-value-datepicker-popup-1').datepicker({format: "dd/mm/yyyy", todayHighlight: true, weekStart: 1});

            var today = new Date();            
            var f_day = today.getDate();
            var f_month = today.getMonth(); //January is 0!
            var f_year = today.getFullYear();
            var frm_date='';
            if($(".calendar_icon").length != 0) {
             frm_date = $('.calendar_icon').parents('.group-left').find('.field-type-datetime .form-text').val();
             $('.calendar_icon').parents('.group-left').find('.field-type-datetime .form-text').on('blur',function(){
              frm_date = $('.calendar_icon').parents('.group-left').find('.field-type-datetime .form-text').val();  
              if (frm_date != '') {
                $('.calendar_icon').datepicker( "setDate", frm_date );
            }
             });
              }            
            if (frm_date != '') {               
                var arr = frm_date.split('/');
                f_day = +arr[0];
                f_month = +arr[1];
                f_month = f_month - 1;
                f_year = arr[2];                
            }
            $('.calendar_icon').datepicker({defaultViewDate: {year: f_year, month: f_month, day: f_day}, format: "dd/mm/yyyy", weekStart: 1, orientation: "top left",beforeShowDay: function (date){
                  if (date.getMonth() == f_month && date.getFullYear() == f_year && frm_date != '' && date.getDate() == f_day){                    
                        return "active";                  
                    }}}).on('changeDate', function (ev) {                
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);                
                var d = newDate.toISOString().slice(0, 10).replace(/-/g, "/");

                var arr = d.split('/');
                var dd = arr[2] + "/" + arr[1] + "/" + arr[0];

                $(this).parents('.group-left').find('.field-type-datetime .form-text').val(dd);

                // console.log(JSON.stringify(newDate.toISOString().slice(0,10).replace(/-/g,"-")));
                //$('#edit-field-reports-date-und-0-field-from-date-und-0-value-date').val($('.calendar_icon').data('date'));
                $('.calendar_icon').datepicker('hide');
            });
            var t_day = today.getDate();
            var t_month = today.getMonth(); //January is 0!
            var t_year = today.getFullYear();
            var to_date='';
            if($(".calendar_icons").length != 0) {
             to_date = $('.calendar_icons').parents('.group-right').find('.field-type-datetime .form-text').val();
             $('.calendar_icons').parents('.group-right').find('.field-type-datetime .form-text').on('blur',function(){
              to_date = $('.calendar_icons').parents('.group-right').find('.field-type-datetime .form-text').val();
              if (to_date != '') {
                $('.calendar_icons').datepicker( "setDate", to_date );
            }
             });      
        
        }            
            if (to_date != '') {                
                var arr = to_date.split('/');
                t_day = +arr[0];
                t_month = +arr[1];
                t_month = t_month - 1;
                t_year = arr[2];                
            }
            $('.calendar_icons').datepicker({defaultViewDate: {year: t_year, month: t_month, day: t_day}, format: "dd/mm/yyyy", weekStart: 1,beforeShowDay: function (date){
                  if (date.getMonth() == t_month && date.getFullYear() == t_year && to_date != '' && date.getDate() == t_day){                    
                        return "active";                  
                    }}}).on('changeDate', function (ev) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                var d = newDate.toISOString().slice(0, 10).replace(/-/g, "/");
                var arr = d.split('/');
                var dd = arr[2] + "/" + arr[1] + "/" + arr[0];
                $(this).parents('.group-right').find('.field-type-datetime .form-text').val(dd);
                $('.calendar_icons').datepicker('hide');
            });
        }
    }
}(jQuery));

function getFormattedDate(date) {
    
    var year = date.getFullYear();
    var month = (1 + date.getMonth()).toString();
    month = month.length > 1 ? month : '0' + month;
    var day = date.getDate().toString();
    day = day.length > 1 ? day : '0' + day;
    return day + '/' + month + '/' + year;
}









