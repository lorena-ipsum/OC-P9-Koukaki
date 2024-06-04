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
        $('.logo-container').css('transform', 'translateY(' + (scrollPosition * 0.2) + 'px)');

        // Déplacer l'élément cloud de 300px vers la gauche lors du défilement
        $('.cloud').css('transform', 'translateX(' + (-scrollPosition * 0.3) + 'px)');
    }

    // Initialiser la fonction de parallaxe sur le défilement de la fenêtre
    $(window).on('scroll', function() {
        requestAnimationFrame(parallax);
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

    // Appel initial
    addFadeInClasses();

    // Intersection Observer pour les titres
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observer chaque titre
    document.querySelectorAll('.section--titre__focus').forEach(title => {
        observer.observe(title);
    });
});
