<?php 
if( isset( $_POST['submit'] ) ){
    $input = $_POST['data'];
    update_option('dcm_settings' , json_encode($input,JSON_UNESCAPED_UNICODE));
}
if( !empty( get_option('dcm_settings') ) ){
    $response = json_decode( get_option('dcm_settings',true) );
}
?>
<div class='wrap'>
    <h2> <?php _e('DCM Setting', wp_dcm_supports_text_domain); ?> </h2>
    <form method="post" > 
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row"><?php _e('Disable Comments', wp_dcm_supports_text_domain); ?></th>
                    <td>
                        <fieldset>
                            <label for="users_can_register">
                                <input name="data[disable_comment]" type="checkbox"  value="1">
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Disable Register', wp_dcm_supports_text_domain); ?></th>
                    <td>
                        <fieldset>
                            <label for="users_can_register">
                                <input name="data[disable_register_user]" type="checkbox"  value="1">
                            </label>
                        </fieldset>
                        <p class="description" > <?php _e('Anyone can register', wp_dcm_supports_text_domain); ?> </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Mega Menu', wp_dcm_supports_text_domain); ?></th>
                    <td>
                        <fieldset>
                            <label for="users_can_register">
                                <input name="data['divi_mega_menu]" type="checkbox"  value="1">
                            </label>
                        </fieldset>
                        <p class="description" > <?php _e('Only for divi template', wp_dcm_supports_text_domain); ?> </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="new_admin_email"><?php _e('Google Review URL', wp_dcm_supports_text_domain); ?></label></th>
                    <td><input name="data[g_review]" type="url" value="<?php echo !empty($response->g_review) ? $response->g_review : ''; ?>" class="regular-text ltr">
                        <p class="description" > <?php _e('This url address only for show in buttom image', wp_dcm_supports_text_domain); ?> </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="new_admin_email"><?php _e('Email address', wp_dcm_supports_text_domain); ?></label></th>
                    <td><input name="data[email_address]" type="email" value="" class="regular-text ltr">
                        <p class="description" > <?php _e('This address is used for administrative purposes.', wp_dcm_supports_text_domain); ?> </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', wp_dcm_supports_text_domain); ?>">
        </p>
    </form>
</div>