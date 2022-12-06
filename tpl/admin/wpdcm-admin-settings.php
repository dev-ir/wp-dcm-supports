<?php
$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'display_options';
if (isset($_POST['submit'])) {
    $input = $_POST['data'];
    if (!empty($_FILES['data']['name']['g_review_image'])) {
        $files = $_FILES['data'];
        foreach ($files['name'] as $key => $value) {
            if ($files['name'][$key]) {
                $file = array(
                    'name' => $files['name'][$key],
                    'type' => $files['type'][$key],
                    'tmp_name' => $files['tmp_name'][$key],
                    'error' => $files['error'][$key],
                    'size' => $files['size'][$key]
                );
                $movefile = wp_handle_upload($file, array('test_form' => false));
                if ($movefile && !isset($movefile['error'])) {
                    $input['g_review_image'] = $movefile['url'];
                } else {
                    echo $movefile['error'];
                }
            }
        }
    } else {
        $input['g_review_image'] = sanitize_text_field($_POST['data']['old_g_review_image']);
    }
    unset($input['old_g_review_image']);
    update_option('dcm_settings', json_encode($input, JSON_UNESCAPED_UNICODE));
}
if (!empty(get_option('dcm_settings'))) {
    $options  = json_decode(get_option('dcm_settings'), true);
}
?>
<div class='wrap'>
    <h2> <?php _e('DCM Setting', wp_dcm_supports_text_domain); ?></h2>
    <?php settings_errors(); ?>
    <div class="nav-tab-wrapper">
        <a href="?page=wpdcm-settings&tab=display_options" class="nav-tab <?php echo $active_tab == 'display_options' ? 'nav-tab-active' : ''; ?>">Settings</a>
        <a href="?page=wpdcm-settings&tab=social_options" class="nav-tab <?php echo $active_tab == 'social_options' ? 'nav-tab-active' : ''; ?>">Social Options</a>
    </div>
    <form method="post" enctype="multipart/form-data">
        <?php settings_fields('dcm_settings'); ?>
        <table class="form-table" role="presentation">
            <tbody class="">
                <?php foreach ([
                    'fields' => [
                        'mobile_contact' => [
                            'label' => 'Contact on Mobile',
                            'class' => 'form-control',
                            'type'  => 'checkbox',
                            'slug'  => 'mobile_contact'
                        ],
                        'disable_comment' => [
                            'label' => 'Disable Comments',
                            'class' => 'form-control',
                            'type'  => 'checkbox',
                            'slug'  => 'disable_comment'
                        ],
                        'disable_register_user' => [
                            'label' => 'Disable Register',
                            'class' => 'form-control',
                            'type'  => 'checkbox',
                            'slug'  => 'disable_register_user'
                        ],
                        'divi_mega_menu' => [
                            'label' => 'Mega Menu',
                            'class' => 'form-control',
                            'type'  => 'checkbox',
                            'slug'  => 'divi_mega_menu'
                        ],
                        'g_review' => [
                            'label' => 'Google Review URL',
                            'class' => 'form-control regular-text ltr',
                            'type'  => 'url',
                            'slug'  => 'g_review',
                            'desc'  => 'This url address only for show in buttom image.'
                        ],
                        'g_review_image' => [
                            'label' => 'Google Review image',
                            'class' => 'wpdcm-setting-file',
                            'type'  => 'file',
                            'slug'  => 'g_review_image',
                        ],
                        'email_address' => [
                            'label' => 'Email address',
                            'class' => 'form-control regular-text ltr',
                            'type'  => 'email',
                            'slug'  => 'email_address',
                            'desc'  => 'This address is used for administrative purposes.'
                        ],
                        'phone_number' => [
                            'label' => 'Phone Number',
                            'class' => 'form-control regular-text ltr',
                            'type'  => 'text',
                            'slug'  => 'phone_number',
                        ],
                    ],
                ] as $field) : foreach ($field as $item) :
                ?>
                        <tr>
                            <th scope="row"><?php _e($item['label'], wp_dcm_supports_text_domain); ?></th>
                            <td>
                                <fieldset>
                                    <?php if ($item['type'] == 'file') : ?>
                                        <input name="data[<?php echo $item['slug']; ?>]" class='<?php echo $item['class']; ?>' type="<?php echo !empty( $options[$item['slug']] == true ) ? 'hidden' : 'file';?>">
                                        <?php if( $options[$item['slug']] == true ) : ?>
                                        <div class=''>
                                            <input type="hidden" name="data[old_<?php echo $item['slug']; ?>]" value="<?php echo $options[$item['slug']]; ?>">
                                            <a href="<?php echo $options[$item['slug']]; ?>" target="_blank" class="wpdcm-link">
                                                <div class="button button-info wpdcm-inline-flex wpdcm-inline-flex--center">
                                                    <i class="dashicons dashicons-visibility"></i>
                                                    Preview
                                                </div>
                                            </a>
                                            <div class="button button-info wpdcm-inline-flex wpdcm-inline-flex--center dcm-remove-image">
                                                <i class="dashicons dashicons-trash"></i>
                                                Remove
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    <?php elseif($item['type'] == 'checkbox') : ?>
                                        <input name="data[<?php echo $item['slug']; ?>]" class='<?php echo $item['class']; ?>' type="<?php echo $item['type']; ?>" <?php echo !empty($options[$item['slug']]) ? 'checked' : ''; ?>>
                                    <?php else : ?>
                                        <input name="data[<?php echo $item['slug']; ?>]" class='<?php echo $item['class']; ?>' type="<?php echo $item['type']; ?>" value="<?php echo !empty( $options[$item['slug']] ) ? $options[$item['slug']] : ''; ?>" >
                                    <?php endif; ?>
                                    <?php if (!empty($item['desc'])) : ?>
                                        <span class="description"> <?php _e($item['desc'], wp_dcm_supports_text_domain); ?></span>
                                    <?php endif; ?>
                                </fieldset>
                            </td>
                        </tr>
                <?php endforeach;
                endforeach; ?>
            </tbody>
        </table>
        <?php
        do_settings_sections('dcm_settings');
        submit_button();
        ?>
    </form>
</div>