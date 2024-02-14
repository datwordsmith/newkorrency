  $(document).ready(function () {
    var navbar = $("#navbar");

    $(window).scroll(function () {
      if ($(window).scrollTop() >= 0.5) {
        navbar.addClass("fixed-top scrolled shadow-sm");
      } else {
        navbar.removeClass("fixed-top scrolled");
      }
    });
  });