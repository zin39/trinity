$(document).ready(function () {
    $("#top").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      });

      //awards carousel
    var testimonialTwo = new Swiper(".awards-carousel", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        slidesPerView: 5,
        spaceBetween: 10,
        loop: true,
        loopedSlides: 4,
  
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 5,
            spaceBetween: 40,
          },
        },
      });      
});
