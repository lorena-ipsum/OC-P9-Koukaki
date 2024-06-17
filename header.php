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

    <div class="site-header-wrapper">
        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <div class="nav-header">
                    <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/burger.png'); ?>" class="fa-bars" id="open-menu" alt="Menu" />
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/burger_croix.png'); ?>" class="fa-xmark hidden" id="close-menu" alt="Menu X" />
                </div>
                <div class="menu-wrapper">
                    <div id="primary-menu" class="menu hidden">
                        <ul>
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/logomini.png'); ?>" alt="logo Fleurs d'oranger & chats errants">
                            <li><a class="section--titre__focus" href="#story">Histoire</a></li>
                            <li><a class="section--titre__focus" href="#characters">Personnages</a></li>
                            <li><a class="section--titre__focus" href="#place">Lieu</a></li>
                            <li><a class="section--titre__focus" href="#studio">Studio Koukaki</a></li>
                        </ul>
                        <div>
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/catblack.png'); ?>" class= "catblack" alt="tete de chat noir" />
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/catorage.png'); ?>" class= "catorange" alt="tete de chat orange" />
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/catpurple.png'); ?>" class= "catpurple" alt="tete de chat purple" />
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/flowermenu.png'); ?>" class= "flowermenu" alt="fleur du menu" />
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/flowermenu2.png'); ?>" class= "flowermenu2" alt="fleur du menu" />
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/flowermenu3.png'); ?>" class= "flowermenu3" alt="fleur du menu" />
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/flowermenu4.png'); ?>" class= "flowermenu4" alt="fleur du menu" />
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/hibiscusmenu.png'); ?>" class= "hibiscusmenu" alt="fleur du menu" />
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/StudioKoukaki.png'); ?>" class= "StudioKoukaki" alt="fleur du menu" />
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
