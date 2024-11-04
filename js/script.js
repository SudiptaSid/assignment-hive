// Preloader
jQuery(window).on("load", function () {
  jQuery(".preloader").fadeOut(500);
});

// Sticky Navbar
$(window).scroll(function () {
  if ($(window).scrollTop() >= 100) {
    $(".mainHeader .navbar").addClass("sticky");
  } else {
    $(".mainHeader .navbar").removeClass("sticky");
  }
});

// Dropdown
$("li.dropdown").hover(
  function () {
    $(this).find(".dropdown-menu").first().stop(true, true).slideDown(150);
  },
  function () {
    $(this).find(".dropdown-menu").first().stop(true, true).slideUp(105);
  }
);

// tooltip
$(document).ready(function () {
  $('[data-bs-toggle="tooltip"]').tooltip();
});

// Back to top
jQuery(function ($) {
  if ($("#backToTop").length) {
    var scrollTrigger = 100, // px
      backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
          $("#backToTop").addClass("show");
        } else {
          $("#backToTop").removeClass("show");
        }
      };
    backToTop();
    $(window).on("scroll", function () {
      backToTop();
    });
    $("#backToTop").on("click", function (e) {
      e.preventDefault();
      $("html,body").animate(
        {
          scrollTop: 0,
        },
        1000
      );
    });
  }
});

// JQuery counterUp
if ($(".counterUp").length > 0) {
  $(".counterUp").counterUp({
    delay: 15,
    time: 1500,
  });
}

// Hero Slider One
$(".heroSliderOne").slick({
  arrows: true,
  dots: false,

  slidesToShow: 1,
  slidesToScroll: 1,

  infinite: true,
  speed: 8000,
  autoplay: true,
  autoplaySpeed: 0,
  pauseOnHover: true,
});

// Stats Slider One
$(".statsSliderOne").slick({
  arrows: true,
  dots: false,

  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 4000,
  pauseOnHover: true,

  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

// Review Slider One
$(".reviewSliderOne").slick({
  arrows: true,
  dots: false,

  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 4000,
  pauseOnHover: true,

  slidesToShow: 1,
  slidesToScroll: 1,
});
