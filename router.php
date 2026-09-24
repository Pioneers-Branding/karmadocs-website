<?php
/**
 * Router script for PHP built-in development server
 */
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

if ($path !== '/' && is_file($file)) {
    return false; // serve as static asset or existing file
}

if ($path !== '/' && is_file($file . '.php')) {
    require $file . '.php';
    return true;
}

if ($path === '/' || $path === '') {
    require __DIR__ . '/index.php';
    return true;
}

return false;
