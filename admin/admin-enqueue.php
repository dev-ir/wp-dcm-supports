<?php
/*
* * * Register and enqueue a custom stylesheet in the WordPress admin.
*/
add_action( 'admin_enqueue_scripts', function () {

	$version = wp_dcm_supports::plugin_data()->version;

	$wex_enqueue_scripts = [
		'wpdcm-admin-style' => [
			'file_type'		=> 'style',
			'file_name'		=> 'wpdcm-admin',
			'file_version'	=> $version,
			'file_path'		=> wp_dcm_supports_dir_url.'assets/css/',
			'file_media'	=> 'All',
			'file_cdn'		=> false
		],

		'wpdcm-admin-js' => [
			'file_type'		=> 'js',
			'file_name'		=> 'wpdcm-admin',
			'file_version'	=> $version,
			'file_path'		=> wp_dcm_supports_dir_url .'assets/js/',
			'file_in_footer'=> true,
			'file_cdn'		=> false
		],

	];
	if( $wex_enqueue_scripts ) : foreach( $wex_enqueue_scripts as $assets => $file ) : $file = (object) $file;
		if( $file->file_type == 'style' ){
			wp_enqueue_style( $assets , ( $file->file_cdn ) ? $file->file_path : $file->file_path . $file->file_name. '.css' , array() , $file->file_version , $file->file_media );
		}else{
			wp_enqueue_script( $assets , ( $file->file_cdn ) ? $file->file_path : $file->file_path . $file->file_name. '.js' , array() , $file->file_version , $file->file_in_footer );
		}
	endforeach;endif;
} );

add_action( 'wp_enqueue_scripts', function () {

	$version = wp_dcm_supports::plugin_data()->version;

	$wex_enqueue_scripts = [
		'wpdcm-ui-style' => [
			'file_type'		=> 'style',
			'file_name'		=> 'wpdcm-interface',
			'file_version'	=> $version,
			'file_path'		=> wp_dcm_supports_dir_url.'assets/css/',
			'file_media'	=> 'All',
			'file_cdn'		=> false
		],
		'wpdcm-font-awesome-sheet' => [
			'file_type'		=> 'style',
			'file_name'		=> 'all.min.css',
			'file_version'	=> $version,
			'file_path'		=> 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css',
			'file_media'	=> 'All',
			'file_cdn'		=> true
		],
		'wpdcm-contact-style' => [
			'file_type'		=> 'style',
			'file_name'		=> 'wpdcm-contact',
			'file_version'	=> $version,
			'file_path'		=> wp_dcm_supports_dir_url.'assets/css/',
			'file_media'	=> 'All',
			'file_cdn'		=> false
		],

	];
	if( $wex_enqueue_scripts ) : foreach( $wex_enqueue_scripts as $assets => $file ) : $file = (object) $file;
		if( $file->file_type == 'style' ){
			wp_enqueue_style( $assets , ( $file->file_cdn ) ? $file->file_path : $file->file_path . $file->file_name. '.css' , array() , $file->file_version , $file->file_media );
		}else{
			wp_enqueue_script( $assets , ( $file->file_cdn ) ? $file->file_path : $file->file_path . $file->file_name. '.js' , array() , $file->file_version , $file->file_in_footer );
		}
	endforeach;endif;
} );