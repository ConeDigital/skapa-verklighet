<?php get_header() ; ?>
<?php if( rcp_is_active() ) : ?>

    <section class="small-container new-member-section">
        <div class="new-member-content">
            <h2>Välkommen <?php echo do_shortcode('[user_name]') ; ?></h2>
            <p><?php the_content() ; ?></p>
            <a class="color-button" href="<?php echo esc_url(home_url('/course/01-valkommen-pa-resan/')); ?>">Påbörja din resa nu med första lektionen!</a>
        </div>
    </section>

<?php else : ?>

    <section class="register-section">
        <div class="small-container">
            <p>För att se detta innehåll så måste du logga in eller registrera dig</p>
            <?php echo do_shortcode('[register_form]'); ?>
        </div>
    </section>

<?php endif; ?>


<?php get_footer() ; ?>
