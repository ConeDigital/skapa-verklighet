<?php get_header() ; ?>
    <div class="cd-free-episode-section">
        <div class="cd-free-episode-content">
            <div class="large-container">
                <div class="cd-free-episode-modal">
                    <i class="material-icons cd-close-free-episode">close</i>
                    <h3>Skriv in din email för att få ett gratis avsnitt</h3>
                    <?php echo do_shortcode('[activecampaign form=7]') ; ?>
                </div>
            </div>
        </div>
    </div>

    <section class="cd-home-hero background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
        <div class="background-overlay"></div>
        <div class="large-container cd-home-hero-grid">
            <iframe src="https://player.vimeo.com/video/<?php the_field('home-intro-video') ; ?>?autoplay=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <div class="cd-home-hero-content">
                <h1><?php the_title() ; ?></h1>
                <?php the_content() ; ?>
                <a class="cd-background-link cd-free-lesson-link" href="#">Få ett avsnitt gratis</a>
            </div>
        </div>
    </section>
    <section class="cd-home-courses cd-home-section">
        <div class="large-container">
            <h3>Mina webbkurser</h3>
            <div class="cd-home-courses-grid">
                <?php $loop = new WP_Query( array( 'post_type' => 'kurs', 'posts_per_page' => 3)); ?>
                <?php if ( $loop->have_posts() ) : ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="cd-home-courses-card <?php if(get_field('course-disabled')) : ?> cd-home-courses-card-disabled <?php endif ; ?>">
                            <div class="cd-home-courses-card-top background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
                                <?php if(!get_field('course-disabled')) : ?>
                                    <a href="<?php the_permalink() ; ?>"></a>
                                <?php endif ; ?>
                                <div class="background-overlay" style="background: <?php the_field('course-gradient') ; ?>;"></div>
                                <span><?php the_field('about-course-headline') ; ?></span>
                                <h4><?php the_title() ; ?></h4>
                                <div class="cd-comming-soon-tile">
                                    <p>Kommer snart</p>
                                </div>
                            </div>
                            <p><?php the_field('course-excerpt') ; ?></p>
                            <a href="<?php if(!get_field('course-disabled')) : the_permalink() ; endif ; ?>" <?php if(get_field('course-disabled')) : ?> disabled <?php endif ; ?>>Läs mer</a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="cd-home-background-section cd-home-section background-img" style="background-image: url('<?php the_field('home-background-section-img') ; ?>')">
        <div class="background-overlay"></div>
        <div class="large-container">
            <?php the_field('home-background-section-text') ; ?>
        </div>
    </section>
    <section class="cd-home-about-section cd-home-section">
        <div class="large-container cd-home-about-grid">
            <div class="cd-home-about-left">
                <div class="cd-home-about-img background-img" style="background-image: url('<?php the_field('home-about-section-img') ; ?>')"></div>
                <div class="cd-home-about-info">
                    <h4>Annette Forslund</h4>
                    <span>Kursledare</span>
                </div>
            </div>
            <div class="cd-home-about-right">
                <?php the_field('home-about-section-text') ; ?>
            </div>
        </div>
    </section>
    <section class="cd-home-link-section cd-home-section">
        <div class="large-container">
            <a class="cd-background-link cd-free-lesson-link" href="#">Få ett avsnitt gratis</a>
        </div>
    </section>
    <section class="cd-course-bottom-grid">
        <?php $loop = new WP_Query( array( 'post_type' => 'kurs', 'posts_per_page' => 3)); ?>
        <?php if ( $loop->have_posts() ) : ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="cd-course-bottom-card <?php if(get_field('course-disabled')) : ?> cd-course-bottom-card-disabled <?php endif ; ?>" style="background: <?php the_field('course-gradient') ; ?>">
                    <span><?php the_field('about-course-headline') ; ?></span>
                    <h4><?php the_title() ; ?></h4>
                    <p>Läs mer</p>
                    <?php if(!get_field('course-disabled')) : ?>
                        <a href="<?php the_permalink() ; ?>"></a>
                    <?php endif ; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </section>

<?php get_footer() ; ?>