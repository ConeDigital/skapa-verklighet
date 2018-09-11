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
<body <?php body_class(); ?>>
    <header class="large-container">
        <div class="cd-header-left">
            <div class="header-logo">
                <img class="dark-logo" src="<?php echo esc_url(home_url( '/wp-content/themes/skapa-verklighet/assets/images/af-logo.png' ) ); ?>">
                <img class="light-logo" src="<?php echo esc_url(home_url( '/wp-content/themes/skapa-verklighet/assets/images/af-vit.svg' ) ); ?>">
                <?php if(  rcp_is_active() ) : ?>
                    <a class="absolute-link" href="<?php echo esc_url(home_url('/valkommen')); ?>"></a>
                <?php endif ; ?>
                <?php if( ! rcp_is_active() ) : ?>
                    <a class="absolute-link" href="<?php echo esc_url(home_url()); ?>"></a>
                <?php endif ; ?>
            </div>
            <?php if( ! rcp_is_active() ) : ?>
                <div class="cd-header-middle">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => '' ) ); ?>
                </div>
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
        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => '' ) ); ?>
        <?php if( rcp_is_active() ) : ?>
            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'member-menu' ) ); ?>
        <?php endif ; ?>
        <?php if( ! rcp_is_active() ) : ?>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
        <?php endif ; ?>
    </div>
