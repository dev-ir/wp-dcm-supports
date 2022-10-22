<?php 
add_action( 'admin_menu', function (){
    add_menu_page(
        __( 'DCM Support - Home', wp_dcm_supports_text_domain ),
        __('DCM Support',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-home',
        'wpdcm_setting_home',
        'dashicons-businessperson',
        2
    ); 
	
    add_submenu_page(
        'wpdcm-home',
        __( 'Home', wp_dcm_supports_text_domain ),
        __('Home',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-home',
        'wpdcm_setting_home'
    );

    add_submenu_page(
        'wpdcm-home',
        __( 'Requirements', wp_dcm_supports_text_domain ),
        __('Requirements',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-setting-requirements',
        'wpdcm_setting_requirements'
    );
	
    add_submenu_page(
        'wpdcm-home',
        __( 'Settings', wp_dcm_supports_text_domain ),
        __('Settings',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-setting',
        'wpdcm_setting_set'
    );

    add_submenu_page(
        'wpdcm-home',
        __( 'Connect with us', wp_dcm_supports_text_domain ),
        __('Connect with us',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-setting-connection',
        'wpdcm_setting_connection'
    );

	
	
} );


function wpdcm_setting_home(){
	require wp_dcm_supports_dir_path.'/tpl/admin/wpdcm-admin-settings.php';
}