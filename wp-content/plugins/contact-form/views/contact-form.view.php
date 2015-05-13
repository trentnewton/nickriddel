<div id="cscf" class="cscfBlock">
    <div class="row fade-in-down">
        <div class="small-12 columns">
            <div data-alert class="alert-box success radius cscfMessageSent" style="display:none;">
                <?php echo $messageSentView->Render(); ?>
                <a href="#" class="close">&times;</a>
            </div>
            <div data-alert class="alert-box warning radius cscfMessageNotSent" style="display:none;">
                <?php echo $messageNotSentView->Render(); ?>
                <a href="#" class="close">&times;</a>
            </div>
        </div>
    </div>
    <div class="cscfForm">
        <div class="row fade-in-down">
            <div class="small-12 columns">
                <h4 class="subheader"><?php echo $message; ?></h4>
            </div>
        </div>
        <div class="row space-top">
            <div class="small-12 columns">
                <form role="form" id="frmCSCF" name="frmCSCF" method="post">
                    <?php wp_nonce_field('cscf_contact','cscf_nonce'); ?>
                    <input type="hidden" name="post-id" value="<?php echo $postID; ?>">
                    <?php if (isset($contact->Errors['recaptcha'])) { ?>
                        <div class="control-group form-group">
                            <p class="text-error"><?php echo $contact->Errors['recaptcha']; ?></p>
                        </div>
                    <?php } ?>
                    <div class="row fade-in-up">
                        <!-- name -->
                        <div class="small-12 medium-6 columns">
                            <div class="control-group form-group<?php if (isset($contact->Errors['name'])) echo ' error has-error'; ?>">
                                <div class="row collapse prefix-radius">
                                  <div class="small-3 columns">
                                    <span class="prefix"><?php _e('Name','cleanansimple');?></span>
                                  </div>
                                  <div class="small-9 columns">
                                    <input class="form-control input-xlarge"
                                       data-rule-required="true"
                                       data-msg-required="<?php _e('Please give your name.','cleanansimple');?>"
                                       type="text" id="cscf_name" name="cscf[name]" 
                                       value="<?php echo esc_attr($contact->Name); ?>"
                                       placeholder="<?php _e('Enter your full name here','cleanansimple');?>"
                                    />
                                  </div>
                                </div>
                                <label for="cscf_name" class="help-inline help-block error" style="display:<?php echo isset($contact->Errors['name']) ? 'block' : 'none'; ?>;">
                                    <?php if (isset($contact->Errors['name'])) echo $contact->Errors['name']; ?>
                                </label>
                            </div>
                        </div>
                        <!--email address-->
                        <div class="small-12 medium-6 columns">
                            <div class="control-group form-group<?php if (isset($contact->Errors['email'])) echo ' error has-error'; ?>">
                                <div class="row collapse prefix-radius">
                                    <div class="small-3 columns">
                                        <span class="prefix"><?php _e('Email','cleanansimple');?></span>
                                    </div>
                                    <div class="small-9 columns">
                                        <input class="form-control"
                                            data-rule-required="true"
                                            data-rule-email="true"
                                            data-msg-required="<?php _e('Please give your email address.','cleanansimple');?>"
                                            data-msg-email="<?php _e('Please enter a valid email address.','cleanansimple');?>"
                                            type="email" id="cscf_email" name="cscf[email]" 
                                            value="<?php echo esc_attr($contact->Email); ?>"
                                            placeholder="<?php _e('Enter your email here','cleanansimple');?>"
                                        />
                                    </div>
                                </div>
                                <label for="cscf_email" class="help-inline help-block error" style="display:<?php echo isset($contact->Errors['email']) ? 'block' : 'none'; ?>;">
                                    <?php if (isset($contact->Errors['email'])) echo $contact->Errors['email']; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row fade-in-up">
                        <!-- message -->
                        <div class="small-12 columns">
                            <div class="control-group form-group<?php if (isset($contact->Errors['message'])) echo ' error has-error'; ?>">
                                <textarea class="form-control"
                                    data-rule-required="true"
                                    data-msg-required="<?php _e('Please give a message.','cleanansimple');?>"
                                    id="cscf_message" name="cscf[message]" rows="5" 
                                    placeholder="<?php _e('Enter your message here','cleanansimple');?>"><?php echo esc_textarea($contact->Message); ?></textarea>
                                <label for="cscf_message" class="help-inline help-block error" style="display:<?php echo isset($contact->Errors['message']) ? 'block' : 'none'; ?>;">
                                    <?php if (isset($contact->Errors['message'])) echo $contact->Errors['message']; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <?php if ( cscf_PluginSettings::EmailToSender() ) { ?>
                    <!-- email to sender -->
                    <div class="control-group form-group<?php if (isset($contact->Errors['email-sender'])) echo ' error has-error'; ?>">
                        <label for="cscf_email-sender"><?php _e('Send me a copy:','cleanandsimple');?></label>
                        <div class="<?php echo cscf_PluginSettings::InputIcons() ? "input-group" : ""; ?>">
                            <?php if ( cscf_PluginSettings::InputIcons() == true ) { ?>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
                            <?php } ?>
                            <input <?php echo $contact->EmailToSender==true ? 'checked' : ''; ?> type="checkbox" id="cscf_email-sender" name="cscf[email-sender]">
                        </div>
                        <label for="cscf_email-sender" class="help-inline help-block error" style="display:<?php echo isset($contact->Errors['email-sender']) ? 'block' : 'none'; ?>;">
                            <?php if (isset($contact->Errors['email-sender'])) echo $contact->Errors['email-sender']; ?>
                        </label>
                    </div>
                    <?php } ?>
                    <!-- recaptcha -->
                    <?php if ( $contact->RecaptchaPublicKey<>'' && $contact->RecaptchaPrivateKey<>'') { ?>
                        <script type="text/javascript">
                         var RecaptchaOptions = {
                            theme : '<?php echo cscf_PluginSettings::Theme(); ?>'
                         };
                         </script>            
                        <div class="control-group form-group<?php 
                            if (isset($contact->Errors['recaptcha'])) echo ' error'; ?>">
                                <div id="recaptcha_div">
                                    <?php echo cscf_recaptcha_get_html($contact->RecaptchaPublicKey,null,isset($_SERVER['HTTPS'])); ?>
                                <div for="cscf_recaptcha" class="help-block has-error error"><?php if (isset($contact->Errors['recaptcha'])) echo $contact->Errors['recaptcha']; ?></div> 
                             </div> 
                        </div>  
                    <?php } ?>
                    <div class="row fade-in-up">
                        <div class="small-12 columns text-center">
                            <input type="submit" class="button" value="<?php _e('Send','cleanansimple');?>"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>