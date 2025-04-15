<?php

function is_suspicious($content) {
    $patterns = [
        '/eval\s*\(/i',
        '/base64_decode\s*\(/i',
        '/gzinflate\s*\(/i',
        '/shell_exec\s*\(/i',
        '/system\s*\(/i',
        '/exec\s*\(/i',
        '/passthru\s*\(/i',
        '/`.*?`/', // backtick execution
    ];
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $content)) {
            return true;
        }
    }
    return false;
}

function scan_dir($dir) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $suspicious_files = [];

    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        $filepath = $file->getPathname();
        $ext = pathinfo($filepath, PATHINFO_EXTENSION);

        if (in_array($ext, ['php', 'txt', 'phtml'])) {
            $content = @file_get_contents($filepath);
            if ($content && is_suspicious($content)) {
                $suspicious_files[] = $filepath;
            }
        }
    }

    return $suspicious_files;
}

echo "<h2>🔍 Scan File Mencurigakan</h2>";
$found = scan_dir(__DIR__);

if (empty($found)) {
    echo "<p style='color: green;'>Tidak ada file mencurigakan ditemukan ✅</p>";
} else {
    echo "<p style='color: red;'>Ditemukan file mencurigakan:</p><ul>";
    foreach ($found as $file) {
        echo "<li><code>" . htmlspecialchars($file) . "</code></li>";
    }
    echo "</ul>";
}
?>
