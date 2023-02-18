<?php 
$get_setting = json_decode( get_option('dcm_settings',true) );
add_action('wp_footer',function() use ($get_setting){
	if( !empty($get_setting->g_review) ){
		$image = !empty($get_setting->g_review_image) ? $get_setting->g_review_image : wp_dcm_supports_dir_url.'assets/img/logo.jpg';
		echo '<div>
		<a href="'.$get_setting->g_review.'"  alt="Google Review" id="dcm-google-review" target="_blank">
			<img src="'.$image.'" title="Google Review">
		<a/></div>';
	}
	if( !empty($get_setting->mobile_contact) ){
        include wp_dcm_supports_dir_path . '/tpl/main/wp-dcm-contact.php';
	}
},99);

// Close comments on the front-end
function DCM_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'DCM_disable_comments_status', 20, 2);
add_filter('pings_open', 'DCM_disable_comments_status', 20, 2);
add_filter('comments_array', function ($comments) {
	$comments = array();
	return $comments;
}, 10, 2);

if( !empty( get_option('dcm_noties_update') ) ){
	add_action( 'admin_notices', function () {
		update_option('dcm_noties_update' , false );

		?>
		<div class="notice notice-success is-dismissible">
			<p><?php _e( 'Done!', wp_dcm_supports_text_domain ); ?></p>
		</div>
		<?php
	} );
}