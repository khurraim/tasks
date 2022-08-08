<?php
/**
 * @wordpress-plugin
 * Plugin Name:  Zohaib Bhai Tasks
 * Text Domain:  zbt
 */

if(!defined('ABSPATH'))
{
    exit;
}

require plugin_dir_path(__FILE__).'tasks/task3.php';

// Project Post Type and Taxonomy
require plugin_dir_path(__FILE__).'tasks/task4.php';

// Project Archive Page, 6 per page and pagination
require plugin_dir_path(__FILE__).'tasks/task5.php';

// REST API Custom Endpoints
require plugin_dir_path(__FILE__).'tasks/task6.php';

// Show 5 Quotes
require plugin_dir_path(__FILE__).'tasks/task7.php';

function register_css()
{
	wp_enqueue_style('archive_styling', plugin_dir_url(__FILE__)."css/style.css", true);
    wp_enqueue_script('quotes_api', plugin_dir_url( __FILE__ ). "js/index.js", );

}

add_action('init', 'register_css');
    