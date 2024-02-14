$(document).ready(function() {
    var phone = $(".phone");
  
    $(window).scroll(function() {
      var windowHeight = $(window).height();
      var scrollPosition = $(window).scrollTop();
      var sectionOffset = $("#thehow").offset().top;
      var sectionHeight = $("#thehow").outerHeight();
  
      if (scrollPosition > sectionOffset - windowHeight + 0 && scrollPosition < sectionOffset + sectionHeight) {
        phone.addClass("slide-down");
      } else {
        phone.removeClass("slide-down");
      }
    });
  });
  