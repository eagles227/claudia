# BEGIN Really Simple Security LETS ENCRYPT
RewriteRule ^.well-known/(.*)$ - [L]
# END Really Simple Security LETS ENCRYPT

RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /

# Add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

# Prevent direct access to files and directories
RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]

# Allow wp-content, wp-admin, and wp-includes to be accessed
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]

# Allow PHP files under the wp-admin directory
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]

# Fallback to index.php
RewriteRule . index.php [L]

<IfModule mod_qos.c>
# Set a limit of 100 requests per second
QS_LimitRequestBody 102400
QS_SrvMaxConnPerIP 16
</IfModule>

<IfModule mod_expires.c>
ExpiresActive On
ExpiresDefault "access plus 1 year"
ExpiresByType image/gif "access plus 1 month"
ExpiresByType image/png "access plus 1 month"
ExpiresByType image/jpeg "access plus 1 month"
ExpiresByType text/css "access plus 1 week"
ExpiresByType text/javascript "access plus 1 week"
ExpiresByType application/javascript "access plus 1 week"
ExpiresByType application/x-javascript "access plus 1 week"
</IfModule>
