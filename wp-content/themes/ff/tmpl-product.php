<?php
/*
 * Template Name: Product
 */

get_header(); ?>

<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row();
        $title    = get_sub_field('titolo');
        $text     = get_sub_field('testo');
        $link     = get_sub_field('link');
        $image    = get_sub_field('immagine');
        $image_bg = get_sub_field('immagine_bg'); ?>
        <section id="product_hero">
            <?php if( !empty($image_bg) ): ?>
                <figure class="figure-bg d-none d-md-block">
                    <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>" loading="lazy" />
                </figure>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 col-lg-5 mx-lg-auto align-self-center z-1 my-5">
                        <h1 class="title wow fadeIn"><?php echo wp_kses_post($title); ?></h1>
                        <div class="text wow fadeIn"><?php echo wp_kses_post($text); ?></div>
                        <?php if( $link ):
                            $link_url    = $link['url'];
                            $link_title  = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <a class="btn btn-outline-light mt-5 wow fadeIn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
                        <?php endif; ?>
                    </div><!--col-->
                </div><!--row-->
            </div><!--container-->
            <?php if( !empty($image) ): ?>
                <div class="figure-content-wrapper">
                    <figure class="figure figure-content">
                        <img class="img-cover" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                    </figure>
                </div>
            <?php endif; ?>
        </section><!--hero-->
    <?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('sezione_1') ): ?>
    <?php while( have_rows('sezione_1') ): the_row();
        $title    = get_sub_field('titolo');
        $text     = get_sub_field('testo');
        $link     = get_sub_field('link');
        $image    = get_sub_field('immagine');
        $image_bg = get_sub_field('immagine_bg'); ?>
        <section class="section" id="product_1">
            <?php if( !empty($image_bg) ): ?>
                <figure class="figure figure-bg">
                    <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>" loading="lazy" />
                </figure>
            <?php endif; ?>
            <div class="container">
                <div class="row align-items-center gy-5">
                    <div class="col-md-6 col-lg-5 mx-auto">
                        <h2 class="title wow fadeIn"><?php echo wp_kses_post($title); ?></h2>
                        <div class="text wow fadeIn"><?php echo wp_kses_post($text); ?></div>
                        <?php if( have_rows('info_repeater') ): ?>
                            <ul class="info-table wow fadeIn">
                                <?php while( have_rows('info_repeater') ): the_row();
                                    $icon  = get_sub_field('icona');
                                    $label = get_sub_field('testo'); ?>
                                    <li>
                                        <?php if( !empty($icon) ): ?>
                                            <figure class="figure">
                                                <img class="img-contain" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy" />
                                            </figure>
                                        <?php endif; ?>
                                        <span><?php echo wp_kses_post($label); ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if( !empty($link) ):
                            $link_url    = $link['url'];
                            $link_title  = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <a class="btn btn-primary wow fadeIn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
                        <?php endif; ?>
                    </div><!--col-->
                    <?php if( !empty($image) && !empty($image['width']) ): ?>
                        <div class="col-md-6">
                            <div class="figure-wrapper mx-auto wow fadeIn" style="max-width: <?php echo absint($image['width']); ?>px;">
                                <figure class="figure" style="padding-top: <?php echo esc_attr(round($image['height'] / $image['width'] * 100, 4)); ?>%;">
                                    <img class="img-contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                                </figure>
                            </div>
                        </div><!--col-->
                    <?php endif; ?>
                </div><!--row-->
            </div><!--container-->
        </section><!--section-->
    <?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('sezione_2') ): ?>
    <?php while( have_rows('sezione_2') ): the_row();
        $title    = get_sub_field('titolo');
        $text     = get_sub_field('testo');
        $link     = get_sub_field('link');
        $image    = get_sub_field('immagine');
        $image_bg = get_sub_field('immagine_bg'); ?>
        <section class="section section-dark" id="product_2">
            <?php if( !empty($image_bg) ): ?>
                <figure class="figure figure-bg">
                    <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>" loading="lazy" />
                </figure>
            <?php endif; ?>
            <div class="container">
                <div class="row align-items-center gy-5">
                    <div class="col-md-6 col-lg-5 mx-auto order-md-last">
                        <h2 class="title wow fadeIn"><?php echo wp_kses_post($title); ?></h2>
                        <div class="text wow fadeIn"><?php echo wp_kses_post($text); ?></div>
                        <?php if( have_rows('info_repeater') ): ?>
                            <ul class="info-table wow fadeIn">
                                <?php while( have_rows('info_repeater') ): the_row();
                                    $icon  = get_sub_field('icona');
                                    $label = get_sub_field('testo'); ?>
                                    <li>
                                        <?php if( !empty($icon) ): ?>
                                            <figure class="figure">
                                                <img class="img-contain" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy" />
                                            </figure>
                                        <?php endif; ?>
                                        <span><?php echo wp_kses_post($label); ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if( !empty($link) ):
                            $link_url    = $link['url'];
                            $link_title  = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <a class="btn btn-primary wow fadeIn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
                        <?php endif; ?>
                    </div><!--col-->
                    <?php if( !empty($image) && !empty($image['width']) ): ?>
                        <div class="col-md-6">
                            <div class="figure-wrapper mx-auto wow fadeIn" style="max-width: <?php echo absint($image['width']); ?>px;">
                                <figure class="figure" style="padding-top: <?php echo esc_attr(round($image['height'] / $image['width'] * 100, 4)); ?>%;">
                                    <img class="img-contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                                </figure>
                            </div>
                        </div><!--col-->
                    <?php endif; ?>
                </div><!--row-->
            </div><!--container-->
        </section><!--section-->
    <?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('sezione_3') ): ?>
    <?php while( have_rows('sezione_3') ): the_row();
        $title    = get_sub_field('titolo');
        $text     = get_sub_field('testo');
        $link     = get_sub_field('link');
        $image    = get_sub_field('immagine');
        $image_bg = get_sub_field('immagine_bg'); ?>
        <section class="section" id="product_3">
            <?php if( !empty($image_bg) ): ?>
                <figure class="figure figure-bg">
                    <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>" loading="lazy" />
                </figure>
            <?php endif; ?>
            <div class="container">
                <div class="row align-items-center gy-5">
                    <div class="col-md-6 col-lg-5 mx-auto">
                        <h2 class="title wow fadeIn"><?php echo wp_kses_post($title); ?></h2>
                        <div class="text wow fadeIn"><?php echo wp_kses_post($text); ?></div>
                        <?php if( have_rows('info_repeater') ): ?>
                            <ul class="info-table wow fadeIn">
                                <?php while( have_rows('info_repeater') ): the_row();
                                    $icon  = get_sub_field('icona');
                                    $label = get_sub_field('testo'); ?>
                                    <li>
                                        <?php if( !empty($icon) ): ?>
                                            <figure class="figure">
                                                <img class="img-contain" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy" />
                                            </figure>
                                        <?php endif; ?>
                                        <span><?php echo wp_kses_post($label); ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if( !empty($link) ):
                            $link_url    = $link['url'];
                            $link_title  = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <a class="btn btn-primary wow fadeIn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
                        <?php endif; ?>
                    </div><!--col-->
                    <?php if( !empty($image) && !empty($image['width']) ): ?>
                        <div class="col-md-6">
                            <div class="figure-wrapper mx-auto wow fadeIn" style="max-width: <?php echo absint($image['width']); ?>px;">
                                <figure class="figure" style="padding-top: <?php echo esc_attr(round($image['height'] / $image['width'] * 100, 4)); ?>%;">
                                    <img class="img-contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                                </figure>
                            </div>
                        </div><!--col-->
                    <?php endif; ?>
                </div><!--row-->
            </div><!--container-->
        </section><!--section-->
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
