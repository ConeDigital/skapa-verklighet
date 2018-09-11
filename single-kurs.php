<?php
$pageTitle = get_the_title();
get_header() ; ?>

    <!--    <div id="exitpopup_bg">-->
    <!--        <i class="material-icons close-popup">close</i>-->
    <!--        <div id="exitpopup">-->
    <!--            <h3>Vill du sluta oroa dig? Göra din grej & leva ditt liv?</h3>-->
    <!--            <p>Fyll i dina uppgifter nedan här för att få tre konkreta tips på hur mailat till dig</p>-->
    <!--            <div class="exitpopup-inputs">-->
    <!--<!--
    <!--                --><?php //echo do_shortcode('[activecampaign form=5]') ; ?>
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <section class="hero background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
        <div class="hero-headlines small-container">
            <?php the_content() ; ?>
            <h1><?php the_title() ; ?></h1>
        </div>
        <div class="background-overlay" style="background: <?php the_field('course-gradient') ; ?>; opacity: 0.6;"></div>
    </section>
    <section class="cd-course-top">
        <div class="large-container">
            <div class="cd-course-top-content">
                <div class="cd-course-top-left">
                    <?php the_field('about-course-content') ; ?>
                </div>
                <div class="about-course">
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
                </div>
            </div>
            <div class="review-link">
                <a href="#" class="cd-background-link">Registrera dig</a>
            </div>
        </div>
    </section>
<!--    <section class="video-section large-container">-->
<!--        <div class="video-wrapper">-->
<!--            <div class="video-box">-->
<!--                <iframe src="https://player.vimeo.com/video/--><?php //the_field('intro-video') ; ?><!--?autoplay=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="video-inputs">-->
<!--            <div class="video-input">-->
<!--                <a href="--><?php //echo esc_url(home_url('/registrera')); ?><!--" class="video-input-link">Vill du känna mer glädje, passion & mod? Registrera dig</a>-->
<!--            </div>-->
<!--            <div class="video-input">-->
<!--                --><?php //echo do_shortcode('[activecampaign form=7]') ; ?>
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->

    <section class="new-section review-section">
        <h2><?php the_field('reviews-headline') ; ?></h2>
        <div class="large-container reviews-content">
            <div class="review-cards">
                <?php

                $cards = get_field('reviews');
                $count = 0;

                foreach ($cards as $key => $card) {
                    if($count == 0){
                        if( $key == 0 ){
                            $col1 = '<div class="review-col">';
                        }
                        $col1 .= '<div class="review-card">
                                    <div class="review-right background-img" style="background-image: url('. $card['reviews-img'] .')"></div>
                                        <h6>'. $card['reviews-name'] .'</h6>
                                        <p>'. $card['reviews-content'] .'</p>
                                        <div class="stars">
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                        </div>
                                  </div>';
                        $count++;
                        continue;
                    }
                    if($count == 1){
                        if( $key == 1 ){
                            $col2 = '<div class="review-col">';
                        }
                        $col2 .= '<div class="review-card">
                                    <div class="review-right background-img" style="background-image: url('. $card['reviews-img'] .')"></div>
                                        <h6>'. $card['reviews-name'] .'</h6>
                                        <p>'. $card['reviews-content'] .'</p>
                                        <div class="stars">
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                        </div>
                                  </div>';
                        $count++;
                        continue;
                    }
                    if($count == 2){
                        if( $key == 2 ){
                            $col3 = '<div class="review-col">';
                        }
                        $col3 .= '<div class="review-card">
                                    <div class="review-right background-img" style="background-image: url('. $card['reviews-img'] .')"></div>
                                        <h6>'. $card['reviews-name'] .'</h6>
                                        <p>'. $card['reviews-content'] .'</p>
                                        <div class="stars">
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                            <i class="material-icons">star_rate</i>
                                        </div>
                                  </div>';
                        $count = 0;
                        continue;
                    }
                }

                $col1 .= '</div>';
                $col2 .= '</div>';
                $col3 .= '</div>';

                $html = $col1 . $col2 . $col3;
                echo $html

                ?>
            </div>
            <div class="review-link">
                <a href="<?php echo esc_url(home_url('/registrera')); ?>" class="cd-background-link">Registrera dig</a>
            </div>
        </div>
    </section>
    <section class="new-section background-img image-section" style="background-image: url('<?php the_field('yoga-img') ; ?>')">
        <div class="small-container">
            <h3><?php the_field('yoga-headline') ; ?></h3>
            <?php the_field('yoga-content') ; ?>

            <div class="review-link">
                <a href="<?php echo esc_url(home_url('/registrera')); ?>" class="cd-background-link">Registrera dig</a>
            </div>
        </div>
    </section>
    <section class="new-section courses-section">
        <div class="large-container">
            <h2>Innehåll från kursen</h2>
        </div>
        <div class="courses large-container">
            <?php $loop = new WP_Query( array( 'post_type' => 'course', 'posts_per_page' => -1, 'order' => 'ASC', 'category_name' => $pageTitle) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="course">
                    <h6><?php the_title() ; ?></h6>
                    <p><?php echo get_post( get_the_ID() )->post_content; ?></p>
                    <span><?php the_field('course-length') ; ?> minuter</span>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="review-link">
            <a href="<?php echo esc_url(home_url('/registrera')); ?>" class="cd-background-link">Registrera dig</a>
        </div>
    </section>
<!--    <section class="dark-section new-section">-->
<!--        <h2>--><?php //the_title() ; ?><!--</h2>-->
<!--        <p>Få mer tillgång till ditt mod, glädje och skaparkraft.</p>-->
<!--        <div class="review-link">-->
<!--            <a href="--><?php //echo esc_url(home_url('/registrera')); ?><!--" class="color-button register-link">Gå med nu</a>-->
<!--        </div>-->
<!--    </section>-->

<?php get_footer() ; ?>