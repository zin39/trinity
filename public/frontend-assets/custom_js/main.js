$(document).ready(function () {
  $("#top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  //awards carousel
  var testimonialTwo = new Swiper(".awards-carousel", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next-award",
      prevEl: ".swiper-button-prev-award",
    },
    slidesPerView: 4,
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
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  const swiper = new Swiper('.team-swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next-team',
      prevEl: '.swiper-button-prev-team',
    },
  
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
        slidesPerView: 3,
        spaceBetween: 30,
      },
    }, 
  });

  const testimonialFour = new Swiper(".testimonial-style-four-carousel", {
    // Optional parameters
    loop: false,
    freeMode: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 50,
    autoplay: false,
    
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".services-cat-next",
      prevEl: ".services-cat-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
      },
    },
  });

  const testimonialFive = new Swiper(".testimonial-style-two-carousel", {
    // Optional parameters
    loop: true,
    freeMode: true,
    grabCursor: true,
    slidesPerView: 3,
    spaceBetween: 50,
    autoplay: false,
    dotClass: 'customPaging',
    dots:true,
    pagination: {
      el: ".swiper-pagination-counter",
      type: "custom",
      renderCustom: function (swiper, current, total) {
        return current + " / " + total;
      },
    },
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    navigation: {
      nextEl: ".swiper-button-next-testimonial",
      prevEl: ".swiper-button-prev-testimonial",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  const testimonialFive1 = new Swiper(".testimonial-style-two-carousel1", {
    // Optional parameters
    loop: true,
    freeMode: true,
    grabCursor: true,
    slidesPerView: 3,
    spaceBetween: 50,
    autoplay: false,
    dotClass: 'customPaging',
    dots:true,
    pagination: {
      el: ".swiper-pagination-counter",
      type: "custom",
      renderCustom: function (swiper, current, total) {
        return current + " / " + total;
      },
    },
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    navigation: {
      nextEl: ".swiper-button-next-testimonial1",
      prevEl: ".swiper-button-prev-testimonial1",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  const bullet = new Swiper(".testimonial-bullet", {
    // Optional parameters
    loop: false,
    freeMode: true,
    grabCursor: true,
    slidesPerView: 3,
    spaceBetween: 50,
    autoplay: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".services-cat-next",
      prevEl: ".services-cat-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
      },
    },
  });

  $("#datepicker").datepicker({
    startDate: new Date(),
    format: "dd/mm/yyyy", //you can change date format to any
    autoclose: true,
    todayHighlight: true,
    startDate: new Date(), //this will be today's date
    endDate: new Date(new Date().setDate(new Date().getDate() + 5)),
  });

  const feedback = new Swiper(".feedback-carousel", {
    // Optional parameters
    loop: false,
    freeMode: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 50,
    autoplay: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
      },
      1200: {
        slidesPerView: 1,
      },
    },
  });
});
