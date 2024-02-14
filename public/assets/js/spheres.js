$(document).ready(function() {

  function animatePurpleSphere() {
    $('.purple-sphere')
      .animate({
        top: '-30%'  // Adjust the starting position as needed
      }, 2000)
      .animate({
        top: '30%'  // Adjust the ending position as needed
      }, 2000, function() {

      });
  }

  animatePurpleSphere();

});