$(document).ready(function () {
    
    setTimeout(function () {
        const body = document.body;
        body.style.position = 'relative';
        $(".loader-wrapper").fadeOut("slow");
    }, 2000);

    $('.sbl-feature-slider').slick({
        arrows: true,
        speed: 300,
        slidesToShow: 3,
        variableWidth: true,
        infinite: true,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        accessibility: false,
        touchMove: false,
        swipe: false
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: false,
        variableWidth: false,
        infinite: false,
        centerMode: false
    });

    $('.slider-nav .slick-slide').on('click', function (event) {
        $('.slider-for').slick('slickGoTo', $(this).data('slickIndex'));
    });
});
