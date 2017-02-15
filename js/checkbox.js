$('#more_author').on("click", function() {
    $('.hide-auth').toggleClass("hidden-author-field");
    $('html, body').animate({
       scrollTop: $("#instructor").offset().top
    }, 500);
    $('#author2').focus();
});
