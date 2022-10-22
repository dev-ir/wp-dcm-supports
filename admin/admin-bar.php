<?php 
add_action( 'admin_bar_menu', function  ( WP_Admin_Bar $admin_bar ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
	
	$menu_id = 'menu-id';
	
    $admin_bar->add_menu( array(
        'id'    => $menu_id,
        'parent' => null,
        'group'  => null,
        'title' => '<span class="ab-icon dashicons dashicons-businessperson"></span>'.__('DCM Support',wp_dcm_supports_text_domain),
        'meta' => [
            'title' => __( 'DCM Support', 'dcm-support' ), //This title will show on hover
        ]
    ) );
	
    $admin_bar->add_menu(
        array(
            'parent' => $menu_id,
            'title'  => __( 'Connect with us', wp_dcm_supports_text_domain  ),
            'id'     => '2',
            'href'   => 'https://dcmarketing.ca/supports/?cid='.$_SERVER['SERVER_NAME'],
			'meta'	 => [
				'target'	=> '_blank'
			],
        )
    );

    $admin_bar->add_menu(
        array(
            'parent' => $menu_id,
            'title'  => __( 'About US', wp_dcm_supports_text_domain  ),
            'id'     => '',
            'href'   => 'https://dcmarketing.ca/supports/?cid='.$_SERVER['SERVER_NAME'],
			'meta'	 => [
				'target'	=> '_blank'
			],
        )
    );
	
}, 500 );
