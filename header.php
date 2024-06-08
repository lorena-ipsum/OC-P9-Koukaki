<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

    <header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <div class="nav-header">
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/burger.png'); ?>" class="fa-bars" id="open-menu" alt="Menu" />
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/burger_croix.png'); ?>" class="fa-xmark hidden" id="close-menu" alt="Menu X" />
            </div>
            <ul id="primary-menu" class="menu hidden">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="logo Fleurs d'oranger & chats errants">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
            </ul>
        </nav>
    </header>
</div>
<?php wp_footer(); ?>
</body>
</html>
