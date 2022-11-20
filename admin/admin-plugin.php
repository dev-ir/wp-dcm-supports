<?php
add_action(
	'wpdcm_register',
	function () {
		$plugins = array(
			array(
				'name'        => 'Contact Form 7',
				'slug'        => 'google-site-kit',
				'is_callable' => 'wpseo_init',
			),
			array(
				'name'        => 'Contact Form 7 Database Addon',
				'slug'		  => 'contact-form-cfdb7',
				'required'	  => false,
			),
			array(
				'name'        => 'Rank Math SEO',
				'slug'        => 'seo-by-rank-math',
				'is_callable' => 'wpseo_init',
				'required'	  => true,

			),
			array(
				'name'        => 'Site Kit by Google',
				'slug'        => 'google-site-kit',
				'is_callable' => 'wpseo_init',
				'required'	  => true,
			),
			array(
				'name'        => 'WP Mail SMTP',
				'slug'        => 'wp-mail-smtp',
				'is_callable' => 'wpseo_init',
				'required'	  => true,

			),
			array(
				'name'        => 'Wordfence Security',
				'slug'        => 'wordfence',
				'is_callable' => 'wpseo_init',
				'required'	  => true,
			),
			array(
				'name'               => 'WP Rocket',
				'slug'               => 'dcm-rocket-plugin',
				'source'             => wp_dcm_supports_dir_url . '/plugins/wp-rocket.zip',
				'required'           => true,
			),
		);
		$config = array(
			'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'menu'         => 'wpdcm-install-plugins', // Menu slug.
			'parent_slug'  => 'themes.php',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
		);
		tgmpa($plugins, $config);
	}
);