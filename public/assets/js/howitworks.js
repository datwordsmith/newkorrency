$(document).ready(function () {
    // Toggle classes when Sell button is clicked
    $('#how-send-btn').click(function () {
        $('#how-p2p-btn').toggleClass('send p2p');
        $(this).toggleClass('send p2p');
        $('#sendList').toggleClass('d-block d-none');
        $('#p2pList').toggleClass('d-block d-none');
        $('#send_mobile').toggleClass('d-block d-none');
        $('#p2p_mobile').toggleClass('d-block d-none');
    });

    // Toggle classes when Buy button is clicked
    $('#how-p2p-btn').click(function () {
        $('#how-send-btn').toggleClass('send p2p');
        $(this).toggleClass('send p2p');
        $('#sendList').toggleClass('d-block d-none');
        $('#p2pList').toggleClass('d-block d-none');
        $('#send_mobile').toggleClass('d-block d-none');
        $('#p2p_mobile').toggleClass('d-block d-none');
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