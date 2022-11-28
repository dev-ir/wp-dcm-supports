<?php
add_action( 'admin_menu', function (){
    add_menu_page(
        __( 'DCM Support - Home', wp_dcm_supports_text_domain ),
        __('DCM Support',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-home',
        'wpdcm_router',
        'dashicons-businessperson',
        2
    );

    add_submenu_page(
        'wpdcm-home',
        __( 'Home', wp_dcm_supports_text_domain ),
        __('Home',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-home',
        'wpdcm_router'
    );

    add_submenu_page(
        'wpdcm-home',
        __( 'Requirements', wp_dcm_supports_text_domain ),
        __('Requirements',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-requirements',
        'wpdcm_router'
    );

    add_submenu_page(
        'wpdcm-home',
        __( 'Settings', wp_dcm_supports_text_domain ),
        __('Settings',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-settings',
        'wpdcm_router'
    );

    add_submenu_page(
        'wpdcm-home',
        __( 'Connect US', wp_dcm_supports_text_domain ),
        __('Connect US',wp_dcm_supports_text_domain),
        'manage_options',
        'wpdcm-support',
        'wpdcm_router'
    );
} );
if( ! function_exists('wpdcm_router') ){
    function wpdcm_router(){
        if( !empty( sanitize_text_field( $_GET['page'] ) ) ){
            $call = str_replace('wpdcm-','',sanitize_text_field($_GET['page']));
            switch( $call ){
                case 'home':
                    require_once wp_dcm_supports_dir_path.'tpl/admin/wpdcm-admin-'.$call.'.php';
                break;

                case 'settings':
                    require_once wp_dcm_supports_dir_path.'tpl/admin/wpdcm-admin-'.$call.'.php';
                break;

                case 'support':
                    require_once wp_dcm_supports_dir_path.'tpl/admin/wpdcm-admin-'.$call.'.php';
                break;

                default:
                require_once wp_dcm_supports_dir_path.'tpl/admin/wpdcm-admin-home.php';
                break;
            }
        }
    }
}