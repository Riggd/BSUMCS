$(document).ready (function () {
    $(window).scroll (function () {
        var sT = $(this).scrollTop();
            if (sT >= 70) {
                $('.header').addClass('target');
                $('.header-list-items').addClass('target');
            }else {
                $('.header').removeClass('target');
                $('.header-list-items').removeClass('target');
            }
    })
})