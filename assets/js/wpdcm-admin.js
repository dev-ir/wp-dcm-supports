jQuery('.dcm-remove-image').click(function(){
    jQuery(this).parent().parent().children('input[type="hidden"]').prop('type', 'file');
    jQuery(this).parent('div').children().remove();
});