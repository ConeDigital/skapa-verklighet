<?php get_header() ; ?>


<?php if( rcp_is_active() ) : ?>
    <section class="cd-home-courses cd-welcome-courses cd-home-section">
        <div class="large-container">
            <a class="cd-back-to-home-link" href="<?php echo esc_url(home_url()); ?>"><i class="material-icons">arrow_back</i>Tillbaks till startsidan</a>
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
                            <div class="cd-home-courses-card">
                                <div class="cd-home-courses-card-top background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
                                    <a href="<?php the_permalink() ; ?>"></a>
                                    <div class="background-overlay" style="background: <?php the_field('page-course-gradient') ; ?>;"></div>
                                    <span><?php the_field('page-course-part') ; ?></span>
                                    <h4><?php the_title() ; ?></h4>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="cd-home-courses-card cd-home-courses-card-disabled">
                                <div class="cd-home-courses-card-top background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
                                    <a href="<?php the_permalink() ; ?>"></a>
                                    <div class="background-overlay" style="background: <?php the_field('page-course-gradient') ; ?>;"></div>
                                    <span><?php the_field('page-course-part') ; ?></span>
                                    <h4><?php the_title() ; ?></h4>
                                    <div class="cd-comming-soon-tile cd-show-tile">
                                        <p>Köp Kursen</p>
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

<?php 
    
    //var_dump( count(rcp_get_members()));
    //var_dump( rcp_get_members_of_subscription(6) );

    // $sub = 7;
    // $users = rcp_get_members_of_subscription($sub);

    // foreach ($users as $user_id) {
    //     if ( get_user_meta($user_id, 'rcp_status', true) != 'cancelled' ) {
    //         $currentSub = get_user_meta($user_id, 'rcp_subscription_level', true);

    //         add_user_meta( $user_id, 'cone_current_subscription', $currentSub, true );
    //     }
    // }


?>

<?php get_footer() ; ?>
