<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',
);
$characters_query = new WP_Query($args);
?>

<h3><span class="section--titre__focus">Les personnages</span></h3> <!-- Déplacez le titre en dehors de swiper-container -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php while ($characters_query->have_posts()) : $characters_query->the_post(); ?>
            <div class="swiper-slide">
                <figure>
                    <?php the_post_thumbnail('full'); ?>
                    <figcaption><?php the_title(); ?></figcaption>
                </figure>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php wp_reset_postdata(); ?>
