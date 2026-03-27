<?php get_header(); ?>

<section id="page">
    <section class="container">
        <section class="row">
            <section class="col">
                <h1 class="title">404</h1>
                <div class="text"><p><?php printf( __('We’re sorry!<br><br>The page you are looking for was not found...<br>To continue browsing our website, <a href="%s">click here.</a>', 'nw'), esc_url( home_url( '/' ) ) ); ?></p></div>
            </section><!--col-->
        </section><!--row-->
    </section><!--container-->
</section><!--page-->

<?php get_footer(); ?>