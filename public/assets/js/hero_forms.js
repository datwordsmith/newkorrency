$(document).ready(function () {
    // Toggle classes when Sell button is clicked
    $('#sell-button').click(function () {
        $('#buy-button').toggleClass('sell buy');
        $(this).toggleClass('sell buy');
        $('#sell-form').toggleClass('d-block d-none');
        $('#buy-form').toggleClass('d-block d-none');
    });

    // Toggle classes when Buy button is clicked
    $('#buy-button').click(function () {
        $('#sell-button').toggleClass('sell buy');
        $(this).toggleClass('sell buy');
        $('#buy-form').toggleClass('d-block d-none');
        $('#sell-form').toggleClass('d-block d-none');
    });


    $('#send-btn').click(function () {
        $('#p2p-btn').toggleClass('active inactive');
        $(this).toggleClass('active inactive');
        $('#p2p-forms').toggleClass('d-block d-none');
        $('#send-form').toggleClass('d-block d-none');
    });

    $('#p2p-btn').click(function () {
        $('#send-btn').toggleClass('active inactive');
        $(this).toggleClass('active inactive');
        $('#send-form').toggleClass('d-block d-none');
        $('#p2p-forms').toggleClass('d-block d-none');
    });
});