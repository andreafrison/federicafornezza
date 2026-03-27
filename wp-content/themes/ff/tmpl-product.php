<?php
/*
 * Template Name: Product
 */

get_header(); ?>

<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row(); 
        $title = get_sub_field('titolo');
        $text = get_sub_field('testo');
        $link = get_sub_field('link');
        $image = get_sub_field('immagine');
        $image_bg = get_sub_field('immagine_bg'); ?>
        <section id="product_hero">
            <figure class="figure-bg d-none d-md-block">
                <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>"  loading="lazy" />
            </figure>
            <section class="container">
                <section class="row">
                    <section class="col-md-6"></section>
                    <section class="col-md-6 col-lg-5 mx-lg-auto align-self-center z-1 my-5">
                        <h1 class="title wow fadeIn"><?php echo $title; ?></h1>
                        <div class="text wow fadeIn"><?php echo $text; ?></div>
                        <?php 
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <a class="btn btn-outline-light mt-5 wow fadeIn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                        <?php endif; ?>
                    </section><!--col-->
                </section><!--row-->
            </section><!--container-->
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
        $title = get_sub_field('titolo');
        $text = get_sub_field('testo');
        $link = get_sub_field('link');
        $image = get_sub_field('immagine');
        $image_bg = get_sub_field('immagine_bg'); ?>
        <section class="section" id="product_1">
            <figure class="figure figure-bg">
                <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>" />
            </figure>
            <section class="container">
                <section class="row align-items-center gy-5">
                    <section class="col-md-6 col-lg-5 mx-auto">
                        <h1 class="title wow fadeIn"><?php echo $title; ?></h1>
                        <div class="text wow fadeIn"><?php echo $text; ?></div>
                        <?php if( have_rows('info_repeater') ): ?>
                            <ul class="info-table wow fadeIn">
                                <?php while( have_rows('info_repeater') ): the_row(); 
                                    $icon = get_sub_field('icona');
                                    $label = get_sub_field('testo'); ?>
                                    <li>
                                        <?php if( !empty( $icon ) ): ?>
                                            <figure class="figure">
                                                <img class="img-contain" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy" />
                                            </figure>
                                        <?php endif; ?>
                                        <span><?php echo $label; ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php 
                        if( !empty($link) ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <a class="btn btn-primary wow fadeIn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                        <?php endif; ?>
                    </section><!--col-->
                    <section class="col-md-6">
                        <div class="figure-wrapper mx-auto wow fadeIn" style="max-width: <?php echo $image['width']; ?>px;">
                            <figure class="figure" style="padding-top: <?php echo $image['height']/$image['width']*100; ?>%;">
                                <img class="img-contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                            </figure>
                        </div>
                    </section><!--col-->
                </section><!--row-->
            </section><!--container-->
        </section><!--section-->
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('sezione_2') ): ?>
    <?php while( have_rows('sezione_2') ): the_row(); 
        $title = get_sub_field('titolo');
        $text = get_sub_field('testo');
        $link = get_sub_field('link');
        $image = get_sub_field('immagine');
        $image_bg = get_sub_field('immagine_bg'); ?>
        <section class="section section-dark" id="product_2">
            <figure class="figure figure-bg">
                <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>" />
            </figure>
            <section class="container">
                <section class="row align-items-center gy-5">
                    <section class="col-md-6 col-lg-5 mx-auto order-md-last">
                        <h1 class="title wow fadeIn"><?php echo $title; ?></h1>
                        <div class="text wow fadeIn"><?php echo $text; ?></div>
                        <?php if( have_rows('info_repeater') ): ?>
                            <ul class="info-table wow fadeIn">
                                <?php while( have_rows('info_repeater') ): the_row(); 
                                    $icon = get_sub_field('icona');
                                    $label = get_sub_field('testo'); ?>
                                    <li>
                                        <?php if( !empty( $icon ) ): ?>
                                            <figure class="figure">
                                                <img class="img-contain" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy" />
                                            </figure>
                                        <?php endif; ?>
                                        <span><?php echo $label; ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php 
                        if( !empty($link) ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <a class="btn btn-primary wow fadeIn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                        <?php endif; ?>
                    </section><!--col-->
                    <section class="col-md-6">
                        <div class="figure-wrapper mx-auto wow fadeIn" style="max-width: <?php echo $image['width']; ?>px;">
                            <figure class="figure" style="padding-top: <?php echo $image['height']/$image['width']*100; ?>%;">
                                <img class="img-contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                            </figure>
                        </div>
                    </section><!--col-->
                </section><!--row-->
            </section><!--container-->
        </section><!--section-->
    <?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('sezione_3') ): ?>
    <?php while( have_rows('sezione_3') ): the_row(); 
        $title = get_sub_field('titolo');
        $text = get_sub_field('testo');
        $link = get_sub_field('link');
        $image = get_sub_field('immagine');
        $image_bg = get_sub_field('immagine_bg'); ?>
        <section class="section" id="product_3">
            <figure class="figure figure-bg">
                <img class="img-cover" src="<?php echo esc_url($image_bg['url']); ?>" alt="<?php echo esc_attr($image_bg['alt']); ?>" />
            </figure>
            <section class="container">
                <section class="row align-items-center gy-5">
                    <section class="col-md-6 col-lg-5 mx-auto">
                        <h1 class="title wow fadeIn"><?php echo $title; ?></h1>
                        <div class="text wow fadeIn"><?php echo $text; ?></div>
                        <?php if( have_rows('info_repeater') ): ?>
                            <ul class="info-table wow fadeIn">
                                <?php while( have_rows('info_repeater') ): the_row(); 
                                    $icon = get_sub_field('icona');
                                    $label = get_sub_field('testo'); ?>
                                    <li>
                                        <?php if( !empty( $icon ) ): ?>
                                            <figure class="figure">
                                                <img class="img-contain" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy" />
                                            </figure>
                                        <?php endif; ?>
                                        <span><?php echo $label; ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php 
                        if( !empty($link) ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <a class="btn btn-primary wow fadeIn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                        <?php endif; ?>
                    </section><!--col-->
                    <section class="col-md-6">
                        <div class="figure-wrapper mx-auto wow fadeIn" style="max-width: <?php echo $image['width']; ?>px;">
                            <figure class="figure" style="padding-top: <?php echo $image['height']/$image['width']*100; ?>%;">
                                <img class="img-contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                            </figure>
                        </div>
                    </section><!--col-->
                </section><!--row-->
            </section><!--container-->
        </section><!--section-->
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>