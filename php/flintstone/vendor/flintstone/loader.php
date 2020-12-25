<?php

$flintstone_files = [
    'Database.php',
    'Exception.php',
    'Flintstone.php',
    'Line.php',
    'Validation.php',
    'Config.php',
    'Cache/CacheInterface.php',
    'Cache/ArrayCache.php',
    'Formatter/FormatterInterface.php',
    'Formatter/JsonFormatter.php',
    'Formatter/SerializeFormatter.php',
];

$flintstone_dir = __DIR__ . '/';

foreach($flintstone_files as $flintstone_file) {
    require_once $flintstone_dir . $flintstone_file;
}