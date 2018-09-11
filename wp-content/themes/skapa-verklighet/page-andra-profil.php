<?php get_header() ; ?>

    <section class="register-section">
        <div class="small-container">
            <h3><?php the_title() ; ?></h3>
            <?php if( ! rcp_is_active() ) : ?>
                <p>För att ändra profil så måste du logga in eller registrera dig</p>
            <?php endif ; ?>
            <?php echo do_shortcode('[rcp_profile_editor]'); ?>
        </div>
    </section>

<?php get_footer() ; ?>