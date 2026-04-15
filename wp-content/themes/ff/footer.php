    <?php if( !is_page_template('tmpl-contacts.php') && have_rows('footer_cta', 'option') ): ?>
        <?php while( have_rows('footer_cta', 'option') ): the_row();
            $title    = get_sub_field('titolo');
            $text     = get_sub_field('testo');
            $link     = get_sub_field('link');
            $image    = get_sub_field('immagine');
            $image_bg = get_sub_field('immagine_bg'); ?>
            <section id="footer_cta" class="section section-dark">
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
                            <?php if( $link ):
                                $link_url    = $link['url'];
                                $link_title  = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                <a class="btn btn-outline-light wow fadeIn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
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
            </section><!--footer_cta-->
        <?php endwhile; ?>
    <?php endif; ?>

    <footer id="footer">
        <div class="container-fluid">
            <div class="row gy-5">
                <div class="col">
                    <a id="footer_brand" href="<?php echo esc_url(get_home_url()); ?>" aria-label="<?php bloginfo('name'); ?>"><?php get_template_part('inc/brand'); ?></a>
                    <div class="footer-text mt-4"><?php the_field('footer_text', 'option'); ?><br><br><a href="<?php echo esc_url(get_permalink(3)); ?>">Privacy Policy</a> &middot; <a href="<?php echo esc_url(get_permalink(9)); ?>">Cookie Policy</a></div>
                </div><!--col-->
                <div class="col-md-6 text-md-end">
                    <?php
                    $link = get_field('amazon', 'option');
                    if( $link ):
                        $link_url    = $link['url'];
                        $link_title  = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_blank'; ?>
                        <a class="btn btn-amazon" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 64 64"><path fill="#F90" d="M55.425 52.67C29.518 65 13.44 54.684 3.148 48.42c-.637-.395-1.72.092-.78 1.17C5.796 53.748 17.033 63.77 31.7 63.77c14.678 0 23.41-8.01 24.502-9.407 1.085-1.385.319-2.15-.778-1.692Zm7.276-4.018c-.696-.906-4.23-1.075-6.455-.801-2.228.265-5.572 1.627-5.281 2.444.15.306.454.17 1.984.032 1.535-.154 5.834-.696 6.73.475.9 1.18-1.371 6.797-1.786 7.703-.4.905.153 1.139.906.536.742-.603 2.087-2.165 2.989-4.376.896-2.223 1.442-5.323.913-6.013Z"/><path fill="#000" fill-rule="evenodd" d="M38.006 27.512c0 3.235.081 5.933-1.554 8.806-1.32 2.336-3.41 3.772-5.746 3.772-3.189 0-5.046-2.429-5.046-6.014 0-7.078 6.342-8.363 12.346-8.363v1.799Zm8.373 20.24c-.548.49-1.343.526-1.962.199-2.756-2.29-3.247-3.352-4.765-5.536-4.555 4.648-7.778 6.038-13.688 6.038-6.984 0-12.427-4.31-12.427-12.94 0-6.74 3.656-11.33 8.853-13.572 4.508-1.986 10.804-2.336 15.616-2.885v-1.074c0-1.974.151-4.31-1.005-6.015-1.016-1.53-2.955-2.16-4.66-2.16-3.165 0-5.991 1.623-6.68 4.986-.14.748-.69 1.484-1.437 1.519l-8.059-.865c-.677-.152-1.424-.7-1.238-1.74C16.784 3.943 25.602 1 33.497 1c4.041 0 9.32 1.075 12.509 4.135 4.04 3.772 3.655 8.806 3.655 14.283v12.94c0 3.89 1.612 5.595 3.13 7.698.537.747.654 1.647-.023 2.207-1.694 1.413-4.707 4.04-6.365 5.513l-.024-.024" clip-rule="evenodd"/></svg><span><?php echo esc_html($link_title); ?></span></a>
                        <br>
                    <?php endif; ?>
                    <?php if( have_rows('socials', 'option') ): ?>
                        <ul class="socials mt-4">
                            <?php while( have_rows('socials', 'option') ): the_row();
                                $link = get_sub_field('social');
                                if( $link ):
                                    $link_url    = $link['url'];
                                    $link_title  = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_blank'; ?>
                                    <li>
                                        <a class="social-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" aria-label="<?php echo esc_html($link_title); ?>"></a>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div><!--col-->
            </div><!--row-->
        </div><!--container-->
    </footer>

    <?php wp_footer(); ?>

    <!-- ================================================== -->
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/common/js/core.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/common/js/custom.js"></script>
    <script type="text/javascript">
        jQuery(window).on("load", function() {
            // START
            start();
        });
    </script>
</body>

</html>
