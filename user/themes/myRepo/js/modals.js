/*
*  This function is to launch modals
*/
$(document).ready( function () {
    
    // Open modal in AJAX callback
    $('button.doModal').click(function(event) {
        event.preventDefault();
        var target = $(this).attr('data-modal-target');
        $('#'+target).appendTo('body').modal();
    });
});