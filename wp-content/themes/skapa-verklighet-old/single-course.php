<?php get_header() ; ?>
<?php if( rcp_is_active() ) : ?>

    <section class="single-section">
        <div class="large-container single-video">
            <iframe src="https://player.vimeo.com/video/<?php the_field('course-video') ; ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <div class="single-pagination">
                <?php $prev_post = get_previous_post(); ?>
                <?php $next_post = get_next_post(); ?>
                <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                    <?php if (!empty( $prev_post )):
                        previous_post_link( 'Föregående Avsnitt' );
                    endif; ?>
                </a>
                <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                    <?php if (!empty( $next_post )):
                        next_post_link( 'Nästa Avsnitt' );
                    endif; ?>
                </a>
            </div>
        </div>
        <div class="single-content small-container">
            <h2><?php the_title() ; ?></h2>
            <p><?php the_content() ; ?></p>
            <?php if( get_field('course-pdf') ): ?>
                <a target="_blank" href="<?php the_field('course-pdf') ; ?>"><i class="material-icons">picture_as_pdf</i> Material till avsnittet</a>
            <?php endif; ?>
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
