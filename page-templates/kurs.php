<?php
/**
 * Template Name: Kurs
 */

get_header() ;
$pageTitle = get_the_title();

?>

<?php if( rcp_user_can_access( get_current_user_id(), get_the_ID() ) ) : ?>

    <section class="large-container start-top">
        <div class="list-left">
            <h2>Hej <?php echo do_shortcode('[user_name]') ; ?>,</h2>
            <?php the_content() ; ?>
        </div>
        <div class="list-wrapper">
            <div class="list-content">
                <h3>Avsnitt till kursen: <?php echo $pageTitle ; ?></h3>
                <div class="list">
                    <?php $loop = new WP_Query( array( 'post_type' => 'course', 'posts_per_page' => -1, 'order' => 'ASC', 'category_name' => $pageTitle) ); ?>
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
