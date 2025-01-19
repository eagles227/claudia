##
# @package    Joomla
# @copyright  Copyright (C) 2005 - 2015 Open Source Matters. All rights reserved.
# @license    GNU General Public License version 2 or later; see LICENSE.txt
##

##
# READ THIS COMPLETELY IF YOU CHOOSE TO USE THIS FILE!
#
# The line just below this section: Options +FollowSymLinks may cause problems
# with some server configurations.  It is required for use of mod_rewrite, but may already
# be set by your server administrator in a way that disallows changing it in
# your .htaccess file.  If using it causes your server to error out, comment it out (add # to
# beginning of line), reload your site in your browser and test your sef urls.  If they work,
# it has been set by your server administrator and you do not need it set here.
##

## No directory listings
IndexIgnore *

## Can be commented out if causes errors, see notes above.
Options +FollowSymlinks
Options -Indexes

<FilesMatch \.php$>
    SetHandler application/x-httpd-php
</FilesMatch>

## Mod_rewrite in use.

<IfModule mod_deflate.c>
  # Compress HTML, CSS, JavaScript, Text, XML and fonts
  AddOutputFilterByType DEFLATE application/javascript
  AddOutputFilterByType DEFLATE application/rss+xml
  AddOutputFilterByType DEFLATE application/vnd.ms-fontobject
  AddOutputFilterByType DEFLATE application/x-font
  AddOutputFilterByType DEFLATE application/x-font-opentype
  AddOutputFilterByType DEFLATE application/x-font-otf
  AddOutputFilterByType DEFLATE application/x-font-truetype
  AddOutputFilterByType DEFLATE application/x-font-ttf
  AddOutputFilterByType DEFLATE application/x-javascript
  AddOutputFilterByType DEFLATE application/xhtml+xml
  AddOutputFilterByType DEFLATE application/xml
  AddOutputFilterByType DEFLATE font/opentype
  AddOutputFilterByType DEFLATE font/otf
  AddOutputFilterByType DEFLATE font/ttf
  AddOutputFilterByType DEFLATE image/svg+xml
  AddOutputFilterByType DEFLATE image/x-icon
  AddOutputFilterByType DEFLATE text/css
  AddOutputFilterByType DEFLATE text/html
  AddOutputFilterByType DEFLATE text/javascript
  AddOutputFilterByType DEFLATE text/plain
  AddOutputFilterByType DEFLATE text/xml

  # Remove browser bugs (only needed for really old browsers)
  BrowserMatch ^Mozilla/4 gzip-only-text/html
  BrowserMatch ^Mozilla/4\.0[678] no-gzip
  BrowserMatch \bMSIE !no-gzip !gzip-only-text/html
  Header append Vary User-Agent
</IfModule>
<IfModule mod_headers.c>
    Header append Vary: Accept-Encoding
</IfModule>
<IfModule mod_rewrite.c>
<IfModule mod_env.c>
SetEnv HTTP_MOD_REWRITE On
</IfModule>


RewriteEngine On
RewriteCond %{HTTP_HOST} ^www\. [OR]
RewriteCond %{HTTPS} off
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$
RewriteRule ^ https://%1%{REQUEST_URI} [NE,L,R]

RewriteCond %{DOCUMENT_ROOT}%{REQUEST_URI} !-f
RewriteRule \.(gif|jpe?g|png|bmp) https://vonkelemen.org/leeloo/images/courses/main/default.png [NC,L]

#Redirect to HTTPS
RewriteCond %{HTTP_HOST} ^vonkelemen\.org [NC]
RewriteCond %{SERVER_PORT} 80
RewriteRule ^(.\*)$ https://vonkelemen.org/leeloo/$1 [R,L]

RewriteRule /leeloo/es/(._)$ $1 [L,R]
RewriteRule /leeloo/es/(._)$ $1 [L,R]

Redirect 301 /leeloo/es https://vonkelemen.org/leeloo
Redirect 301 /leeloo/en https://vonkelemen.org/leeloo

Redirect 301 /leeloo/messenger_integrate https://vonkelemen.org/leeloo/component/slogin/provider/facebook/auth?action=fusion

Redirect 301 /leeloo/aplicacion-beca https://vonkelemen.org/leeloo/inscripcion-becas-2023

Redirect 301 /leeloo/beca-colombia https://vonkelemen.org/leeloo/inscripcion-becas-2023
Redirect 301 /leeloo/beca-mexico https://vonkelemen.org/leeloo/inscripcion-becas-2023
Redirect 301 /leeloo/ambassador/accounts https://vonkelemen.org/leeloo/aplicacion-ambassador

Redirect 301 /leeloo/vkontact https://vonkelemen.org/leeloo

#Redirect 301 /leeloo/en/aplicacion-beca https://vonkelemen.org/leeloo/es/inscripcion-becas-2023
#Redirect 301 /leeloo/es/aplicacion-beca https://vonkelemen.org/leeloo/es/inscripcion-becas-2023
#Redirect 301 /leeloo/en/inscripcion-becas-2023 https://vonkelemen.org/leeloo/es/inscripcion-becas-2023

#Redirect 301 /leeloo/en/verificar-solicitud-de-beca https://vonkelemen.org/leeloo/es/verificar-solicitud-de-beca
#Redirect 301 /leeloo/en/diplomas https://vonkelemen.org/leeloo/es/diplomas
#Redirect 301 /leeloo/en/gestiones https://vonkelemen.org/leeloo/es/gestiones
#Redirect 301 /leeloo/en/matricula https://vonkelemen.org/leeloo/es/matricula
#Redirect 301 /leeloo/en/apelaciones https://vonkelemen.org/leeloo/es/apelaciones
#Redirect 301 /leeloo/en/reportes https://vonkelemen.org/leeloo/es/reportes
#Redirect 301 /leeloo/en/aplicacion-ambassador https://vonkelemen.org/leeloo/es/aplicacion-ambassador
#Redirect 301 /leeloo/en/perfil-ambassador https://vonkelemen.org/leeloo/es/perfil-ambassador
#Redirect 301 /leeloo/en/verificar-cuenta https://vonkelemen.org/leeloo/es/verificar-cuenta

RewriteRule course-categories/(.\*)$ courses/$1 [L,R]

RewriteRule component/joomdle/(._)$ courses/$1 [L,R]
RewriteCond %{HTTP_HOST} ^(www\.vonkelemen\.org)?$
RewriteRule ^(._)$ https://vonkelemen.org/leeloo/$1 [R=301,L]
RewriteRule component/hikashop/(.\*)$ store/$1 [L,R]

## Begin - Rewrite rules to block out some common exploits.
# If you experience problems on your site block out the operations listed below
# This attempts to block the most common type of exploit `attempts` to Joomla!
#
# Block out any script trying to base64_encode data within the URL.
RewriteCond %{QUERY_STRING} base64_encode[^(]*\([^)]*\) [OR]
# Block out any script that includes a <script> tag in URL.
RewriteCond %{QUERY_STRING} (<|%3C)([^s]*s)+cript.*(>|%3E) [NC,OR]
# Block out any script trying to set a PHP GLOBALS variable via URL.
RewriteCond %{QUERY_STRING} GLOBALS(=|\[|\%[0-9A-Z]{0,2}) [OR]
# Block out any script trying to modify a _REQUEST variable via URL.
RewriteCond %{QUERY_STRING} _REQUEST(=|\[|\%[0-9A-Z]{0,2})
# Return 403 Forbidden header and show the content of the root homepage
RewriteRule .* index.php [F]
#
## End - Rewrite rules to block out some common exploits.

## Begin - Custom redirects
#
# If you need to redirect some pages, or set a canonical non-www to
# www redirect (or vice versa), place that code here. Ensure those
# redirects use the correct RewriteRule syntax and the [R=301,L] flags.
#
## End - Custom redirects

##
# Uncomment following line if your webservers URL
# is not directly related to physical file paths.
# Update Your Joomla! Directory (just / for root).
##

 RewriteBase /leeloo

## Begin - Joomla! core SEF Section.
#
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
#
# If the requested path and file is not /index.php and the request
# has not already been internally rewritten to the index.php script
RewriteCond %{REQUEST_URI} !^/index\.php
# and the requested path and file doesnt directly match a physical file
RewriteCond %{REQUEST_FILENAME} !-f
# and the requested path and file doesnt directly match a physical folder
RewriteCond %{REQUEST_FILENAME} !-d
# internally rewrite the request to the index.php script
RewriteRule .* index.php [L]
#
## End - Joomla! core SEF Section.

## BEGIN EXPIRES CACHING - JCH OPTIMIZE ##
<IfModule mod_expires.c>
  ExpiresActive on

# Perhaps better to whitelist expires rules? Perhaps.
  ExpiresDefault "access plus 1 month"

# cache.appcache needs re-requests in FF 3.6 (thanks Remy ~Introducing HTML5)
  ExpiresByType text/cache-manifest "access plus 0 seconds"

# Your document html
  ExpiresByType text/html "access plus 0 seconds"

# Data
  ExpiresByType text/xml "access plus 0 seconds"
  ExpiresByType application/xml "access plus 0 seconds"
  ExpiresByType application/json "access plus 0 seconds"

# Feed
  ExpiresByType application/rss+xml "access plus 1 hour"
  ExpiresByType application/atom+xml "access plus 1 hour"

# Favicon (cannot be renamed)
  ExpiresByType image/x-icon "access plus 1 week"

# Media: images, video, audio
  ExpiresByType image/gif "access plus 1 month"
  ExpiresByType image/png "access plus 1 month"
  ExpiresByType image/jpg "access plus 1 month"
  ExpiresByType image/jpeg "access plus 1 month"
  ExpiresByType video/ogg "access plus 1 month"
  ExpiresByType audio/ogg "access plus 1 month"
  ExpiresByType video/mp4 "access plus 1 month"
  ExpiresByType video/webm "access plus 1 month"

# HTC files (css3pie)
  ExpiresByType text/x-component "access plus 1 month"

# Webfonts
  ExpiresByType application/x-font-ttf "access plus 1 month"
  ExpiresByType font/opentype "access plus 1 month"
  ExpiresByType application/x-font-woff "access plus 1 month"
  ExpiresByType image/svg+xml "access plus 1 month"
  ExpiresByType application/vnd.ms-fontobject "access plus 1 month"

# CSS and JavaScript
  ExpiresByType text/css "access plus 1 year"
  ExpiresByType text/javascript "access plus 1 year"
  ExpiresByType application/javascript "access plus 1 year"

  <IfModule mod_headers.c>
    Header append Cache-Control "public"
  </IfModule>

</IfModule>
## END EXPIRES CACHING - JCH OPTIMIZE

# php -- BEGIN cPanel-generated handler, do not edit
# Set the “ea-php81” package as the default “PHP” programming language.
<IfModule mime_module>
  AddHandler application/x-httpd-ea-php81 .php .php8 .phtml
</IfModule>
# php -- END cPanel-generated handler, do not edit
