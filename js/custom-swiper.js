document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        initialSlide: 0, 
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            slideShadows: false,
        },
    });
});
