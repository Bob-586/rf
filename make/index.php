<?php

/**
 * Make a Static HTML file for web site
 */

const STOP_DDOS = false;

const HTML_FILENAME = "../index.html";

if ($STOP_DDOS || file_exists(HTML_FILENAME)) {
    exit;
}


if (extension_loaded('mbstring')) {
    ob_start('mb_output_handler');
} else {
    ob_start();
}

require_once '../index.php';

$contents = ob_get_clean();

$success = file_put_contents(HTML_FILENAME, $contents);

if ($success) {
    echo "Made " . HTML_FILENAME; 
} else {
    echo "Failed to made static page.";
}