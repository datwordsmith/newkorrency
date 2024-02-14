$(document).ready(function() {
  // Initialize Typed.js for each input field
  var options = {
    typeSpeed: 600,
    backSpeed: 600,
    showCursor: false,
    onComplete: function(self) {
      self.reset();
    }
  };

  var firstnameInput = new Typed('#firstnameInput', $.extend({}, options, {
    strings: ['Franklin']
  }));

  var surnameInput = new Typed('#surnameInput', $.extend({}, options, {
    strings: ['John']
  }));

  var emailInput = new Typed('#emailInput', $.extend({}, options, {
    strings: ['franklin_john@email.com']
  }));

  // Pause typing when form field gains focus
  $('#subscribeForm input').focus(function() {
    firstnameInput.pause();
    surnameInput.pause();
    emailInput.pause();
  });

  // Resume typing when form field loses focus
  $('#subscribeForm input').blur(function() {
    firstnameInput.start();
    surnameInput.start();
    emailInput.start();
  });

  // Stop typing when any key is pressed
  $('#subscribeForm input').keydown(function() {
    firstnameInput.stop();
    surnameInput.stop();
    emailInput.stop();
  });
});