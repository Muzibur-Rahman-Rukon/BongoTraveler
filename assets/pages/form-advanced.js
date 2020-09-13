/*
  Template Name: Doctorist - Patient Management System
 Author: Lndinghub(Themesbrand)
 File: Form Advanced Components Init
 */



!function($) {
    "use strict";

    var AdvancedForm = function() {};
    
    AdvancedForm.prototype.init = function() {
        //creating various controls

        // Date Picker
        jQuery('#datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-multiple-date').datepicker({
            format: "mm/dd/yyyy",
            clearBtn: true,
            multidate: true,
            multidateSeparator: ","
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });


        // Select2
        $(".select2").select2({
            dropdownParent: $(".new_appoinment")
        });

        $(".select").select2();

        $('#timepicker1').timepicker({ 
            template: 'modal'
        });
        
    },
    //init
    $.AdvancedForm = new AdvancedForm, $.AdvancedForm.Constructor = AdvancedForm
}(window.jQuery),

//initializing
function ($) {
    "use strict";
    $.AdvancedForm.init();
}(window.jQuery);