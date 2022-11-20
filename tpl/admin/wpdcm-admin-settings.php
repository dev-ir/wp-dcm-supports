<div class='wrap'>
    <h2> <?php _e('DCM Setting', wp_dcm_supports_text_domain); ?> </h2>
    <form method="post" action="options.php" novalidate="novalidate"> <input type="hidden" name="option_page" value="general"><input type="hidden" name="action" value="update"><input type="hidden" id="_wpnonce" name="_wpnonce" value="494fea8a23"><input type="hidden" name="_wp_http_referer" value="/simple-project/wp-admin/options-general.php">
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row"><?php _e('Disable Comments', wp_dcm_supports_text_domain); ?></th>
                    <td>
                        <fieldset>
                            <label for="users_can_register">
                                <input name="users_can_register" type="checkbox" id="users_can_register" value="1">
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="new_admin_email"><?php _e('Email address' , wp_dcm_supports_text_domain); ?></label></th>
                    <td><input name="data[email_address]" type="email"  value="info@site.ca" class="regular-text ltr">
                        <p class="description" id="new-admin-email-description"> <?php _e('This address is used for administrative purposes.' , wp_dcm_supports_text_domain ); ?> </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', wp_dcm_supports_text_domain); ?>"></p>
    </form>
</div>