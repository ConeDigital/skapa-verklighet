<?php get_header() ; ?>

    <section class="hero">
        <div class="background-img hero-background" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
        <div class="hero-content container">
            <h1><?php the_title() ; ?></h1>
            <p><?php the_content() ; ?></p>
            <div class="video-box">
                <iframe src="https://player.vimeo.com/video/77308630?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <a href="#" class="color-button">Registrera dig för gratis lektion</a>
        </div>
    </section>
    <section class="about-section new-section">
        <h2><?php the_field('about-course-headline') ; ?></h2>
        <div class="about-course small-container">
            <div class="about-halfs">
                <div class="about-half">
                    <div class="about-check">
                        <i class="material-icons">check</i>
                        <p>Vill du få kontakt med ditt mod så du äntligen kan göra det du vill och inte måste?</p>
                    </div>
                    <div class="about-check">
                        <i class="material-icons">check</i>
                        <p>Är du trött på att sitta fast i ett ekorrhjul?</p>
                    </div>
                </div>
                <div class="about-half">
                    <div class="about-check">
                        <i class="material-icons">check</i>
                        <p>Känner du att din kreativitet inte får plats i vardagen och att du vet att den behöver komma till uttryck?</p>
                    </div>
                    <div class="about-check">
                        <i class="material-icons">check</i>
                        <p> Vill du veta vad du egentligen vill?</p>
                    </div>
                </div>
            </div>
            <?php the_field('about-course-content') ; ?>
        </div>
        <div class="small-container color-link">
            <a href="#">Skriv upp dig & få del 1 av kursen helt gratis</a>
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
                <a href="#" class="color-button">Registrera dig för gratis lektion</a>
            </div>
        </div>
    </section>
    <section class="new-section background-img image-section" style="background-image: url('<?php echo esc_url(home_url( '/wp-content/themes/skapa-verklighet/assets/images/yinyoga.png')); ?>')">
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
            <?php if( have_rows('courses') ): ?>
                <?php while( have_rows('courses') ) : the_row();?>
                    <div class="course">
                        <h6><?php the_sub_field('course-title') ; ?></h6>
                        <p><?php the_sub_field('course-content') ; ?></p>
                        <span><?php the_sub_field('course-time') ; ?> minuter</span>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="dark-section new-section">
        <div class="dark-content container">
            <h1><?php the_title() ; ?></h1>
            <p>Det kan bara bli bättre</p>
            <a href="#" class="border-link">Gå med nu!</a>
        </div>
    </section>

<?php get_footer() ; ?>