$(document).ready(function() {
    var currentURL = encodeURIComponent("https://www.korrency.com/");
    var shareMessage = "Send/Receive money internationally and securely exchange money with your peers at your desired rate for your complete peace of mind";

    // FACEBOOK
    $('#facebookShare').on("click touchstart", function() {
        //var currentURL = encodeURIComponent(window.location.href);        
        var facebookShareURL = 'https://www.facebook.com/sharer/sharer.php?u=' + currentURL + '&quote=' + encodeURIComponent(shareMessage);
        window.open(facebookShareURL, '_blank');
    });

    // TWITTER
    $('#twitterShare').on("click touchstart", function() {
        var twitterShareURL = 'https://twitter.com/intent/tweet?url=' + currentURL;
        window.open(twitterShareURL, '_blank');
    });

    // LINKEDIN
    $("#linkedinShare").on("click touchstart", function() {
        var linkedinShareURL = 'https://www.linkedin.com/sharing/share-offsite/?url=' + currentURL;
        window.open(linkedinShareURL, '_blank');
    });

    $('#shareModal').on('show.bs.modal', function() {
        var currentURL = "https://www.korrency.com/";
        $('#shareUrl').val(currentURL);
      });
    
      // Function to copy the URL to clipboard
      $('#copyButton').on('click', function() {
        var shareUrlInput = $('#shareUrl');
        shareUrlInput.select();
        document.execCommand('copy');
        $('#copied').text('URL copied to clipboard!');
      });

});