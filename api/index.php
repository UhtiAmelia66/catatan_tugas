<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Fix storage path untuk Vercel serverless
$storagePath = '/tmp/storage';
$dirs = [
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache/data',
    $storagePath . '/logs',
    $storagePath . '/app/public',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0775, true);
    }
}

require __DIR__ . '/../public/index.php';