const myNav = document.getElementById('mynav');
window.onscroll = function () {
  'use strict';
  if (
    document.body.scrollTop >= 200 ||
    document.documentElement.scrollTop >= 200
  ) {
    myNav.classList.add('nav-colored');
    myNav.classList.remove('nav-transparent');
  } else {
    myNav.classList.add('nav-transparent');
    myNav.classList.remove('nav-colored');
  }
};

$(document).ready(function () {
  $('#toggleLC').click(function (e) {
    e.preventDefault();
    $('.leader--card').toggleClass('hide__leader--card');
    if ($(this).text() == "See all") {
      $(this).text("See less");
    } else {
      $(this).text("See all");
    };
  });

  $('.work-with').slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    speed: 300,
    slidesToShow: 6,
    variableWidth: true,
    adaptiveHeight: true,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          dots: false,
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          dots: false,
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          dots: false,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });


});
