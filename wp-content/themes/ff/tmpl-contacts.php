<?php
/*
 * Template Name: Contacts
 */

get_header(); ?>

<?php
$title = get_field('titolo');
$text  = get_field('testo');
$image = get_field('immagine'); ?>
<section id="page_contacts">
    <?php if( !empty($image) ): ?>
        <figure class="figure-bg">
            <img class="img-cover" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
        </figure>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                <h1 class="title title-lg wow fadeIn text-center"><?php echo wp_kses_post($title); ?></h1>
                <div class="text wow fadeIn text-center"><?php echo wp_kses_post($text); ?></div>
                <div class="form"><?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" theme="orbital"]'); ?></div>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</section><!--page-->

<?php get_footer(); ?>
