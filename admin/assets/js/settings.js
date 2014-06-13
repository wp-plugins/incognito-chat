var formOptionsVisbleRouter = function() {
    if (jQuery("select#typeWidget").val() == 'picture') {
        jQuery('[data-type="pic"]').show();
        jQuery('[data-type="default"]').hide();
        jQuery('#urlPic').attr('disabled', 'disabled');
    } else {
        jQuery('#urlPic').removeAttr('disabled');
        jQuery('[data-type="pic"]').hide();
        jQuery('[data-type="default"]').show();
    }
}

jQuery(function($) {
    formOptionsVisbleRouter()
    $('#buttonColor').wpColorPicker();
})