<?php
/**
 * Add a new dashboard widget.
 */
add_action('wp_dashboard_setup', function () {
	wp_add_dashboard_widget('wpdcm_lastest_news', __('Latest News DCM Company', wp_dcm_supports_text_domain), function () {
?>
		<div class='wpdcm-lastest-news'>
			<div>
				<ul>
					<?php
					require_once(ABSPATH . WPINC . '/feed.php');
					if (function_exists('fetch_feed')) {
						$rss = fetch_feed('https://developermen.ir/question/feed/');
					}
					$maxitems = 0;

					if (!is_wp_error($rss)) : // Checks that the object is created correctly

						// Figure out how many total items there are, but limit it to 5.
						$maxitems = $rss->get_item_quantity(5);

						// Build an array of all the items, starting with element 0 (first element).
						$rss_items = $rss->get_items(0, $maxitems);

					endif;
					?>
					<ol>
						<?php if ($maxitems == 0) : ?>
							<li><?php _e('No items', 'wpdocs_textdomain'); ?></li>
						<?php else : ?>
							<?php // Loop through each feed item and display each item as a hyperlink.
							?>
							<?php foreach ($rss_items as $item) : ?>
								<li>
									<a href="<?php echo esc_url($item->get_permalink()); ?>" title="<?php printf(__('Posted %s', 'wpdocs_textdomain'), $item->get_date('j F Y | g:i a')); ?>">
										<?php echo esc_html($item->get_title()); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
					</ol>
				</ul>
			</div>

			<div class="community-events-footer">
				<a href="https://make.wordpress.org/ target=" _blank"><span aria-hidden="true" class="dashicons dashicons-rss"></span> <?php echo __('News', wp_dcm_supports_text_domain); ?> </a>
				|
				<a href="https://central.wordcamp.org/" target="_blank"><span aria-hidden="true" class="dashicons dashicons-shortcode"></span> <?php echo __('Portfolio', wp_dcm_supports_text_domain); ?> </a>
				|
				<a href="https://wordpress.org/" target="_blank"><span aria-hidden="true" class="dashicons dashicons-format-status"></span> <?php echo __('Contact US	', wp_dcm_supports_text_domain); ?> </a>
			</div>

		</div>

<?php
	}, null, null, null, 'high');
});
