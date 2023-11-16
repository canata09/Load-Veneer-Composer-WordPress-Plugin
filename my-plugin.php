<?php
/**
 * Plugin Name: My Plugin
 * Description: This is my plugin.
 * Version: 1.0
 * Author: Your Name
 */

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

function my_plugin_function() {
    $client = new Client();
    // Use the Guzzle client...
}

add_action('init', 'my_plugin_function');