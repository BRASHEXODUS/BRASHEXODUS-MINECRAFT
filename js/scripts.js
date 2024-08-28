(function ($) {
  "use strict";

  // Preloader
  $("#page").css("display", "none");
  $(window).on("load", function () {
    $("#loader").fadeOut(300);
    $("#page").show();
  });

  // Navbar
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      $("header").addClass("navbar-scroll");
    } else {
      $("header").removeClass("navbar-scroll");
    }
  });

  // Copy IP Button
  document.getElementById("copyip").addEventListener("click", () => {
    navigator.clipboard.writeText("mc.hypixel.net").then((error) => {
      if (error) console.error(error);
      else
        Swal.fire({
          icon: "success",
          title: "Server IP Copied",
          html: "Server IP successfully copied to the clipboard.",
        });
    });
  });

  // Games Carousel
  new Swiper(".games-swiper", {
    loop: true,
    autoplay: {
      delay: 2500,
      pauseOnMouseEnter: true,
    },
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: -50,
    slideActiveClass: "active",
    navigation: {
      nextEl: ".games-swiper-button-next",
      prevEl: ".games-swiper-button-prev",
    },
    breakpoints: {
      992: {
        slidesPerView: 2,
      },
    },
  });

  // Partners Carousel
  new Swiper(".sponsor-swiper", {
    loop: true,
    autoplay: {
      delay: 2500,
      pauseOnMouseEnter: true,
    },
    slidesPerView: 1,
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });

  // Testimonials Carousel
  new Swiper(".testimonials-swiper", {
    loop: true,
    autoplay: {
      delay: 2500,
      pauseOnMouseEnter: true,
    },
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: ".testimonials-swiper-button-next",
      prevEl: ".testimonials-swiper-button-prev",
    },
    breakpoints: {
      762: {
        slidesPerView: 2,
      },
    },
  });
})(window.jQuery);
