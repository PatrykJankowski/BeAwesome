<?php

$includes = [
    'inc/cleanup.php',
    'inc/theme-and-seo.php',
    'inc/dashboard.php',
    'inc/shortcodes.php'
];

foreach ($includes as $file) {
    require_once get_template_directory() . '/' . $file;
}