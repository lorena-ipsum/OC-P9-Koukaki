jQuery(document).ready(function($) {
    console.log('jQuery is ready!');

/*--------------------------------------------------------------
# Hero Header
--------------------------------------------------------------*/
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
/*--------------------------------------------------------------
# Sections
--------------------------------------------------------------*/
    // Intersection Observer pour les sections
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.3
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observer chaque section
    document.querySelectorAll('.section').forEach(section => {
        observer.observe(section);
    });

/*--------------------------------------------------------------
# Titres
--------------------------------------------------------------*/
    // Intersection Observer pour les titres
    const titleObserverOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    };

    const titleObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, titleObserverOptions);

    // Observer chaque titre
    document.querySelectorAll('.section--titre__focus').forEach(title => {
        titleObserver.observe(title);
    });
});

/*--------------------------------------------------------------
# Characters
--------------------------------------------------------------*/
/*--------------------------------------------------------------
# Menu Burger
--------------------------------------------------------------*/