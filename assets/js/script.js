$(document).ready(function () {

    document.querySelector('.menu-btn').addEventListener('click', function(){
        document.querySelector('.menu-btn').classList.toggle('open');
    });

    document.querySelector('.menu-btn').addEventListener('click', function(){
        document.querySelector('.hidden').classList.toggle('openH');
    });

    document.querySelector('.close').addEventListener('click', function () {
        document.querySelector('.hearing').classList.toggle('closeBlock');
    })


    $('.owl-people').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout : 7000,
        margin: 24,
        nav: true,
        items: 1
    });
});