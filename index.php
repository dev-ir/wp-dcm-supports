<?php
/**
 * Plugin Name: DCM Support
 * Plugin URI: https://dcmarketing.ca/
 * Description: A set of customized actions on wordpress websites for Digital Connect Marketing ltd.  It blocks all comments, add a button to all pages, and list some plugins that are recommended for clients.
 * Requires at least: 5.8
 * Requires PHP: 5.6
 * Version: 1.4
 * Author: Mahdi Ebrahimi
 * Author URI: https://dvgroups.ca
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: dcm-support
 *
 * @package dcm-support
 */
if( ! ABSPATH ) exit;
if( ! class_exists('wp_dcm_supports') ) :
	class wp_dcm_supports{
		public function __construct(){
			$this->defines();
			$this->load_file();
			$this->localization();
		}
		private function defines(){
			if( !defined('wp_dcm_supports_dir_url') ){
				define( 'wp_dcm_supports_dir_url' , plugin_dir_url( __FILE__ ) );
			}
			if( !defined('wp_dcm_supports_dir_path') ){
				define( 'wp_dcm_supports_dir_path' , plugin_dir_path( __FILE__ ) );
			}
			if( !defined('wp_dcm_supports_text_domain') ){
				define( 'wp_dcm_supports_text_domain' , wp_dcm_supports::plugin_data()->textdomain );
			}
		}
		private function load_file(){
			if( ! class_exists( 'WP_List_Table' ) ) {
				require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
			}
			$included = [

				'class-plugin-activation'	=> 'libs',
				'class-wp-list'				=> 'libs',
				'admin-enqueue'				=> 'admin',
				'admin-bar'					=> 'admin',
				'admin-menu'				=> 'admin',
				'admin-plugin'				=> 'admin',
				'admin-widget'				=> 'admin',
			];
			foreach( $included as $file => $folder ){
				require_once( $folder.'/'.$file.'.php'  );
			}
		}
		private static function plugin_data(){
			if( ! function_exists('get_plugin_data') ){
				require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}
			$plugin_data = (object) get_plugin_data( __FILE__ );
			if( isset( $plugin_data ) ){
				$plugin_data =  (array) $plugin_data;
				$plugin_data =  array_change_key_case($plugin_data);
				$plugin_data =  (object) $plugin_data;
				return $plugin_data;
			}
		}
		public function localization(){
			$plugin_rel_path = plugin_basename(wp_dcm_supports_dir_path) . '/languages';
			load_plugin_textdomain(wp_dcm_supports::plugin_data()->textdomain, false, $plugin_rel_path);
		}
	}
endif;
new wp_dcm_supports();