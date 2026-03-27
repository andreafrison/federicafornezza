<?php
/*
 * Template Name: Contacts
 */

get_header(); ?>

<?php
$title = get_field('titolo');
$text = get_field('testo');
$image = get_field('immagine'); ?>
<section id="page_contacts">
    <figure class="figure-bg">
        <img class="img-cover" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  loading="lazy" />
    </figure>
    <section class="container">
        <section class="row">
            <section class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                <h1 class="title title-lg wow fadeIn text-center"><?php echo $title; ?></h1>
                <div class="text wow fadeIn text-center"><?php echo $text; ?></div>
                <div class="form"><?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" theme="orbital"]'); ?></div>
            </section><!--col-->
        </section><!--row-->
    </section><!--container-->
</section><!--page-->

<?php get_footer(); ?>