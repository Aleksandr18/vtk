$(document).ready(function () {

    /* $(document).on("click", '.burger', function () {
        $('body').toggleClass('modal-open');
    }); */

    document.querySelector('.menu-btn').addEventListener('click', function(){
        document.querySelector('.hidden').classList.toggle('active');
    })



    const menuBtn = document.querySelector('.menu-btn');
    let menuOpen = false;
    menuBtn.addEventListener('click', () => {
        if (!menuOpen) {
            menuBtn.classList.add('open');
            menuOpen = true;
        } else {
            menuBtn.classList.remove('open');
            menuOpen = false;
        }
    });

    const menuHead = document.querySelector('.hidden');
    let menuOp = false;
    menuBtn.addEventListener('click', () => {
        if(!menuOp) {
            menuHead.classList.add('openH');
            menuOp = true;
        } else {
            menuHead.classList.remove('openH');
            menuOp = false;
        }
    });

    const menuBtnBurger = document.querySelector('.menu-btn__burger');

    $('.owl-people').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 24,
        nav: true,
        autoWidth: true,
        responsiveClass: true,
    });
});