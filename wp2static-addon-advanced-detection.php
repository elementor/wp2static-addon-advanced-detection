<?php

/**
 * Plugin Name:       WP2Static Add-on: Advanced Detection
 * Plugin URI:        https://wp2static.com
 * Description:       Advanced URL detection add-on for WP2Static.
 * Version:           0.1
 * Author:            Leon Stafford
 * Author URI:        https://ljs.dev
 * License:           Unlicense
 * License URI:       http://unlicense.org
 * Text Domain:       wp2static-addon-advanced-detection
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '0.1' );

require WP2STATIC_ZIP_PATH . 'vendor/autoload.php';

function run_wp2static_addon_advanced_detection() {
	$controller = new WP2StaticAdvancedDetection\Controller();
	$controller->run();
}

register_activation_hook(
    __FILE__,
    [ 'WP2StaticAdvancedDetection\Controller', 'activate' ]
);

register_deactivation_hook(
    __FILE__,
    [ 'WP2StaticAdvancedDetection\Controller', 'deactivate' ]
);

run_wp2static_addon_advanced_detection();

