$(document).ready(function() {

    $('.owl-structure').owlCarousel( {
        loop: true,
        autoplay: true,
        margin: 24,
        nav: true,
        responsiveClass: true,
        navigation: true,
        items: 1,
        responsive: {
            0: {
                items:1
            }
        }
    });



        // var btn = $('.arrowTop');
        // $(window).scroll(function () {
        //     if($(window).scrollTop() > 300) {
        //         btn.addClass('show')
        //     } else  {
        //         btn.removeClass('show');
        //     }
        // });
        // btn.on('click', function (e) {
        //     e.preventDefault();
        //     $('html, body').animate( {scrollTop: 0}, '300');
        // });
});