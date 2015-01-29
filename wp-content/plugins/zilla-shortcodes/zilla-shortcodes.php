<?php
/**
 * Plugin Name: ZillaShortcodes
 * Plugin URI: http://www.themezilla.com/plugins/zillashortcodes
 * Description: A simple shortcode generator. Add buttons, columns, tabs, toggles and alerts to your theme.
 * Version: 2.0.2
 * Author: ThemeZilla
 * Author URI: http://www.themezilla.com
 */

class ZillaShortcodes {

    function __construct()
    {
    	define( 'TZSC_VERSION', '2.0' );

    	// Plugin folder path
    	if ( ! defined( 'TZSC_PLUGIN_DIR' ) ) {
    		define( 'TZSC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
    	}

    	// Plugin folder URL
    	if ( ! defined( 'TZSC_PLUGIN_URL' ) ) {
    		define( 'TZSC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
    	}

    	require_once( TZSC_PLUGIN_DIR .'includes/shortcodes.php' );

        add_action( 'init', array(&$this, 'init') );
        add_action( 'admin_init', array(&$this, 'admin_init') );
	}

	/**
	 * Enqueue front end scripts and styles
	 *
	 * @return	void
	 */
	function init()
	{
		if( ! is_admin() )
		{
			wp_enqueue_style( 'zilla-shortcodes', TZSC_PLUGIN_URL . 'assets/css/shortcodes.css' );
			wp_enqueue_script( 'zilla-shortcodes-lib', TZSC_PLUGIN_URL . 'assets/js/zilla-shortcodes-lib.js', array('jquery', 'jquery-ui-accordion', 'jquery-ui-tabs') );
		}
	}

	/**
	 * Enqueue Scripts and Styles
	 *
	 * @return	void
	 */
	function admin_init()
	{
		include_once( TZSC_PLUGIN_DIR . 'includes/class-tzsc-admin-insert.php' );

		// css
		wp_enqueue_style( 'zilla-popup', TZSC_PLUGIN_URL . 'assets/css/admin.css', false, '1.0', 'all' );

		// js
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_localize_script( 'jquery', 'ZillaShortcodes', array('plugin_folder' => WP_PLUGIN_URL .'/zilla-shortcodes') );
	}
}
new ZillaShortcodes();

?>