document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        initialSlide: 1, // Affiche le deuxième personnage au chargement
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
            dynamicBullets: false,
        },
    });
});
