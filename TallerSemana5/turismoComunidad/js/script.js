// CAMBIO DE NAV CON SCROLL
$(document).ready(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('#menuPrincipal').addClass('bgSiteMenu');
            $("#logotipo").addClass("logotipo1").removeClass("logotipo2");
        } else {
            $('#menuPrincipal').removeClass('bgSiteMenu');
            $("#logotipo").removeClass("logotipo1").addClass("logotipo2");
        }
    });

    // BOTÓN VOLVER ARRIBA
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $("#btnTop").fadeIn();
        } else {
            $("#btnTop").fadeOut();
        }
    });

    $("#btnTop").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
    });

});
