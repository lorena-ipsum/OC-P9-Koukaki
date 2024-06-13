<?php
get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <div class="background-fallback"></div>
        <video class="hero-video" autoplay muted loop playsinline poster="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner.png'); ?>">
            <source src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/videos/StudioKoukaki_Video_Header.mp4'); ?>" type="video/mp4">
        </video>
        <div class="logo-container">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="logo Fleurs d'oranger & chats errants">
        </div>
    </section>
   <section id="story" class="story  section">
       <h2><span class="section--titre__focus">L'histoire</span></h2>
       <article id="history" class="story__article">
           <p><?php echo esc_html(get_theme_mod('story')); ?></p>
       </article>

       <article id ="characters" class="section">
        <?php get_template_part('template-parts/characters-swiper'); ?>
       </article>

       <div id="place" class="section">
           <div class="content-left">
               <h3><span class="section--titre__focus">Le Lieu</span></h3>
               <p><?php echo esc_html(get_theme_mod('place')); ?></p>
           </div>
           <div class="content-right">
               <div class="cloud"></div>
           </div>
       </div>
   </section>
   <section id="studio" class="section">
       <h2><span class="section--titre__focus">Studio Koukaki</span></h2>
       <div>
           <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
           <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
       </div>
   </section>
   <section class="section"> 
       <p><?php get_template_part('template-parts/oscar'); ?></p>
   </section>
</main><!-- #main -->

<?php
get_footer();
?>
