<?php get_header() ; ?>


<?php if( rcp_is_active() ) : ?>

    <section class="cd-home-courses cd-welcome-courses cd-home-section">
        <div class="large-container">
            <h3>Hej <?php echo do_shortcode('[user_name]') ; ?>, här är dina tillgängliga webbkurser</h3>
            <div class="cd-home-courses-grid">
                <?php $loop = new WP_Query( array(
                    'post_type' => 'page',
                    'posts_per_page' => 3,
                    'meta_query' => array(
                        array(
                            'key' => '_wp_page_template',
                            'value' => 'page-templates/kurs.php'
                        )
                    )
                )); ?>
                <?php if ( $loop->have_posts() ) : ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php if( rcp_user_can_access( get_current_user_id(), get_the_ID() ) ) : ?>

                    <div class="cd-home-courses-card <?php if(get_field('course-disabled')) : ?> cd-home-courses-card-disabled <?php endif ; ?>">
                            <div class="cd-home-courses-card-top background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
                                <a href="<?php the_permalink() ; ?>"></a>
                                <div class="background-overlay" style="background: <?php the_field('page-course-gradient') ; ?>;"></div>
                                <span><?php the_field('page-course-part') ; ?></span>
                                <h4><?php the_title() ; ?></h4>
                                <div class="cd-comming-soon-tile">
                                    <p>Kommer snart</p>
                                </div>
                            </div>
                        </div>
                    <?php endif ;?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
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
