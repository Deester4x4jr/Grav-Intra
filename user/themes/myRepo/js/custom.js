/*
*  This function is to limit the number of items that can be selected on a select form field
*/
function selectLimit (obj) {
    var selectLimit = (obj.parent().attr('data-grav-select-limit')) ? obj.parent().attr('data-grav-select-limit') : false;

    if (!selectLimit) { return; }

    if (selectLimit <= obj.siblings(":selected").length) {
        obj.removeAttr("selected");
    }
}

$(document).ready( function () {
    
    $("select").on("click", "option", function (event) {
        selectLimit($(this));
    });

    $('.berger').click( function () {
        $(this).toggleClass('is-open');
        $(this).parent().toggleClass('is-open');
        $('#coverall').toggleClass('blocking');
        $('body').toggleClass('no-scroll');
    })
});