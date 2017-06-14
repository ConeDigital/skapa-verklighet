<?php get_header() ; ?>

<?php if( rcp_is_active() ) : ?>

    <section class="container start-top">
        <h2>Välkommen <?php echo do_shortcode('[user_name]') ; ?>,</h2>
        <?php the_content() ; ?>
    </section>
    <section class="list-section">
        <div class="list-wrapper container">
            <div class="list-content">
                <h3>Avsnitt</h3>
                <div class="list">
                    <?php $loop = new WP_Query( array( 'post_type' => 'course', 'posts_per_page' => -1, 'order' => 'ASC') ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="list-grid">
                            <a href="<?php the_permalink() ; ?>" class="absolute-link"></a>
                            <p><i class="material-icons">play_circle_filled</i> <?php the_title() ; ?></p>
                            <span><?php the_field('course-length') ; ?> min</span>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
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
