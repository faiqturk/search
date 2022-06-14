<?php
/**
 * Main Loader.
 *
 * @package plugin-customization
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'plugin_Loader' ) ) {

	/**
	 * Class FIRST_Loader.
	 */
	class plugin_Loader {

		/**
		 *  Constructor.
		 */
		public function __construct() {
			$this->includes();
			// add_action( 'admin_enqueue_scripts', array( $this, 'FIRST_enqueue_scripts' ) );
		}

		/**
		 * Include Files depend on platform.
		 */
		public function includes() {
			include_once 'class-plugin-custom-post-type.php';
			include_once 'class-plugin-meta-box.php';
			include_once 'class-plugin-shortcode.php';
		}
	}
}

new plugin_Loader();