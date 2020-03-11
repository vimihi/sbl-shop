$(document).ready(function () {
    $('.sbl-feature-slider').slick({
        arrows: true,
        speed: 300,
        slidesToShow: 3,
        variableWidth: true,
        infinite: true,
        centerMode: true
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
