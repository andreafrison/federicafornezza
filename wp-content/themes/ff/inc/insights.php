<section id="insights">
    <?php
    $image_bg = get_field('immagine', get_option( 'page_for_posts' ));
    if( !empty($image_bg) ): ?>
        <figure class="figure-bg">
            <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>"  loading="lazy" />
        </figure>
    <?php endif; ?>
    <section class="container">
        <section class="row">
            <section class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                <h1 class="title title-lg wow fadeIn text-center"><?php echo get_field('titolo', get_option( 'page_for_posts' )); ?></h1>
                <div class="text wow fadeIn text-center"><?php echo get_field('testo', get_option( 'page_for_posts' )); ?></div>
            </section><!--col-->
        </section><!--row-->
    </section><!--container-->
    <?php if( have_posts() ): ?>
        <section id="insights_loop">
            <section class="container">
                <?php while( have_posts() ): the_post(); ?>
                    <section class="row row-post align-items-center">
                        <section class="col-12 mb-3 mb-md-0 order-md-last col-md-6 col-lg-5 position-relative ms-md-auto">
                            <figure class="figure" style="padding-top: 86%;">
                                <img class="img-cover" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="" loading="lazy" />
                            </figure>
                        </section><!--col-->
                        <section class="col-md-6">
                            <h2 class="title"><?php the_title(); ?></h2>
                            <div class="text"><?php the_excerpt(); ?></div>
                            <a class="post-link" href="<?php the_permalink() ?>">Leggi di più</a>
                        </section><!--col-->
                    </section><!--row-->
                <?php endwhile; ?>
                <?php
                if( function_exists('pagination') ){
                    pagination();
                } ?>
            </section><!--container-->
        </section><!--loop-->
    <?php endif; ?>
</section><!--insights-->