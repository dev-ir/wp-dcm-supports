<?php
 /**
 * Add a new dashboard widget.
 */

add_action( 'wp_dashboard_setup', function () {
		wp_add_dashboard_widget( 'wpdcm_lastest_news', __( 'Latest News DCM Company' , wp_dcm_supports_text_domain ) , function () { 
?>			
<div class='wpdcm-lastest-news'>

	<div >
	
		<ul>
			<?php 
			
    require_once (ABSPATH.WPINC.'/feed.php');

if(function_exists('fetch_feed')) {

##init();
	#		var_dump( fetch_rss('https://wordpress.org/news/feed/') ); 
#	exit;
}
			
?>
			<!-- <li> smmmm </li> -->
			<!-- <li> smmmm </li> -->
			<!-- <li> smmmm </li> -->
			
		</ul>
	
	</div>

	<div class="community-events-footer">
			<a href="https://make.wordpress.org/ target="_blank"><span aria-hidden="true" class="dashicons dashicons-rss"></span> <?php echo __( 'News' , wp_dcm_supports_text_domain ); ?> </a>
			|
			<a href="https://central.wordcamp.org/" target="_blank"><span aria-hidden="true" class="dashicons dashicons-shortcode"></span> <?php echo __( 'Portfolio' , wp_dcm_supports_text_domain ); ?> </a>
			|
			<a href="https://wordpress.org/" target="_blank"><span aria-hidden="true" class="dashicons dashicons-format-status"></span> <?php echo __( 'Contact US	' , wp_dcm_supports_text_domain ); ?> </a>
	</div>

</div>
			
<?php			
	} ,null,null,null ,'high');
} );