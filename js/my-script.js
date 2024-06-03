jQuery(document).ready(function($) {
    console.log('jQuery is ready!');

    // Forcer la lecture de la vidéo et cacher l'image de fallback
    const video = document.querySelector('.hero-video');
    const fallback = document.querySelector('.background-fallback');
    if (video) {
        video.addEventListener('canplay', function() {
            video.classList.add('loaded');
            if (fallback) {
                fallback.classList.add('hidden');
            }
        });

        video.play().then(() => {
            console.log('La vidéo est en cours de lecture.');
        }).catch(error => {
            console.log('La lecture automatique de la vidéo a été bloquée. Interaction utilisateur requise.', error);
        });
    }

    // Fonction de parallaxe
    function parallax() {
        var scrollPosition = $(window).scrollTop();
        
        // Ajuster la position de la vidéo de fond et de l'image de logo
        $('.background-fallback').css('transform', 'translateY(' + (scrollPosition * 0.5) + 'px)');
        $('.hero-video').css('transform', 'translateY(' + (scrollPosition * 0.3) + 'px)');
        $('.banner img').css('transform', 'translateY(' + (scrollPosition * 0.2) + 'px)');
    }

    // Appeler la fonction de parallaxe sur le défilement de la fenêtre
    $(window).on('scroll', function() {
        parallax();
    });

    // Fonction pour ajouter les classes d'animation
    function addFadeInClasses() {
        const sections = $('section');
        const animationClasses = ['fade-in-up', 'fade-in-down', 'fade-in-left', 'fade-in-right'];
        sections.each(function(index) {
            const animationClass = animationClasses[index % animationClasses.length];
            $(this).addClass('section ' + animationClass);
        });
    }

    // Initial call
    addFadeInClasses();
});
