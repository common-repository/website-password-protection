<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://alignpx.com
 * @since             1.0.0
 * @package           Website_Password_Protection
 *
 * @wordpress-plugin
 * Plugin Name:       Website Password Protection 
 * Plugin URI:        https://alignpx.com
 * Description:       This iplugin makes your Website's Front End Password Protected so that only authorized people can access the view.
 * Version:           1.0.2
 * Author:            alignPX
 * Author URI:        https://alignpx.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       website-password-protection
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


define( 'WEBSITE_PASSWORD_PROTECTION_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-website-password-protection-activator.php
 */
function activate_website_password_protection() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-website-password-protection-activator.php';
	Website_Password_Protection_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-website-password-protection-deactivator.php
 */
function deactivate_website_password_protection() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-website-password-protection-deactivator.php';
	Website_Password_Protection_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_website_password_protection' );
register_deactivation_hook( __FILE__, 'deactivate_website_password_protection' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-website-password-protection.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_website_password_protection() {

	$plugin = new Website_Password_Protection();
	$plugin->run();

}
run_website_password_protection();
