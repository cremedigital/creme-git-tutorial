
<!–– CSS Styles for Propaganda articles ––>
<style>
    /* Inline CSS styles goes here - not needed for normal Propaganda articles, but can be edited */
</style>

<!–– This line adds support for ajax form animation and form submission to creme server ––>
<script async type='text/javascript' src='/wp-content/plugins/creme-digital/assets/js/formtools.js'></script>

<!–– PROPAGANDA LEADFORM ––>
<div class="cdp-leadform">
    <div class="cdp-form-container">
        <div id="mc_embed_signup">
            <form id="propaganda-form" action="https://propaganda.cremedigital.com/forms/process.php?callback=?" method="post" target="_blank">
                
                <!–– EDIT - Information text inside the form - edit according to client materials ––>
                <div id="mc_embed_signup_scroll">
                    <h2>If you'd like to learn more about the solution, drop your details below and we'll reach out to you. Give me all your money!</h2>
                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>


                <!–– EDIT - Lead Form Fields ––>
                <!–– EDIT - duplicate field blocks according to lead form fields created on propaganda cremedigital com forms ––>
                <!–– Don't edit classes ––>
                <!–– Edit 'for' key and value, 'type', 'name', 'id' ––>

                    <div class="mc-field-group">
                        <label for="BANKNO">Bank Account No. <span class="asterisk">*</span></label>
                        <input type="text" value="" name="BANKNO" id="BANKNO" required>
                    </div>

                   
                <!–– Don't edit this ––>
                      
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                  
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <?php if (isset($form_tools_form_id)) : ?>
                            <input type="text" name="form_tools_form_id" tabindex="-1" value="<?= $form_tools_form_id ?>">
                        <?php endif; ?>
                    </div>

                    <!–– SUBMIT BUTTON TEXT: EDIT 'value', 'name' if requested by client ––>
                    <div class="clear">
                        <input type="submit" value="Do it now" name="submit" id="mc-embedded-subscribe" class="button">
                    </div>
                </div>
            </form>

            <!–– Thank-you message text in animation: EDIT if requested by client ––>
            <div class="thank-you" style="display: none;">
                <h2>We have recorded your details. Thank you!</h2>
            </div>
        </div>
    </div>
</div>