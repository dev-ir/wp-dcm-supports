<?php
$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'display_options';
if (isset($_POST['submit'])) {
    $input = $_POST['data'];
    update_option('dcm_settings', json_encode($input, JSON_UNESCAPED_UNICODE));
}
if (!empty(get_option('dcm_settings'))) {
    $options  = json_decode(get_option('dcm_settings') , true);
}
?>
<div class='wrap'>
    <h2> <?php _e('DCM Setting', wp_dcm_supports_text_domain); ?></h2>
    <?php settings_errors(); ?>
    <div class="nav-tab-wrapper">
        <a href="?page=settings_dcm_options&tab=display_options" class="nav-tab <?php echo $active_tab == 'display_options' ? 'nav-tab-active' : ''; ?>">Settings</a>
        <a href="?page=settings_dcm_options&tab=social_options" class="nav-tab <?php echo $active_tab == 'social_options' ? 'nav-tab-active' : ''; ?>">Social Options</a>
    </div>
    <form method="post">
    <?php settings_fields( 'dcm_settings' );?>  
        <table class="form-table" role="presentation">
            <tbody>
                <?php foreach( [
                    'fields' => [
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
                            'class' => 'form-control',
                            'type'  => 'url',
                            'slug'  => 'g_review',
                            'desc'  => 'This url address only for show in buttom image'
                        ],
                        'email_address' => [
                            'label' => 'Email address',
                            'class' => 'form-control regular-text ltr',
                            'type'  => 'email',
                            'slug'  => 'email_address',
                            'desc'  => 'This address is used for administrative purposes.'
                        ],
                    ],
                ] as $field ) : foreach( $field as $item ) :
                ?>
                <tr>
                    <th scope="row"><?php _e( $item['label'], wp_dcm_supports_text_domain); ?></th>
                    <td>
                        <fieldset>
                            <label for="<?php echo $item['slug'];?>"></label>
                            <input name="data[<?php echo $item['slug'];?>]"  class='<?php echo $item['class'];?>' type="<?php echo $item['type'];?>"<?php echo !empty( $options[$item['slug']] ) ? 'checked' : ''; ?> >
                            <?php if( !empty($item['desc']) ) : ?>
                            <p class="description"> <?php _e($item['desc'], wp_dcm_supports_text_domain); ?></p>
                            <?php endif; ?>

                        </fieldset>
                    </td>
                </tr>
                <?php endforeach;endforeach; ?>
            </tbody>
        </table>
        <?php 
            do_settings_sections( 'dcm_settings' );
            submit_button(); 
        ?>
    </form>
</div>