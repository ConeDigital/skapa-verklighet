<?php get_header() ; ?>

    <div id="exitpopup_bg">
        <div id="exitpopup">
            <h3>Innan du går! Få en gratis lektion.</h3>
            <p>Skriv in din mail så får du min första lektion helt gratis</p>
            <div class="exitpopup-inputs">
                <input placeholder="Din Email adress">
                <button>Skicka in</button>
            </div>
        </div>
    </div>
    <section class="hero">
        <div class="background-img hero-background" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
        <div class="hero-content container">
            <h1><?php the_title() ; ?></h1>
            <p><?php the_content() ; ?></p>
            <div class="video-box">
                <iframe src="https://player.vimeo.com/video/<?php the_field('intro-video') ; ?>?autoplay=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <a href="<?php echo esc_url(home_url('/registrera')); ?>" class="color-button register-link">Registrera dig för gratis lektion</a>
        </div>
    </section>
    <section class="about-section new-section">
        <h2><?php the_field('about-course-headline') ; ?></h2>
        <div class="about-course small-container">
            <div class="about-halfs">
            <?php if( have_rows('about-course-check') ): ?>
                <?php
                $key = 0;
                $count = 0;
                $html = '';
                ?>
                <?php while( have_rows('about-course-check') ) : the_row();?>
                    <?php
                    //$check = get_sub_field('course-check');

                    if($count == 0){
                        if( $key == 0 ){
                            $col1 = '<div class="about-half">';

                        }
                        $col1 .= '<div class="about-check"><i class="material-icons">check</i><p>'. get_sub_field('course-check') .'</p></div>';
                        $count++;
                        $key++;
                        continue;
                    }
                    if($count == 1){
                        if( $key == 1 ){
                            $col2 = '<div class="about-half">';
                        }
                        $col2 .= '<div class="about-check"><i class="material-icons">check</i><p>'. get_sub_field('course-check') .'</p></div>';
                        $count = 0;
                        $key++;
                        continue;
                    }
                    ?>
                <?php endwhile; ?>
            <?php endif;
            $col1 .= '</div>';
            $col2 .= '</div>';

            $html = $col1 . $col2;
            echo ($html);
            ?>

            </div>
            <?php the_field('about-course-content') ; ?>
        </div>
        <div class="small-container color-link">
            <a href="<?php echo esc_url(home_url('/registrera')); ?>" class="register-link">Skriv upp dig & få del 1 av kursen helt gratis</a>
        </div>
    </section>
    <section class="new-section review-section">
        <h2><?php the_field('reviews-headline') ; ?></h2>
        <div class="small-container ">
            <div class="swiper-container review-swiper">
                <div class="swiper-wrapper">
                <?php if( have_rows('reviews') ): ?>
                    <?php while( have_rows('reviews') ) : the_row();?>
                        <div class="swiper-slide">
                            <div class="review-left">
                                <h6><?php the_sub_field('reviews-name') ; ?></h6>
                                <p><?php the_sub_field('reviews-content') ; ?></p>
                                <div class="stars">
                                    <i class="material-icons">star_rate</i>
                                    <i class="material-icons">star_rate</i>
                                    <i class="material-icons">star_rate</i>
                                    <i class="material-icons">star_rate</i>
                                    <i class="material-icons">star_rate</i>
                                </div>
                            </div>
                            <div class="review-right background-img" style="background-image: url('<?php the_sub_field('reviews-img') ; ?>')"></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="review-link">
                <a href="<?php echo esc_url(home_url('/registrera')); ?>" class="color-button register-link">Registrera dig för gratis lektion</a>
            </div>
        </div>
    </section>
    <section class="new-section background-img image-section" style="background-image: url('<?php the_field('yoga-img') ; ?>')">
        <div class="small-container">
            <h3><?php the_field('yoga-headline') ; ?></h3>
            <?php the_field('yoga-content') ; ?>
        </div>
    </section>
    <section class="bio-section new-section">
        <h2><?php the_field('bio-headline') ; ?></h2>
        <div class="small-container">
            <div class="bio-half">
                <div class="bio-left">
                    <div class="bio-left-content">
                        <div class="bio-left-top background-img" style="background-image: url('<?php the_field('bio-img') ; ?>')">

                        </div>
                        <div class="bio-left-bottom">
                            <p>Annette Forslund</p>
                            <span>Kursledare</span>
                        </div>
                    </div>
                </div>
                <div class="bio-right">
                    <?php the_field('bio-content') ; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="new-section courses-section">
        <h2><?php the_field('course-headline') ; ?></h2>
        <div class="courses large-container">
            <?php $loop = new WP_Query( array( 'post_type' => 'course', 'posts_per_page' => -1, 'order' => 'ASC') ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="course">
                    <h6><?php the_title() ; ?></h6>
                    <p><?php the_content() ; ?></p>
                    <span><?php the_field('course-length') ; ?> minuter</span>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
    <section class="dark-section new-section">
        <div class="dark-content container">
            <h1><?php the_title() ; ?></h1>
            <p>Det kan bara bli bättre</p>
            <a href="<?php echo esc_url(home_url('/registrera')); ?>" class="border-link register-link">Gå med nu!</a>
        </div>
    </section>

<?php get_footer() ; ?>