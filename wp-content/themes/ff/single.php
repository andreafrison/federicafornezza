<?php get_header(); ?>

<section id="single_insight">
    <?php
    $image_bg = get_field('immagine', get_option( 'page_for_posts' ));
    if( !empty($image_bg) ): ?>
        <figure class="figure-bg">
            <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>"  loading="lazy" />
        </figure>
    <?php endif; ?>
    <section class="container">
        <h1 class="title"><?php the_title(); ?></h1>
        <section class="row gy-5">
            <section class="col-md-6">
                <div class="content">
                    <div class="text"><?php the_content(); ?></div>
                    <?php 
                    $link = get_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                        <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                    <?php endif; ?>
                </div>
            </section><!--col-->
            <section class="col-md-6 col-lg-5 ms-auto">
                <?php 
                $images = get_field('gallery');
                if( $images ): ?>
                    <ul class="gallery-list">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a class="gallery-link" href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery">
                                    <figure class="figure" style="padding-top: <?php echo $image['height']/$image['width']*100; ?>%;">
                                        <img class="img-cover lazy" data-src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </figure>
                                </a>
                                <p><?php echo esc_html($image['caption']); ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </section><!--col-->
        </section><!--row-->
    </section><!--container-->
</section><!--page-->

<?php get_footer(); ?>