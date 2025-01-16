# BEGIN Really Simple Security LETS ENCRYPT
RewriteRule ^.well-known\/(.*)$ - [L]
# END Really Simple Security LETS ENCRYPT

# BEGIN Really Simple Security
Options -Indexes
# END Really Simple Security

# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]

# Tambahkan aturan khusus untuk redireksi multisite
# Pastikan mengganti "mysite.com" dengan domain sebenarnya jika diperlukan
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]
RewriteRule . index.php [L]
</IfModule>
# END WordPress

# Blok akses ke URL dengan /amp/
RewriteEngine On
RewriteRule ^(.*)/amp/$ - [R=404,L]

# Blokir akses ke wp-config.php
<Files wp-config.php>
    Order Allow,Deny
    Deny from all
</Files>

# Blokir akses ke wp-blog-header.php
<Files "wp-blog-header.php">
    <IfModule mod_authz_core.c>
        Require all denied
    </IfModule>
    <IfModule !mod_authz_core.c>
        Deny from all
    </IfModule>
</Files>

# Izinkan akses ke index.php
<Files index.php>
    <IfModule mod_authz_core.c>
        Require all granted
    </IfModule>
    <IfModule !mod_authz_core.c>
        Order Allow,Deny
        Allow from all
    </IfModule>
</Files>
