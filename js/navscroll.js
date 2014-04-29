$(document).ready (function () {
    $(window).scroll (function () {
        var sT = $(this).scrollTop();
            if (sT >= 70) {
                $('.header').addClass('target')
            }else {
                $('.header').removeClass('target')
            }
    })
})