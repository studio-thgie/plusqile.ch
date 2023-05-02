document.addEventListener('DOMContentLoaded', () => {
    setTimeout(init, 50);
});

function init() {

    $('.gallery').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false
    });
}