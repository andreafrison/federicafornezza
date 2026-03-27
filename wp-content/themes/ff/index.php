<?php get_header(); ?>

<section id="page">
    <section class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section class="row">
                    <section class="col">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <div class="text"><?php the_content(); ?></div>
                    </section><!--col-->
                </section><!--row-->
            <?php endwhile; ?>
        <?php endif; ?>
    </section><!--container-->
</section><!--page-->

<?php get_footer(); ?>