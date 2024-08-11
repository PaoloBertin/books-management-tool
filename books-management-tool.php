<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              
 * @since             1.0.0
 * @package           BooksManagementTool
 *
 * @wordpress-plugin
 * Plugin Name:       Books Management Tool
 * Plugin URI:        
 * Description:       Gestione Biblioteca.
 * Version:           1.0.0
 * Author:            Paolo Bertin
 * Author URI:        
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       books-management-tool
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BOOKS_MANAGEMENT_TOOL_VERSION', '1.0.0' );
define( 'BOOKS_MANAGEMENT_TOOL_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define('BOOKS_MANAGEMENT_TOOL_PLUGIN_PATH', plugin_dir_path(__FILE__));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/BooksManagementToolActivator.php
 */
function activate_books_management_tool() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/BooksManagementToolActivator.php';
	$activator = new BooksManagementToolActivator();
	$activator->activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/BooksManagementToolDeactivator.php
 */
function deactivate_books_management_tool() {

	require_once plugin_dir_path( __FILE__ ) . 'includes/BooksManagementToolActivator.php';
	$activator = new BooksManagementToolActivator();

	require_once plugin_dir_path( __FILE__ ) . 'includes/BooksManagementToolDeactivator.php';
	$deactivator  = new BooksManagementToolDeactivator($activator);
	$deactivator->deactivate();
}

register_activation_hook( __FILE__, 'activate_books_management_tool' );
register_deactivation_hook( __FILE__, 'deactivate_books_management_tool' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-books-management-tool.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_books_management_tool() {

	$plugin = new BooksManagementTool();
	$plugin->run();

}
run_books_management_tool();
