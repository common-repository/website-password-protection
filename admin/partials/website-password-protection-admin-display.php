<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://alignpx.com
 * @since      1.0.0
 *
 * @package    Website_Password_Protection
 * @subpackage Website_Password_Protection/admin/partials
 */

        function wpp_setting_input_field(){
            ?>
            <label for="wpp-password">
                <input id="wpp-password" type="text" value="<?php echo get_option( 'wpp-password'); ?>" name="wpp-password" >
            </label>
            <p class="description">Enable the password to restrict access to your online store. Only customers with the password can access it.</p>

            <?php
        }
