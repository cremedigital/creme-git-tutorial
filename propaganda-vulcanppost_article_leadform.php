
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
                    <h2>If you'd like to learn more about the solution, drop your details below and we'll reach out to you.</h2>
                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>

                <!–– EDIT - Lead Form Fields ––>
                <!–– EDIT - duplicate field blocks according to lead form fields created on propaganda cremedigital com forms ––>
                <!–– Don't edit classes ––>
                <!–– 'for' and 'id' have to be identical ––>
                <!–– don't edit type="text" ––>

                    <div class="mc-field-group">
                        <label for="FNAME">First Name <span class="asterisk">*</span></label>
                        <input type="text" value="" name="FNAME" id="FNAME" required>
                    </div>

                    <div class="mc-field-group">
                        <label for="LNAME">Last Name <span class="asterisk">*</span></label>
                        <input type="text" value="" name="LNAME" id="LNAME" required>
                    </div>

                    <div class="mc-field-group">
                        <label for="COMPANY">Company <span class="asterisk">*</span></label>
                        <input type="text" value="" name="COMPANY" id="COMPANY" required>
                    </div>

                    <div class="mc-field-group">
                        <label for="EMAIL">Email Address <span class="asterisk">*</span></label>
                        <input type="email" value="" name="EMAIL" class="email" id="EMAIL" required>
                    </div>

                    <div class="mc-field-group">
                        <label for="PHONE">Phone Number <span class="asterisk">*</span></label>
                        <input type="number" value="" placeholder="0060123456789" name="PHONE" id="PHONE">
                    </div>

                    <!–– Don't edit this ––>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>

                    <!–– Don't edit this ––>
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <?php if (isset($form_tools_form_id)) : ?>
                            <input type="text" name="form_tools_form_id" tabindex="-1" value="<?= $form_tools_form_id ?>">
                        <?php endif; ?>
                    </div>

                    <!–– SUBMIT BUTTON TEXT: EDIT 'value', 'name' if requested by client ––>
                    <div class="clear">
                        <input type="submit" value="Submit" name="submit" id="mc-embedded-subscribe" class="button">
                    </div>
                </div>
            </form>

            
            <div class="thank-you" style="display: none;">
            <!–– Thank-you message text in animation: EDIT if requested by client ––>
                <h2>We have recorded your details. Thank you!</h2>
            </div>
        </div>
    </div>
</div>