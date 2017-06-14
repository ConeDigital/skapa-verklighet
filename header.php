<?php
/**
 * The template for displaying the header
 *
 * @package cone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo esc_url(home_url( '/wp-content/themes/skapa-verklighet/assets/images/af-icon.png' ) ); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <?php cone_og_meta_tags(); ?>

    <?php wp_head(); ?>
</head>
<body>
<!--    <div class="modal-wrapper" style="display: none">-->
<!--        <div class="modal-content container">-->
<!--            <i class="material-icons modal-close">highlight_off</i>-->
<!--            <div class="modal-left">-->
<!--                <div class="swiper-container modal-swiper">-->
<!--                    <div class="swiper-wrapper">-->
<!--                                <div class="swiper-slide">-->
<!--                                    <div class="background-img modal-img"></div>-->
<!--                                    <h4>Richard Bång, kursdeltagare</h4>-->
<!--                                    <p>Nullam accumsan lorem in dui. Quisque malesuada placerat nisl. Nulla sit amet est. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>-->
<!--                                </div>-->
<!--                        <div class="swiper-slide">-->
<!--                            <div class="background-img modal-img"></div>-->
<!--                            <h4>Richard Bång, kursdeltagare</h4>-->
<!--                            <p>Nullam accumsan lorem in dui. Quisque malesuada placerat nisl. Nulla sit amet est. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="swiper-pagination"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="modal-right">-->
<!--                <h4>Registrera dig!</h4>-->
<!--                <input type="email" placeholder="Email adress">-->
<!--                <input type="text" placeholder="Förnamn">-->
<!--                <input type="text" placeholder="Efternamn">-->
<!--                <input type="password" placeholder="Välj lösenord">-->
<!--                <button>Registrera</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <header class="large-container">
        <div class="header-logo">
            <img src="<?php echo esc_url(home_url( '/wp-content/themes/skapa-verklighet/assets/images/af-logo.png' ) ); ?>">
            <?php if(  rcp_is_active() ) : ?>
                <a class="absolute-link" href="<?php echo esc_url(home_url('/valkommen')); ?>"></a>
            <?php endif ; ?>
            <?php if( ! rcp_is_active() ) : ?>
                <a class="absolute-link" href="<?php echo esc_url(home_url()); ?>"></a>
            <?php endif ; ?>
        </div>
        <div class="header-right">
            <?php if( rcp_is_active() ) : ?>
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'member-menu' ) ); ?>
            <?php endif ; ?>
            <?php if( ! rcp_is_active() ) : ?>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
            <?php endif ; ?>
        </div>
        <i class="open-menu material-icons">menu</i>
    </header>
    <div class="mobile-menu">
        <i class="close-menu material-icons">close</i>
        <?php if( rcp_is_active() ) : ?>
            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'member-menu' ) ); ?>
        <?php endif ; ?>
        <?php if( ! rcp_is_active() ) : ?>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
        <?php endif ; ?>
    </div>
