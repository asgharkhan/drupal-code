jQuery(document).ready(function () {

  /***********Add place holder to the login form *******************/

  jQuery('#user-login').find('input[name="name"]').attr("placeholder", "Email");
  jQuery('#user-login').find('input[name="pass"]').attr("placeholder", "Password");

  /***********Add place holder to the user registeration form *******************/

  jQuery('#user-register-form').find('input[name="field_name[und][0][value]"]').attr("placeholder", "Name");
  jQuery('#user-register-form').find('input[name="field_surname[und][0][value]"]').attr("placeholder", "Surname");
  jQuery('#user-register-form').find('input[name="mail"]').attr("placeholder", "Email");
  jQuery('#user-register-form').find('input[name="conf_mail"]').attr("placeholder", "Confirm Email");
  jQuery('#user-register-form').find('input[name="pass[pass1]"]').attr("placeholder", "********");
  jQuery('#user-register-form').find('input[name="pass[pass2]"]').attr("placeholder", "********");

  /***********Add place holder to the New case form *******************/

  jQuery('#case-node-form').find('input[name="title"]').attr("placeholder", "Case reference number");
  //jQuery('#case-node-form').find('input[name="field_dob[und][0][value][date]"]').attr("placeholder", "dd/mm/yyyy");
  jQuery('#case-node-form').find('input[name="field_date[und][0][value][date]"]').attr("placeholder", "dd/mm/yyyy");
  jQuery('#case-node-form').find('input[name="field_start[und][0][value]"]').attr("placeholder", "HH:MM");
  jQuery('#case-node-form').find('input[name="field_end[und][0][value]"]').attr("placeholder", "HH:MM");
  jQuery('#case-node-form').find('input[name="field_location[und][0][value]"]').attr("placeholder", "hospital location");
  jQuery('#case-node-form').find('input[name="body[und][0][value]"]').attr("placeholder", "notes");

  /***********Add place holder to Forgot password form *******************/
  jQuery('#user-pass').find('input[name="name"]').attr("placeholder", "email@domain.com");
  /*** For promo code ***/
  jQuery('#edit-promo-code').attr("placeholder", "XXXX XXXX XXXX XXXX");
  /***********Add place holder to Generate Report Form *******************/
  if (jQuery('#generate-reports-node-form'))
  {
    jQuery("#generate-reports-node-form input[type='text']").attr("placeholder", "dd/mm/yyyy");
  }
  /************** show calendar click on icon ****************/
//    jQuery('.ui-datepickerr').datepicker({
//      //options
//      minDate: '20.04.2012'
//      //...
//    });
  jQuery('.calendar_icon').click(function (event) {
    //  jQuery('.date-popup-init').datepicker();
    event.preventDefault();
  });

       // Remove place holder on focus
      jQuery('textarea[placeholder],  input[placeholder]').on('focus', function () {
        var $this = jQuery(this);
        $this.data('placeholder', $this.prop('placeholder'));
        $this.removeAttr('placeholder')
      }).on('blur', function () {
        var $this = jQuery(this);
        $this.prop('placeholder', $this.data('placeholder'));
      });

});   