document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow', // Conserve l'effet Coverflow
        loop: true, // Active la boucle infinie
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 3,  // Affiche trois personnages à la fois par défaut
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false, // Désactive les ombres
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: false,  // Désactive la pagination
            dynamicBullets: false
        },
        breakpoints: {
            // when window width is <= 768px (mobile)
            768: {
                slidesPerView: 1
            },
            // when window width is <= 1024px (tablet)
            1024: {
                slidesPerView: 2
            },
            // when window width is > 1024px (desktop)
            1025: {
                slidesPerView: 3
            }
        }
    });
});
