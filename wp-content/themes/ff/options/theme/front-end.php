<?php

/**
 * Truncate text
 */
// function theme_truncate( $string, $length = 60, $append = '&hellip;' ) {
//     $string = trim( $string );

//     if ( strlen( $string ) > $length ) {
//         $string = wordwrap( $string, $length );
//         $string = explode( "\n", $string, 2 );
//         $string = $string[0] . $append;
//     }

//     return $string;
// }


/**
 * Remove admin bar
 */
add_filter( 'show_admin_bar', '__return_false' );


/**
 * Remove Yoast searchbox
 */
//add_filter( 'disable_wpseo_json_ld_search', '__return_true' );


/**
 * Edit query pre_get_posts
 */
// function theme_modify_query( $query ) {
//     if ( ! is_admin() && $query->is_main_query() && is_post_type_archive('___CPT___') ) {
//         $query->set( 'posts_per_page', '12' );
//     }
// }
// add_action('pre_get_posts', 'theme_modify_query');


/**
 * Custom pagination
 */
function pagination( $pages = '', $range = 4 ) {
    $showitems = ( $range * 2 ) + 1;

    global $paged;
    if ( empty( $paged ) ) $paged = 1;

    if( $pages == '' ) {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if( !$pages ) {
            $pages = 1;
        }
    }

    if( 1 != $pages ) {
        echo '<section id="pagination"><section class="row align-items-center">';
        echo '<section class="col-auto d-none d-md-block"><span>Pagina '.$paged.' di '.$pages.'</span></section>';
        echo '<section class="col-auto mx-auto me-md-0"><nav><ul>';
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<li><a href="'.get_pagenum_link(1).'">&laquo;</a></li>';
        if($paged > 1 && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($paged - 1).'">&lsaquo;</a></li>';

        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                echo ($paged == $i)? '<li><a href="javascript:void(0);" class="current">'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive">'.$i.'</a></li>';
            }
        }

        if ($paged < $pages && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($paged + 1).'">&rsaquo;</a></li>';
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($pages).'">&raquo;</a></li>';
        echo '</ul></nav></section></section></section>';
    }
}

