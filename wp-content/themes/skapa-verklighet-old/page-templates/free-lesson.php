<?php
/**
 * Template Name: Gratis
 */
?>
<?php get_header() ; ?>

<section class="single-section">
    <div class="large-container single-video">
        <iframe src="https://player.vimeo.com/video/<?php the_field('course-video') ; ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <!--            <div class="single-pagination">-->
        <!--                --><?php //$prev_post = get_previous_post(); ?>
        <!--                --><?php //$next_post = get_next_post(); ?>
        <!--                <a href="--><?php //echo get_permalink( $prev_post->ID ); ?><!--">-->
        <!--                    --><?php //if (!empty( $prev_post )):
        //                        previous_post_link( 'Föregående Avsnitt' );
        //                    endif; ?>
        <!--                </a>-->
        <!--                <a href="--><?php //echo get_permalink( $next_post->ID ); ?><!--">-->
        <!--                    --><?php //if (!empty( $next_post )):
        //                        next_post_link( 'Nästa Avsnitt' );
        //                    endif; ?>
        <!--                </a>-->
        <!--            </div>-->
    </div>
    <div class="single-content small-container">
        <p><?php the_content() ; ?></p>
        <a href="<?php echo esc_url(home_url('/registrera')); ?>" class="color-button register-link"><?php the_field('register-button-text') ; ?></a>
    </div>
</section>

<?php get_footer() ; ?>
