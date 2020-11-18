
$(document).ready(function () {

    document.querySelector('.menu-btn').addEventListener('click', function(){
        document.querySelector('.menu-btn').classList.toggle('open');
    });

    document.querySelector('.menu-btn').addEventListener('click', function(){
        document.querySelector('.hidden').classList.toggle('openH');
    });



    const menuBtnBurger = document.querySelector('.menu-btn__burger');

    $('.owl-people').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout : 7000,
        margin: 24,
        nav: true,
        responsiveClass: true,
        items: 1
    });
});