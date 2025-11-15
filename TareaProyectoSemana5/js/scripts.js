// Inicializar Swiper para la sección de hoteles
var hotelSwiper = new Swiper('.hotel-swiper', {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  navigation: {
    nextEl: '.hotel-swiper .swiper-button-next',
    prevEl: '.hotel-swiper .swiper-button-prev',
  },
  pagination: {
    el: '.hotel-swiper .swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    768: { slidesPerView: 2 },
    992: { slidesPerView: 3 },
    1200: { slidesPerView: 4 }
  }
});
