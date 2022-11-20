<?php 

add_action('wp_footer',function(){
	echo '
	<a href="'.json_decode( get_option('dcm_settings',true) )->g_review.'" id="dcm-google-review" target="_blank">
		<img src="'.wp_dcm_supports_dir_url.'assets/img/review-us-on-google-website-button.png">
	<a/>';
});