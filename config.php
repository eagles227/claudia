# BEGIN WordPress
# The directives (lines) between "BEGIN WordPress" and "END WordPress" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# END WordPress

AddHandler application/x-httpd-php55  .php55 .php

	# WP Increse Maximum Execution Time
	<IfModule mod_php5.c>
		php_value max_execution_time 300
	</IfModule>

# php -- BEGIN cPanel-generated handler, do not edit
# Set the “alt-php81” package as the default “PHP” programming language.
<IfModule mime_module>
  AddHandler application/x-httpd-alt-php81 .php .php8 .phtml
</IfModule>
# php -- END cPanel-generated handler, do not edit
