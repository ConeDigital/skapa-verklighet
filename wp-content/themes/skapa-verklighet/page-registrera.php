<?php get_header() ; ?>

    <section class="register-section">
        <div class="large-container cd-register-container">
            <a class="cd-register-top-link" href="<?php echo home_url() ; ?>">Tillbaka till startsidan</a>
            <?php echo do_shortcode('[register_form]'); ?>
        </div>
    </section>

<?php get_footer() ; ?>
