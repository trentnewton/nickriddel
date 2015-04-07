<?php

/*
 * creates the settings page for the plugin
*/

class cscf_settings
{
    public
    function __construct()
    {

        if (is_admin()) {
            add_action('admin_menu', array(
                $this,
                'add_plugin_page'
            ));
            add_action('admin_init', array(
                $this,
                'page_init'
            ));
        }
    }

    public
    function add_plugin_page()
    {

        // This page will be under "Settings"
        add_options_page(__('Contact Form Settings', 'contactform'), __('Contact Form', 'contactform'), 'manage_options', 'contact-form-settings', array(
            $this,
            'create_admin_page'
        ));
    }

    public
    function create_admin_page()
    {
        ?>

        <?php screen_icon(); ?><h2><?php _e('Contact Form Settings', 'contactform'); ?></h2>
        <hr/>

        <div>
            <p><?php _e('You are using version', 'contactform'); ?> <?php echo CSCF_VERSION_NUM; ?></p>

            <p class="howto"><?php _e("Please Note: To add the contact form to your page please add the text", "contactform"); ?>
                <code>[cscf-contact-form]</code> <?php _e("to your post or page.", "contactform"); ?></p>

            <form method="post" action="options.php">
                <?php
                submit_button();

                /* This prints out all hidden setting fields*/
                settings_fields('test_option_group');
                do_settings_sections('contact-form-settings');

                submit_button();
                ?>
            </form>
        </div>
    <?php
    }

    public
    function page_init()
    {
        add_settings_section('section_recaptcha', '<h3>' . __('ReCAPTCHA Settings', 'contactform') . '</h3>', array(
            $this,
            'print_section_info_recaptcha'
        ), 'contact-form-settings');
        register_setting('test_option_group', CSCF_OPTIONS_KEY, array(
            $this,
            'check_form'
        ));
        add_settings_field('use_recaptcha', __('Use reCAPTCHA :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_recaptcha', array(
            'use_recaptcha'
        ));
        add_settings_field('theme', __('reCAPTCHA Theme :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_recaptcha', array(
            'theme'
        ));
        add_settings_field('recaptcha_public_key', __('reCAPTCHA Public Key :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_recaptcha', array(
            'recaptcha_public_key'
        ));
        add_settings_field('recaptcha_private_key', __('reCAPTCHA Private Key :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_recaptcha', array(
            'recaptcha_private_key'
        ));
        add_settings_section('section_message', '<h3>' . __('Message Settings', 'contactform') . '</h3>', array(
            $this,
            'print_section_info_message'
        ), 'contact-form-settings');
        add_settings_field('recipient_emails', __('Recipient Emails :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'recipient_emails'
        ));
        add_settings_field('confirm-email', __('Confirm Email Address :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'confirm-email'
        ));
        add_settings_field('email-sender', '<span style="color:red;">' . __('*New*','contactform') . '</span> ' . __('Allow users to email themselves a copy :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'email-sender'
        ));
        add_settings_field('override-from', __('Override \'From\' Address :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'override-from'
        ));
        add_settings_field('from-email', __('\'From\' Email Address :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'from-email'
        ));
        add_settings_field('subject', __('Email Subject :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'subject'
        ));
        add_settings_field('message', __('Message :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'message'
        ));
        add_settings_field('sent_message_heading', __('Message Sent Heading :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'sent_message_heading'
        ));
        add_settings_field('sent_message_body', __('Message Sent Content :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_message', array(
            'sent_message_body'
        ));
        add_settings_section('section_styling', '<h3>' . __('Validation', 'contactform') . '</h3>', array(
            $this,
            'print_section_info_styling'
        ), 'contact-form-settings');
        add_settings_field('use_client_validation', __('Use client side validation (AJAX) :', 'contactform'), array(
            $this,
            'create_fields'
        ), 'contact-form-settings', 'section_styling', array(
            'use_client_validation'
        ));
    }

    public
    function check_form($input)
    {

        //recaptcha theme
        if (isset($input['theme'])) $input['theme'] = filter_var($input['theme'], FILTER_SANITIZE_STRING);

        //recaptcha_public_key
        if (isset($input['recaptcha_public_key'])) $input['recaptcha_public_key'] = filter_var($input['recaptcha_public_key'], FILTER_SANITIZE_STRING);

        //recaptcha_private_key
        if (isset($input['recaptcha_private_key'])) $input['recaptcha_private_key'] = filter_var($input['recaptcha_private_key'], FILTER_SANITIZE_STRING);

        //sent_message_heading
        $input['sent_message_heading'] = filter_var($input['sent_message_heading'], FILTER_SANITIZE_STRING);

        //sent_message_body
        $input['sent_message_body'] = filter_var($input['sent_message_body'], FILTER_SANITIZE_STRING);

        //message
        $input['message'] = filter_var($input['message'], FILTER_SANITIZE_STRING);

        //recipient_emails
        foreach ($input['recipient_emails'] as $key => $recipient) {
            if (!filter_var($input['recipient_emails'][$key], FILTER_VALIDATE_EMAIL)) {
                unset($input['recipient_emails'][$key]);
            }
        }

        //from
        if (!filter_var($input['from-email'], FILTER_VALIDATE_EMAIL)) {
            unset($input['from-email']);
        }

        //subject
        $input['subject'] = trim(filter_var($input['subject'], FILTER_SANITIZE_STRING));
        if (empty($input['subject'])) {
            unset($input['subject']);
        }

        if (isset($_POST['add_recipient'])) {
            $input['recipient_emails'][] = "";
        }

        if (isset($_POST['remove_recipient'])) {
            foreach ($_POST['remove_recipient'] as $key => $element) {
                unset($input['recipient_emails'][$key]);
            }
        }

        //tidy up the keys
        $tidiedRecipients = array();
        foreach ($input['recipient_emails'] as $recipient) {
            $tidiedRecipients[] = $recipient;
        }
        $input['recipient_emails'] = $tidiedRecipients;


        return $input;
    }

    public
    function print_section_info_recaptcha()
    {
        print __('Enter your reCAPTCHA settings below :', 'contactform');
        print "<p>" . __('To use reCAPTCHA you must get an API key from', 'contactform') . " <a target='_blank' href='" . cscf_recaptcha_get_signup_url($_SERVER['SERVER_NAME']) . "'>Google reCAPTCHA</a></p>";
    }

    public
    function print_section_info_message()
    {
        print __('Enter your message settings below :', 'contactform');
    }

    public
    function print_section_info_styling()
    {

        //print 'Enter your styling settings below:';

    }

    public
    function create_fields($args)
    {
        $fieldname = $args[0];

        switch ($fieldname) {
            case 'use_recaptcha':
                $checked = cscf_PluginSettings::UseRecaptcha() == true ? "checked" : "";
                ?><input type="checkbox" <?php echo $checked; ?>  id="use_recaptcha"
                         name="<?php echo CSCF_OPTIONS_KEY; ?>[use_recaptcha]"><?php
                break;
            case 'load_stylesheet':
                $checked = cscf_PluginSettings::LoadStyleSheet() == true ? "checked" : "";
                ?><input type="checkbox" <?php echo $checked; ?>  id="load_stylesheet"
                         name="<?php echo CSCF_OPTIONS_KEY; ?>[load_stylesheet]"><?php
                break;
            case 'recaptcha_public_key':
                $disabled = cscf_PluginSettings::UseRecaptcha() == false ? "readonly" : "";
                ?><input <?php echo $disabled; ?> type="text" size="60" id="recaptcha_public_key"
                                                  name="<?php echo CSCF_OPTIONS_KEY; ?>[recaptcha_public_key]"
                                                  value="<?php echo cscf_PluginSettings::PublicKey(); ?>" /><?php
                break;
            case 'recaptcha_private_key':
                $disabled = cscf_PluginSettings::UseRecaptcha() == false ? "readonly" : "";
                ?><input <?php echo $disabled; ?> type="text" size="60" id="recaptcha_private_key"
                                                  name="<?php echo CSCF_OPTIONS_KEY; ?>[recaptcha_private_key]"
                                                  value="<?php echo cscf_PluginSettings::PrivateKey(); ?>" /><?php
                break;
            case 'recipient_emails':
                ?>
                <ul id="recipients"><?php
                foreach (cscf_PluginSettings::RecipientEmails() as $key => $recipientEmail) {
                    ?>
                    <li class="recipient_email" data-element="<?php echo $key; ?>">
                        <input class="enter_recipient" type="email" size="50"
                               name="<?php echo CSCF_OPTIONS_KEY; ?>[recipient_emails][<?php echo $key ?>]"
                               value="<?php echo $recipientEmail; ?>"/>
                        <input class="add_recipient" title="Add New Recipient" type="submit" name="add_recipient"
                               value="+">
                        <input class="remove_recipient" title="Remove This Recipient" type="submit"
                               name="remove_recipient[<?php echo $key; ?>]" value="-">
                    </li>

                <?php
                }
                ?></ul><?php
                break;
            case 'confirm-email':
                $checked = cscf_PluginSettings::ConfirmEmail() == true ? "checked" : "";
                ?><input type="checkbox" <?php echo $checked; ?>  id="confirm-email"
                         name="<?php echo CSCF_OPTIONS_KEY; ?>[confirm-email]"><?php
                break;
            case 'override-from':
                $checked = cscf_PluginSettings::OverrideFrom() == true ? "checked" : "";
                ?><input type="checkbox" <?php echo $checked; ?>  id="override-from"
                         name="<?php echo CSCF_OPTIONS_KEY; ?>[override-from]"><?php
                break;
            case 'email-sender':
                $checked = cscf_PluginSettings::EmailToSender() == true ? "checked" : "";
                ?><input type="checkbox" <?php echo $checked; ?>  id="email-sender"
                         name="<?php echo CSCF_OPTIONS_KEY; ?>[email-sender]"><?php
                break;
            case 'from-email':
                $disabled = cscf_PluginSettings::OverrideFrom() == false ? "readonly" : "";
                ?><input <?php echo $disabled; ?> type="text" size="60" id="from-email"
                                                  name="<?php echo CSCF_OPTIONS_KEY; ?>[from-email]"
                                                  value="<?php echo cscf_PluginSettings::FromEmail(); ?>" /><?php
                break;
            case 'subject':
                ?><input type="text" size="60" id="subject" name="<?php echo CSCF_OPTIONS_KEY; ?>[subject]"
                         value="<?php echo cscf_PluginSettings::Subject(); ?>" /><?php
                break;
            case 'sent_message_heading':
                ?><input type="text" size="60" id="sent_message_heading"
                         name="<?php echo CSCF_OPTIONS_KEY; ?>[sent_message_heading]"
                         value="<?php echo cscf_PluginSettings::SentMessageHeading(); ?>" /><?php
                break;
            case 'sent_message_body':
                ?><textarea cols="63" rows="8"
                            name="<?php echo CSCF_OPTIONS_KEY; ?>[sent_message_body]"><?php echo cscf_PluginSettings::SentMessageBody(); ?></textarea><?php
                break;
            case 'message':
                ?><textarea cols="63" rows="8"
                            name="<?php echo CSCF_OPTIONS_KEY; ?>[message]"><?php echo cscf_PluginSettings::Message(); ?></textarea><?php
                break;
            case 'theme':
                $theme = cscf_PluginSettings::Theme();
                $disabled = cscf_PluginSettings::UseRecaptcha() == false ? "disabled" : "";
                ?>
                <select <?php echo $disabled; ?> id="theme" name="<?php echo CSCF_OPTIONS_KEY; ?>[theme]">
                    <option <?php echo $theme == "red" ? "selected" : ""; ?>
                        value="red"><?php _e('Red', 'contactform'); ?></option>
                    <option <?php echo $theme == "white" ? "selected" : ""; ?>
                        value="white"><?php _e('White', 'contactform'); ?></option>
                    <option <?php echo $theme == "blackglass" ? "selected" : ""; ?>
                        value="blackglass"><?php _e('Blackglass', 'contactform'); ?></option>
                    <option <?php echo $theme == "clean" ? "selected" : ""; ?>
                        value="clean"><?php _e('Clean', 'contactform'); ?></option>
                </select>
                <?php
                break;
            case 'use_client_validation':
                $checked = cscf_PluginSettings::UseClientValidation() == true ? "checked" : "";
                ?><input type="checkbox" <?php echo $checked; ?>  id="use_client_validation"
                         name="<?php echo CSCF_OPTIONS_KEY; ?>[use_client_validation]"><?php
                break;
            default:
                break;
        }
    }
}

