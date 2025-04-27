jQuery(document).ready(function(){
	jQuery('input').focus(function () {
	    jQuery(this).parents('.form-group').addClass('focused');
	});
	jQuery('input').blur(function () {
	    var inputValue = jQuery(this).val();
	    if (inputValue == "") {
	        jQuery(this).removeClass('filled');
	        jQuery(this).parents('.form-group').removeClass('focused');
	    } else {
	        jQuery(this).addClass('filled');
	    }
	});
	jQuery('textarea').focus(function () {
	    jQuery(this).parents('.form-group').addClass('focused');
	});
	jQuery('textarea').blur(function () {
	    var inputValue = jQuery(this).val();
	    if (inputValue == "") {
	        jQuery(this).removeClass('filled');
	        jQuery(this).parents('.form-group').removeClass('focused');
	    } else {
	        jQuery(this).addClass('filled');
	    }
	});
	// contact form 7 - add/remove class
    // Check input fields
    jQuery('input').blur(function(){
        let input_value = jQuery(this).val();
        if(input_value == ""){
            jQuery(this).parent().closest('div').addClass('showerror');
        }
        else{
            jQuery(this).parent().closest('div').removeClass('showerror');
        }
    });
    // Check textarea fields
    jQuery('textarea').blur(function(){
        let input_value = jQuery(this).val();
        if(input_value == ""){
            jQuery(this).parent().closest('div').addClass('showerror');
        }
        else{
            jQuery(this).parent().closest('div').removeClass('showerror');
        }
    });
    // Check select fields
    jQuery('div.contact-us select').on('click', function(){
        let selected_value = jQuery(this).val();
        if(selected_value == ""){
            jQuery(this).parent().closest('div').addClass('error');
            jQuery(this).parent().closest('div').removeClass('hide');
        }
        else{
            jQuery(this).parent().closest('div').addClass('show');
            jQuery(this).parent().closest('div').removeClass('hide');
            jQuery(this).parent().closest('div').removeClass('error');
        }
    });
    // Check input file field
    jQuery('input.wpcf7-file').on('change', function(){
        let inputValue = jQuery(this).val();
        if(inputValue == ""){
            jQuery(this).parent().closest('div').removeClass('selected');
        }
        else{
            jQuery(this).parent().closest('div').addClass('selected');
        }
    });

    // code for hide cloes button
    jQuery('.byt-close-bnt').hide();

    jQuery('.wpcf7-form').attr('autocomplete', 'off');
jQuery('#attachment_file').on('change', function() {
        if(jQuery('#attachment_file')[0].files[0].size > 10000000){
            jQuery('#file_err').text('File is larger than 10mb');
            jQuery('#contact_sbt').prop('disabled', true);
        } else{
            jQuery('#file_err').text('');
            jQuery('#contact_sbt').prop('disabled', false);
        }

        // code for show cloes button
        if (jQuery('#attachment_file')[0].files.length === 0) {
            jQuery('.byt-close-bnt').hide();
            jQuery('.form-attach-file').removeClass('selected');
            
        } else {
            jQuery('.byt-close-bnt').show();    
        }   
    });

    // code for cloes button click and numm value of input type file
    jQuery('.byt-close-bnt').on( "click", function() {
        jQuery("#attachment_file" ).val('');
        jQuery(this).hide();
        jQuery('#file_err').text('');
        jQuery('#contact_sbt').prop('disabled', false);
        jQuery('.wpcf7-form .file-attach-wrap > span').html("Add attachment / Drag & Drop here");
        jQuery(this).closest('div').removeClass("selected");
    });
});