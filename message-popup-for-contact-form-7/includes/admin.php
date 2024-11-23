<?php
add_action('wpcf7_editor_panels', 'MPFCF7_editor_panel', 10, 1);

function MPFCF7_editor_panel( $panels ) {
    $panels['my-custom-panel'] = array(
        'title' => __( 'Popup Setting', 'my-plugin' ),
        'callback' => 'MPFCF7_panel_callback',
    );
    return $panels;
}

function MPFCF7_panel_callback() {

    if(isset($_REQUEST['post']) && $_REQUEST['post'] != '') {
        $formid = sanitize_text_field($_REQUEST['post']);   
    } else {
        $formid = NULL;
    }
    ?>
    <div class="my-custom-panel">
        <table class="form-table">

            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Enable Success Message','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_popup_success_enabled = get_post_meta( $formid, 'mpfcf7_popup_success_enabled', true );
                    ?>
                <input type="checkbox" id="mpfcf7_popup_success_enabled" name="mpfcf7_popup_success_enabled" value="1" <?php checked( $mpfcf7_popup_success_enabled, '1' ); ?>>
                    <label for="mpfcf7_popup_success_enabled"><?php echo __('Show success message','message-popup-for-contact-form-7'); ?></label>
                </td>
            </tr>

            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Button Text','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <input type="text" id="mpfcf7_btn_text" name="mpfcf7_btn_text" value="<?php echo esc_attr(get_post_meta( $formid, 'mpfcf7_btn_text', true ));?>"><label class="mpfcf7_comman_link"></a></label>
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Popup Width','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_popup_width = get_post_meta( $formid,'mpfcf7_popup_width', true );
                    if($mpfcf7_popup_width == ''){
                        $mpfcf7_popup_width = '478px';
                    }
                    ?>
                    <input type="text" id="mpfcf7_popup_width" name="mpfcf7_popup_width" value="<?php echo esc_attr($mpfcf7_popup_width); ?>">
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Popup Border Radius','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_popup_border_radious = get_post_meta( $formid,'mpfcf7_popup_border_radious', true );
                    if($mpfcf7_popup_border_radious == ''){
                        $mpfcf7_popup_border_radious = '5px';
                    }
                    ?>
                    <input type="text" id="mpfcf7_popup_border_radious" name="mpfcf7_popup_border_radious" value="<?php echo esc_attr($mpfcf7_popup_border_radious); ?>">
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Background Overlay Color','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_background_overlay = get_post_meta( $formid,'mpfcf7_background_overlay', true );
                    if($mpfcf7_background_overlay == ''){
                        $mpfcf7_background_overlay = 'rgba(0,0,0,.4)';
                    }
                    ?>
                    <input type="text" id="mpfcf7_background_overlay" name="mpfcf7_background_overlay" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_background_overlay); ?>">
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Popup Background Color','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_background_color = get_post_meta( $formid,'mpfcf7_background_color', true );
                    if($mpfcf7_background_color == ''){
                        $mpfcf7_background_color = '#ffffff';
                    }
                    ?>
                    <input type="text" id="mpfcf7_background_color" name="mpfcf7_background_color" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_background_color); ?>">
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Popup Border Width','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_popup_border_width = get_post_meta( $formid,'mpfcf7_popup_border_width', true );
                    if($mpfcf7_popup_border_width == ''){
                        $mpfcf7_popup_border_width = '3px';
                    }
                    ?>
                    <input type="text" id="mpfcf7_popup_border_width" name="mpfcf7_popup_border_width" value="<?php echo esc_attr($mpfcf7_popup_border_width); ?>">
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Popup Border Color','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_border_color = get_post_meta( $formid,'mpfcf7_border_color', true );
                    if($mpfcf7_border_color == ''){
                        $mpfcf7_border_color = '#ffffff';
                    }
                    ?>
                    <input type="text" id="mpfcf7_border_color" name="mpfcf7_border_color" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_border_color); ?>">
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Popup Text Color','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_popup_text_color = get_post_meta( $formid,'mpfcf7_popup_text_color', true );
                    if($mpfcf7_popup_text_color == ''){
                        $mpfcf7_popup_text_color = '#61534e';
                    }
                    ?>
                    <input type="text" id="mpfcf7_popup_text_color" name="mpfcf7_popup_text_color" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_popup_text_color); ?>">
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Button Background Color','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <?php 
                    $mpfcf7_btn_background_color = get_post_meta( $formid,'mpfcf7_btn_background_color', true );
                    if($mpfcf7_btn_background_color == ''){
                        $mpfcf7_btn_background_color = '#7cd1f9';
                    }
                    ?>
                    <input type="text" id="mpfcf7_btn_background_color" name="mpfcf7_btn_background_color" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_btn_background_color); ?>">
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="2">
                    <label><?php echo __('Hide Popup','message-popup-for-contact-form-7');?></label>
                </th>
                <td>
                    <input type="text" id="mpfcf7_hide_popup" name="mpfcf7_hide_popup" value="<?php echo esc_attr(get_post_meta( $formid, 'mpfcf7_hide_popup', true ));?>">
                    <span class="description"><?php echo __('Add value like this eg. 5000 (Popup will hide after 5 Seconds).','message-popup-for-contact-form-7');?></span><br>
                    </td>
            </tr>

            <tr>

        </table>


<!-- disable -->

<h2>Failure message Settings <label class="mpfcf7_comman_link"> <a href="https://topsmodule.com/product/message-popup-for-contact-form-7/" target="_blank"><?php echo esc_html( __( 'Pro Version', 'message-popup-for-contact-form-7' ) ); ?></a></label>
    </h2>
    <fieldset class="verions_pro">
    <legend>You can Enable/Disable this Failure popup and also you can you other setting related to Failure popup.</legend>
    <table class="form-table">

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('Enable Failure Message','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_popup_failure_enabled = get_post_meta( $formid, 'mpfcf7_popup_failure_enabled', true );
                ?>
                <input type="checkbox" id="mpfcf7_popup_failure_enabled" name="mpfcf7_popup_failure_enabled" value="1" <?php checked( $mpfcf7_popup_failure_enabled, '1' ); ?>>
                <label for="mpfcf7_popup_failure_enabled"><?php echo __('Show failure message','message-popup-for-contact-form-7'); ?></label>
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Button Text','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <input type="text" id="mpfcf7_failure_btn_text" name="mpfcf7_failure_btn_text" value="<?php echo esc_attr(get_post_meta( $formid, 'mpfcf7_failure_btn_text', true ));?>">
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Popup Width','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_popup_failure_width = get_post_meta( $formid, 'mpfcf7_popup_failure_width', true );
                if($mpfcf7_popup_failure_width == ''){
                    $mpfcf7_popup_failure_width = '478px';
                }
                ?>
                <input type="text" id="mpfcf7_popup_failure_width" name="mpfcf7_popup_failure_width" value="<?php echo esc_attr($mpfcf7_popup_failure_width); ?>">
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Popup Border Radius','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_popup_failure_border_radius = get_post_meta( $formid, 'mpfcf7_popup_failure_border_radius', true );
                if($mpfcf7_popup_failure_border_radius == ''){
                    $mpfcf7_popup_failure_border_radius = '5px';
                }
                ?>
                <input type="text" id="mpfcf7_popup_failure_border_radius" name="mpfcf7_popup_failure_border_radius" value="<?php echo esc_attr($mpfcf7_popup_failure_border_radius); ?>">
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Background Overlay Color','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_failure_background_overlay = get_post_meta( $formid, 'mpfcf7_failure_background_overlay', true );
                if($mpfcf7_failure_background_overlay == ''){
                    $mpfcf7_failure_background_overlay = 'rgba(0,0,0,.4)';
                }
                ?>
                <input type="text" id="mpfcf7_failure_background_overlay" name="mpfcf7_failure_background_overlay" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_failure_background_overlay); ?>">
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Popup Background Color','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_failure_background_color = get_post_meta( $formid, 'mpfcf7_failure_background_color', true );
                if($mpfcf7_failure_background_color == ''){
                    $mpfcf7_failure_background_color = '#ffdddd';
                }
                ?>
                <input type="text" id="mpfcf7_failure_background_color" name="mpfcf7_failure_background_color" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_failure_background_color); ?>">
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Popup Border Width','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_popup_failure_border_width = get_post_meta( $formid, 'mpfcf7_popup_failure_border_width', true );
                if($mpfcf7_popup_failure_border_width == ''){
                    $mpfcf7_popup_failure_border_width = '3px';
                }
                ?>
                <input type="text" id="mpfcf7_popup_failure_border_width" name="mpfcf7_popup_failure_border_width" value="<?php echo esc_attr($mpfcf7_popup_failure_border_width); ?>">
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Popup Border Color','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_failure_border_color = get_post_meta( $formid, 'mpfcf7_failure_border_color', true );
                if($mpfcf7_failure_border_color == ''){
                    $mpfcf7_failure_border_color = '#ffaaaa';
                }
                ?>
                <input type="text" id="mpfcf7_failure_border_color" name="mpfcf7_failure_border_color" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_failure_border_color); ?>">
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Popup Text Color','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_failure_text_color = get_post_meta( $formid, 'mpfcf7_failure_text_color', true );
                if($mpfcf7_failure_text_color == ''){
                    $mpfcf7_failure_text_color = '#cc0000';
                }
                ?>
                <input type="text" id="mpfcf7_failure_text_color" name="mpfcf7_failure_text_color" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_failure_text_color); ?>" >
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Button Background Color','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
                <?php 
                $mpfcf7_failure_btn_background_color = get_post_meta( $formid, 'mpfcf7_failure_btn_background_color', true );
                if($mpfcf7_failure_btn_background_color == ''){
                    $mpfcf7_failure_btn_background_color = '#ff6666';
                }
                ?>
                <input type="text" id="mpfcf7_failure_btn_background_color" name="mpfcf7_failure_btn_background_color" class="mpfcf7_color" value="<?php echo esc_attr($mpfcf7_failure_btn_background_color);?>">
            </td>
        </tr>

        <tr>
            <th scope="row" colspan="2">
                <label><?php echo __('failure Hide Popup','message-popup-for-contact-form-7');?></label>
            </th>
            <td>
            <?php 
                ?>
                <input type="text" id="mpfcf7_hide_failure_popup" name="mpfcf7_hide_failure_popup" value="<?php echo esc_attr(get_post_meta( $formid, 'mpfcf7_hide_failure_popup', true ));?>">
                <span class="description"><?php echo __('Add value like this eg. 5000 (Popup will hide after 5 Seconds).','message-popup-for-contact-form-7');?></span><br>
            </td>
        </tr>
    </table>
</fieldset>
    </div>
    <?php
}

/* Save Form Value*/
function MPFCF7_update_editor_panel_meta($post_id) {

    $formids = $post_id->id;
    
    if (isset($_POST['mpfcf7_popup_success_enabled'])) {
        update_post_meta($formids, 'mpfcf7_popup_success_enabled', '1');
    } else {
        update_post_meta($formids, 'mpfcf7_popup_success_enabled', '0');
    }
    if (isset($_POST['mpfcf7_btn_text'])) {
        update_post_meta($formids, 'mpfcf7_btn_text', $_POST['mpfcf7_btn_text']);
    }
    if (isset($_POST['mpfcf7_popup_width'])) {
        update_post_meta($formids, 'mpfcf7_popup_width', $_POST['mpfcf7_popup_width']);
    }
    if (isset($_POST['mpfcf7_popup_border_radious'])) {
        update_post_meta($formids, 'mpfcf7_popup_border_radious', $_POST['mpfcf7_popup_border_radious']);
    }
    if (isset($_POST['mpfcf7_background_overlay'])) {
        update_post_meta($formids, 'mpfcf7_background_overlay', $_POST['mpfcf7_background_overlay']);
    }
    if (isset($_POST['mpfcf7_background_color'])) {
        update_post_meta($formids, 'mpfcf7_background_color', $_POST['mpfcf7_background_color']);
    }
    if (isset($_POST['mpfcf7_popup_border_width'])) {
        update_post_meta($formids, 'mpfcf7_popup_border_width', $_POST['mpfcf7_popup_border_width']);
    }
    if (isset($_POST['mpfcf7_border_color'])) {
        update_post_meta($formids, 'mpfcf7_border_color', $_POST['mpfcf7_border_color']);
    }
    if (isset($_POST['mpfcf7_popup_text_color'])) {
        update_post_meta($formids, 'mpfcf7_popup_text_color', $_POST['mpfcf7_popup_text_color']);
    }
    if (isset($_POST['mpfcf7_btn_background_color'])) {
        update_post_meta($formids, 'mpfcf7_btn_background_color', $_POST['mpfcf7_btn_background_color']);
    }
    if (isset($_POST['mpfcf7_hide_popup'])) {
        update_post_meta($formids, 'mpfcf7_hide_popup', intval($_POST['mpfcf7_hide_popup']));
    }

    // failure data save 

    if (isset($_POST['mpfcf7_popup_failure_enabled'])) {
        // If checkbox is checked, store '1', otherwise store '0'
        update_post_meta($formids, 'mpfcf7_popup_failure_enabled', '1');
    } else {
        // If checkbox is not checked, store '0'
        update_post_meta($formids, 'mpfcf7_popup_failure_enabled', '0');
    }
    if (isset($_POST['mpfcf7_failure_btn_text'])) {
        update_post_meta($formids, 'mpfcf7_failure_btn_text', sanitize_text_field($_POST['mpfcf7_failure_btn_text']));
    }
    if (isset($_POST['mpfcf7_failure_btn_text'])) {
        update_post_meta($formids, 'mpfcf7_failure_btn_text', sanitize_text_field($_POST['mpfcf7_failure_btn_text']));
    }
    if (isset($_POST['mpfcf7_popup_failure_width'])) {
        update_post_meta($formids, 'mpfcf7_popup_failure_width', sanitize_text_field($_POST['mpfcf7_popup_failure_width']));
    }
    if (isset($_POST['mpfcf7_popup_failure_border_radius'])) {
        update_post_meta($formids, 'mpfcf7_popup_failure_border_radius', sanitize_text_field($_POST['mpfcf7_popup_failure_border_radius']));
    }
    if (isset($_POST['mpfcf7_failure_background_overlay'])) {
        update_post_meta($formids, 'mpfcf7_failure_background_overlay', sanitize_text_field($_POST['mpfcf7_failure_background_overlay']));
    }
    if (isset($_POST['mpfcf7_failure_background_color'])) {
        update_post_meta($formids, 'mpfcf7_failure_background_color', sanitize_text_field($_POST['mpfcf7_failure_background_color']));
    }
    if (isset($_POST['mpfcf7_popup_failure_border_width'])) {
        update_post_meta($formids, 'mpfcf7_popup_failure_border_width', sanitize_text_field($_POST['mpfcf7_popup_failure_border_width']));
    }
    if (isset($_POST['mpfcf7_failure_border_color'])) {
        update_post_meta($formids, 'mpfcf7_failure_border_color', sanitize_text_field($_POST['mpfcf7_failure_border_color']));
    }
    if (isset($_POST['mpfcf7_failure_text_color'])) {
        update_post_meta($formids, 'mpfcf7_failure_text_color', sanitize_text_field($_POST['mpfcf7_failure_text_color']));
    }
    if (isset($_POST['mpfcf7_failure_btn_background_color'])) {
        update_post_meta($formids, 'mpfcf7_failure_btn_background_color', sanitize_text_field($_POST['mpfcf7_failure_btn_background_color']));
    }
    if (isset($_POST['mpfcf7_hide_failure_popup'])) {
        update_post_meta($formids, 'mpfcf7_hide_failure_popup', intval($_POST['mpfcf7_hide_failure_popup']));
    }
    
}
add_action( 'wpcf7_after_save', 'MPFCF7_update_editor_panel_meta' , 10, 1 ); 

/* Default save value */
function MPFCF7_activate() {
    $args = array(
        'post_type' => 'wpcf7_contact_form', 
        'posts_per_page' => -1
    ); 
    $cf7Forms = get_posts( $args );

    foreach ($cf7Forms as $form) {
        $contact_form_id = $form->ID;
    }

    update_post_meta($contact_form_id, 'mpfcf7_popup_width', '478px');
    update_post_meta($contact_form_id, 'mpfcf7_popup_border_radious', '5px');
    update_post_meta($contact_form_id, 'mpfcf7_background_overlay', 'rgba(0,0,0,.4)');
    update_post_meta($contact_form_id, 'mpfcf7_background_color', '#ffffff');
    update_post_meta($contact_form_id, 'mpfcf7_popup_border_width', '3px');
    update_post_meta($contact_form_id, 'mpfcf7_border_color', '#ffffff');
    update_post_meta($contact_form_id, 'mpfcf7_popup_text_color', '#61534e');
    update_post_meta($contact_form_id, 'mpfcf7_btn_background_color', '#7cd1f9');
    update_post_meta($contact_form_id, 'mpfcf7_hide_popup', '100000');

}
register_activation_hook( mpfcf7_plugin_file, 'MPFCF7_activate' );

/* Popup Style Value */
function MPFCF7_popup_customize(){

    $args = array(
        'post_type' => 'wpcf7_contact_form', 
        'posts_per_page' => -1
    ); 
    $cf7Forms = get_posts( $args );

    foreach ($cf7Forms as $form) {
        $contact_form_id = $form->ID;
    }

    $mpfcf7_popup_width = get_post_meta( $contact_form_id,'mpfcf7_popup_width', true );
    $mpfcf7_popup_border_radious = get_post_meta( $contact_form_id,'mpfcf7_popup_border_radious', true );
    $mpfcf7_background_overlay = get_post_meta( $contact_form_id,'mpfcf7_background_overlay', true );
    $mpfcf7_background_color = get_post_meta( $contact_form_id,'mpfcf7_background_color', true );
    $mpfcf7_popup_border_width = get_post_meta( $contact_form_id,'mpfcf7_popup_border_width', true );
    $mpfcf7_border_color = get_post_meta( $contact_form_id,'mpfcf7_border_color', true );
    $mpfcf7_popup_text_color = get_post_meta( $contact_form_id,'mpfcf7_popup_text_color', true );
    $mpfcf7_btn_background_color = get_post_meta( $contact_form_id,'mpfcf7_btn_background_color', true );
  


    $mpfcf7_popup_failure_width = get_post_meta($contact_form_id, 'mpfcf7_popup_failure_width', true);
    $mpfcf7_popup_failure_border_radius = get_post_meta($contact_form_id, 'mpfcf7_popup_failure_border_radius', true);
    $mpfcf7_failure_background_overlay = get_post_meta($contact_form_id, 'mpfcf7_failure_background_overlay', true);
    $mpfcf7_failure_background_color = get_post_meta($contact_form_id, 'mpfcf7_failure_background_color', true);
    $mpfcf7_popup_failure_border_width = get_post_meta($contact_form_id, 'mpfcf7_popup_failure_border_width', true);
    $mpfcf7_failure_border_color = get_post_meta($contact_form_id, 'mpfcf7_failure_border_color', true);
    $mpfcf7_failure_text_color = get_post_meta($contact_form_id, 'mpfcf7_failure_text_color', true);
    $mpfcf7_failure_btn_background_color = get_post_meta($contact_form_id, 'mpfcf7_failure_btn_background_color', true);


    ?>
    <style type="text/css">

        .custom-success-overlay {
            background-color: <?php echo esc_attr($mpfcf7_background_overlay); ?>;
        }
        .custom-success-popup  {
            width: <?php echo esc_attr($mpfcf7_popup_width); ?>;
            background-color: <?php echo esc_attr($mpfcf7_background_color); ?>;
            border: <?php echo esc_attr($mpfcf7_popup_border_width); ?> solid;
            border-color: <?php echo esc_attr($mpfcf7_border_color); ?>;
            border-radius: <?php echo esc_attr($mpfcf7_popup_border_radious); ?>;

        }
       .custom-success-popup .swal-text {
            color: <?php echo esc_attr($mpfcf7_popup_text_color); ?>;
        }
       .custom-success-popup .swal-button {
            background-color: <?php echo esc_attr($mpfcf7_btn_background_color); ?>!important;
        }

        .custom-failure-overlay{
            background-color: <?php echo esc_attr($mpfcf7_failure_background_overlay); ?>;
        }

        .custom-failure-popup {
            width: <?php echo esc_attr($mpfcf7_popup_failure_width); ?>;
            background-color: <?php echo esc_attr($mpfcf7_failure_background_color); ?>;
            border: <?php echo esc_attr($mpfcf7_popup_failure_border_width); ?> solid;
            border-color: <?php echo esc_attr($mpfcf7_failure_border_color); ?>;
            border-radius: <?php echo esc_attr($mpfcf7_popup_failure_border_radius); ?>;
        }

        .custom-failure-popup .swal-text{
            color: <?php echo esc_attr($mpfcf7_failure_text_color); ?>;
        }

        .custom-failure-popup .swal-button{
            background-color: <?php echo esc_attr($mpfcf7_failure_btn_background_color); ?>!important;
        }
        .swal-icon--success:after, .swal-icon--success:before{
            display: none;
        }
        .swal-icon--success__hide-corners{
            display: none;
        }
    </style>
<?php

}
add_action( 'wp_footer', 'MPFCF7_popup_customize' );

function MPFCF7_admin_customize () {
    ?>
    <style type="text/css">
        fieldset.verions_pro {
            pointer-events: none;
            opacity: 0.7;
        }
    </style>
    <?php
}
add_action( 'admin_footer', 'MPFCF7_admin_customize' );
