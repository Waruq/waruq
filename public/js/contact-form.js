/* ---------------------------------------------
 Contact form
 --------------------------------------------- */
$(document).ready(function() {
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() {
        $("#contact_form input, #contact_form textarea").css('border-color', '');
        $("#result").slideUp();
    });

});