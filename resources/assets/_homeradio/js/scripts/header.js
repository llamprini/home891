document.addEventListener("DOMContentLoaded", function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 0) {
            $("header").addClass("scroll");
        } else {
            $("header").removeClass("scroll");
        }
    });

    $(".menu-button, .clear-button").on("click", function () {
        const isOpen = $("header").hasClass("active");
        $("header").toggleClass("active");


        if (!isOpen) {
            $("body, html").addClass("overflow-y-hidden");
        } else {
            $("body, html").removeClass("overflow-y-hidden");
        }

        setTimeout(() => {
            $("header").toggleClass("header-animations");
        }, 600);
    });

    $("nav a, .buttons .button-1, .header-logo").on("click", function () {
        $("header").removeClass("active header-animations");
        $("body, html").removeClass("overflow-y-hidden");
    });





    $('.select .nav-item').on("click", function () {
        $('.select').toggleClass('active');
    });

    $(document).on('click', function (e) {
        if (!$(event.target).closest('.navigation .row, .menu-button, .theme-button').length) {
            $('header').removeClass('active');
            $("body, html").removeClass("overflow-y-hidden");
        }

        if (!$(event.target).closest('.select').length) {
            $('.select').removeClass('active');
        }
    });
})
