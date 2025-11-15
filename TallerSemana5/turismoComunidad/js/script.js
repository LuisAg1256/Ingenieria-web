$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.navBar').addClass('bgSiteMenu small');
            $("#logotipo").addClass("logotipo1").removeClass("logotipo2");
        } else {
            $('.navBar').removeClass('bgSiteMenu small');
            $("#logotipo").addClass("logotipo2").removeClass("logotipo1");
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $("#btnTop").fadeIn();
        } else {
            $("#btnTop").fadeOut();
        }
    });

    $("#btnTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
    });

    let slideIndex = 0;
    const slides = document.querySelectorAll(".slide");

    function showSlides() {
        slides.forEach(s => s.classList.remove("active"));
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        slides[slideIndex - 1].classList.add("active");
        setTimeout(showSlides, 5000);
    }
    showSlides();

    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menuPrincipal");

    hamburger.addEventListener("click", () => {
        menu.classList.toggle("show");
    });

});
