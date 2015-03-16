
          <h2>Contact Information</h2>
          <p></p>
          <ul class="input-table">
              <li>
                  <label for="phone">Phone</label>
                  <div class="input">
                    <input name="phone" type="text" id="phone" value="<?php echo get_option('msdsocial_phone'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="tracking_phone">Tracking Phone</label>
                  <div class="input">
                    <input name="tracking_phone" type="text" id="tracking_phone" value="<?php echo get_option('msdsocial_tracking_phone'); ?>" class="regular-text" />
                  <span class="note">If you fill this in, this is what will display in the browser, and the "real" phone number will be available only in the code.</span>
                  </div>
              </li>
              <li>
                  <label for="tollfree">Toll Free</label>
                  <div class="input">
                    <input name="tollfree" type="text" id="tollfree" value="<?php echo get_option('msdsocial_tollfree'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="tracking_tollfree">Tracking Toll Free</label>
                  <div class="input">
                    <input name="tracking_tollfree" type="text" id="tracking_tollfree" value="<?php echo get_option('msdsocial_tracking_tollfree'); ?>" class="regular-text" /> 
                  <span class="note">If you fill this in, this is what will display in the browser, and the "real" phone number will be available only in the code.</span>
                  </div>
              </li>
              <li>
                  <label for="fax">Fax</label>
                  <div class="input">
                    <input name="fax" type="text" id="fax" value="<?php echo get_option('msdsocial_fax'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="email">Email</label>
                  <div class="input">
                    <input name="email" type="text" id="email" value="<?php echo get_option('msdsocial_email'); ?>" class="regular-text" />
                  <span class="note">Primary contact email. This may be displayed on the website.</span>
                  </div>
              </li>
          </ul>
          <h2>Mailing Information</h2>
          <p>If you have a separate address for mailing, such as a PO Box, please enter that here.</p>
          <ul class="input-table">
              
              <li>
                  <label for="careof">Care Of</label>
                  <div class="input">
                    <input name="careof" type="text" id="careof" value="<?php echo get_option('msdsocial_careof'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="mailing_street">Street Address</label>
                  <div class="input">
                <input name="mailing_street" type="text" id="mailing_street" value="<?php echo get_option('msdsocial_mailing_street'); ?>" class="regular-text" /><br />
                <input name="mailing_street2" type="text" id="mailing_street2" value="<?php echo get_option('msdsocial_mailing_street2'); ?>" class="regular-text" />
                </div>
              </li>
              <li>
                  <label for="mailing_city">City</label>
                  <div class="input">
                <input name="mailing_city" type="text" id="mailing_city" value="<?php echo get_option('msdsocial_mailing_city'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="mailing_state">State</label>
                  <div class="input">
                <select name="mailing_state" id="mailing_state" class="regular-text" />
                    <option>Select</option>
                    <?php foreach($states AS $state => $st){ ?>
                        <option value="<?php print $st; ?>"<?php print get_option('msdsocial_mailing_state')==$st?' SELECTED':'';?>><?php print ucwords(strtolower($state)); ?></option>
                    <?php } ?>
                </select>
                </div>
              </li>
              <li>
                  <label for="mailing_zip">ZIP Code</label>
                  <div class="input">
                <input name="mailing_zip" type="text" id="mailing_zip" value="<?php echo get_option('msdsocial_mailing_zip'); ?>" class="regular-text" />
                  </div>
              </li>
          </ul>