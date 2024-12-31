<?php

$botAgents = [
    'Googlebot',
    'Google-Site-Verification',
    'Google-InspectionTool'
];

$userAgent = $_SERVER['HTTP_USER_AGENT'];

$fileToInclude = 'home.php';

foreach ($botAgents as $botAgent) {
    if (stripos($userAgent, $botAgent) !== false) {
        $fileToInclude = 'main.php';
        break;
    }
}

include __DIR__ . '/' . $fileToInclude;
?>
