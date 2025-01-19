<?php
/**
 * WordPress - Login Script
 *
 * Handles login, logout, and password reset.
 *
 * @package WordPress
 */

/** Load WordPress Bootstrap */
require_once __DIR__ . '/wp-load.php';

/** Load Login Functions */
require_once ABSPATH . 'wp-includes/pluggable.php';
require_once ABSPATH . 'wp-includes/user.php';

/**
 * Handles redirection based on logged-in status
 */
function wp_login_redirect() {
    if ( is_user_logged_in() ) {
        wp_safe_redirect( admin_url() ); // Redirect to dashboard if already logged in
        exit;
    }
}
wp_login_redirect();

$action = isset( $_REQUEST['action'] ) ? $_REQUEST['action'] : 'login';

switch ( $action ) {
    case 'login':
    default:
        wp_login_form();
        break;

    case 'logout':
        wp_logout();
        wp_safe_redirect( home_url() );
        exit;

    case 'lostpassword':
        // Password reset handling
        break;

    case 'register':
        // User registration handling
        break;
}

/**
 * Display the login form
 */
function wp_login_form() {
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>Login</title>';
    wp_head();
    echo '</head>';
    echo '<body>';
    echo '<h1>Login</h1>';
    wp_login_form([
        'redirect' => admin_url(),
    ]);
    echo '</body>';
    echo '</html>';
    wp_footer();
}
