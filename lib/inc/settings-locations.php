<?php
    for($n=0;$n<=10;$n++){
        $selected = get_option('msdsocial_num_locations')==$n?' selected=selected':'';
        $numbers_select .= '
        <option value="'.$n.'"'.$selected.'>'.$n.'</option>';
    }
?>
          <h2>Primary Location Information</h2>
          <p>Please input information for the primary physical location. If you have a separate address for mailing, please use the Contact tab to supply a mailing address.</p>
          <ul class="input-table">
              <li>
                  <label for="biz_name">Business Name</label>
                  <div class="input">
                    <input name="biz_name" type="text" id="biz_name" value="<?php echo get_option('msdsocial_biz_name'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="street">Street Address</label>
                  <div class="input">
                <input name="street" type="text" id="street" value="<?php echo get_option('msdsocial_street'); ?>" class="regular-text" /><br />
                <input name="street2" type="text" id="street2" value="<?php echo get_option('msdsocial_street2'); ?>" class="regular-text" />
                </div>
              </li>
              <li>
                  <label for="city">City</label>
                  <div class="input">
                <input name="city" type="text" id="city" value="<?php echo get_option('msdsocial_city'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="state">State</label>
                  <div class="input">
                <select name="state" id="state" class="regular-text" />
                    <option>Select</option>
                    <?php foreach($states AS $state => $st){ ?>
                        <option value="<?php print $st; ?>"<?php print get_option('msdsocial_state')==$st?' SELECTED':'';?>><?php print ucwords(strtolower($state)); ?></option>
                    <?php } ?>
                </select>
                </div>
              </li>
              <li>
                  <label for="zip">ZIP Code</label>
                  <div class="input">
                <input name="zip" type="text" id="zip" value="<?php echo get_option('msdsocial_zip'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="lat">Latitude</label>
                  <div class="input">
                <input name="lat" type="text" id="lat" value="<?php echo get_option('msdsocial_lat'); ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="lng">Longitude</label>
                  <div class="input">
                <input name="lng" type="text" id="lng" value="<?php echo get_option('msdsocial_lng'); ?>" class="regular-text" />
                  </div>
              </li>
          </ul>
          <h2>Additional Locations</h2>
          <p>Show <select name="num_locations" id="num_locations"><?php print $numbers_select; ?></select> Additional Location(s)</p>
          <?php 
            $additional_locations = get_option(msdsocial_adtl_locations);
          ?>
          <?php
            for($n=1;$n<10;$n++){
                $eo = $n%2==0?' even':' odd';
          ?>
          <ul class="input-table<?php print $eo; ?>" id="adtl_location_<?php print $n ?>">
              <li>
                  <label for="location_name">Location Name</label>
                  <div class="input">
                    <input name="adtl_locations[<?php print $n ?>][location_name]" type="text" id="location_name_<?php print $n ?>" value="<?php echo $additional_locations[$n][location_name]; ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="street">Street Address</label>
                  <div class="input">
                <input id="street_<?php print $n ?>" type="text" name="adtl_locations[<?php print $n ?>][street]" value="<?php echo $additional_locations[$n][street]; ?>" class="regular-text" /><br />
                <input id="street2_<?php print $n ?>" type="text" name="adtl_locations[<?php print $n ?>][street2]" value="<?php echo $additional_locations[$n][street2]; ?>" class="regular-text" />
                </div>
              </li>
              <li>
                  <label for="city">City</label>
                  <div class="input">
                <input name="adtl_locations[<?php print $n ?>][city]" type="text" id="city_<?php print $n ?>" value="<?php echo $additional_locations[$n][city]; ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="state">State</label>
                  <div class="input">
                <select name="adtl_locations[<?php print $n ?>][state]" id="state_<?php print $n ?>" class="regular-text" />
                    <option>Select</option>
                    <?php foreach($states AS $state => $st){ ?>
                        <option value="<?php print $st; ?>"<?php print $additional_locations[$n][state]==$st?' SELECTED':'';?>><?php print ucwords(strtolower($state)); ?></option>
                    <?php } ?>
                </select>
                </div>
              </li>
              <li>
                  <label for="zip">ZIP Code</label>
                  <div class="input">
                <input name="adtl_locations[<?php print $n ?>][zip]" type="text" id="zip_<?php print $n ?>" value="<?php echo $additional_locations[$n][zip]; ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="lat">Latitude</label>
                  <div class="input">
                <input name="adtl_locations[<?php print $n ?>][lat]" type="text" id="lat_<?php print $n ?>" value="<?php echo $additional_locations[$n][lat]; ?>" class="regular-text" />
                  </div>
              </li>
              <li>
                  <label for="lng">Longitude</label>
                  <div class="input">
                <input name="adtl_locations[<?php print $n ?>][lng]" type="text" id="lng_<?php print $n ?>" value="<?php echo $additional_locations[$n][lng]; ?>" class="regular-text" />
                  </div>
              </li>
          </ul>
          <?php
          }
          ?>