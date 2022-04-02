<?php
/**
 * Template Name: Contact Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 
<?php 
  $email = $_GET['email'];
?>
  <body class="b-g-b">
    <div class="auto b-fff">
      <div class="auto-container"> 
        <div class=" mr-t-30 mr-b-40 mr-b-20-s0 mr-l-20-s0">
          <a href="<?php echo get_site_url(); ?>">
            <img class="menu-logo" src="<?php  echo get_template_directory_uri() . '/images/logo-blue.svg' ?>" />
          </a>
        </div>
        
        <div class="mo-col-6 pa-b-60 mo-col-12-s0 pa-20-s0">
          <div class="f-b f-36 c-4-b w-550 f-24-s0 w-300-s0"><p>Trusted by top Banks, Enterprises and Brands in Vietnam</p></div>
          <div class="f-n f-18 mr-t-35 w-550 mr-t-15-s0 f-14-s0 w-300-s0"><p>As a tech consulting firm and a platform provider, we have tons of experience in support companies address their business challenges. Our experts are here to listen and show you how our platform can help you. <br><br>
          <strong>Fill in the form or call <a href="tel:+84 90 343 9982">+84 90 343 9982</a></strong></p></div>
        </div>
      </div>
    </div>

    <div class="w-100" style="height: 560px;">
      <div class="auto-container"> 
        <div class="mo-col-6 pa-t-60 pa-l-50 mo-col-12-s0 pa-20-s0">
          <div class="pa-l-40 upper-case f-20 c-fff w-500">MOBIO Vietnam Application Software Join Stock Company</div>
          <div class="d-flex mr-t-30 ">
           <div><img src="<?php echo get_template_directory_uri() . '/images/company-adress.svg'  ?>" style="width:15px" /></div><div class="f-18 c-fff w-450 pa-l-20"><strong>Headquarter:</strong> 17th Floor, HL Tower, 82 Duy Tan Str., Dich Vong Hau Ward, Cau Giay Dis., Hanoi</div>
          </div>
          <div class="d-flex mr-t-30 ">
          <div><img src="<?php echo get_template_directory_uri() . '/images/company-adress.svg'  ?>" style="width:15px" /></div><div class="f-18 c-fff w-450 pa-l-20"><strong>Southern Branch:</strong> 7th Floor, Minh Long Tower, No.17, Ba Huyen Thanh Quan Str., District 3, Ho Chi Minh City </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mr-t-20-s0 mr-l-20-s0 mr-r-20-s0">
      <div class="contact-form b-sd auto position-absolute mr-b-20 pa-l-40 pa-r-40 pa-t-70 pa-b-35 pa-t-40 pa-b-30
         b-r-10 mo-col-12-s0 f-14 pa-20-s0 f-14-s0 mr-b-20-s0">
        <div class="text-center f-b f-20 f-20-s0"><p>REQUEST A FREE DEMO</p></div>
        <div class="f-n f-18 text-center mr-t-15 f-14-s0"><p>Tell us your requirements and we’ll reach you shortly!</p></div>
        <div class="mo-row row mr-t-50 mr-t-20-s0">
          <div class="mo-col-6 pa-r-10 first-name">
            <div class="f-b mr-b-5"><p>FIRST NAME<span class="c-red">*</span></p></div>
            <input class="" placeholder="First name" />
            <div class="c-red mr-t-5 f-12 mr-l-20 msg-error d-none">This field cannot be blank</div>
          </div>
          <div class="mo-col-6 pa-l-10 last-name">
            <div class="f-b mr-b-5"><p>LAST NAME<span class="c-red">*</span></p></div>
            <input class="" placeholder="Last Name" />
            <div class="c-red mr-t-5 f-12 mr-l-20 msg-error d-none">This field cannot be blank</div>
          </div>
        </div>

        <div class="email">
          <div class="f-b mr-t-20 mr-b-5"><p>EMAIL<span class="c-red">*</span></p></div>
          <input placeholder="Work Email" value="<?php echo $email ? $email : '' ; ?>" />
          <div class="c-red mr-t-5 f-12 mr-l-20 msg-error d-none">This field cannot be blank</div>
        </div>
        

        <!-- <div class="mo-row row mr-t-20">
          <div class="mo-col-6 pa-r-10 company-name">
            <div class="f-b mr-b-5"><p>COMPANY<span class="c-red">*</span></p></div>
            <input class="" placeholder="Company Name" />
          </div>
          <div class="mo-col-6 pa-l-10">
            <div class="f-b mr-b-5"><p>JOB POSITION<span class="c-red">*</span></p></div>
            <input class="job" placeholder="Job Position" />
          </div>
        </div> -->

        <div class="mo-row row mr-t-20">
          <div class="mo-col-6 phone-number pa-r-10">
            <div class="f-b mr-b-5"><p>PHONE</p></div>
            <input class="" placeholder="Phone Number" />
          </div>

          <div class="mo-col-6 pa-l-10 country">
            <div class="f-b mr-b-5"><p>COUNTRY<span class="c-red">*</span></p></div>
            <!-- <input placeholder="Select Country" /> -->
            <div class="position-relative select-dropdown">
              <select class="" class="c-0-4">
                <option value="" selected>Select Country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antartica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo">Congo, the Democratic Republic of the</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                <option value="Croatia">Croatia (Hrvatska)</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="France Metropolitan">France, Metropolitan</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                <option value="Holy See">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran (Islamic Republic of)</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia, Federated States of</option>
                <option value="Moldova">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                <option value="Saint LUCIA">Saint LUCIA</option>
                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                <option value="Span">Spain</option>
                <option value="SriLanka">Sri Lanka</option>
                <option value="St. Helena">St. Helena</option>
                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Viet Nam</option>
                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Serbia">Serbia</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
              <div class="arrow position-absolute"></div>
            </div>
            <div class="c-red mr-t-5 f-12 mr-l-20 msg-error d-none">This field cannot be blank</div>
          </div>
          
        </div>

        <div class="mo-row row mr-t-20">
          <div class="w-100 industry">
            <div class="f-b mr-b-5"><p>INDUSTRY<span class="c-red">*</span></p></div>
            <!-- <input placeholder="Select Country" /> -->
            <div class="position-relative select-dropdown w-100">
              <select class="" class="c-0-4">
                <option value="" selected>Select your company industry</option>
                <option value="Bank">Bank</option>
                <option value="Retail">Retail</option>
                <option value="Fintech">Fintech</option>
                <option value="E-wallet">E-wallet</option>
                <option value="Insurance">Insurance</option>
                <option value="Real Estate">Real Estate</option>
                <option value="Technology">Technology</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Others">Others</option>
              </select>
              <div class="arrow position-absolute"></div>
            </div>
            <div class="c-red mr-t-5 f-12 mr-l-20 msg-error d-none">This field cannot be blank</div>
          </div>
        </div>

        <div class="f-b mr-t-20 mr-b-5"><p>REQUEST</p></div>
        <textarea class="request" placeholder="Tell us something about your business and your needs"></textarea>

        <div class="mr-t-20 f-n f-14 f-12-s0">
          <p>MOBIO needs the contact information you provide to contact you about our product & services. You may unsubcribe at anytime. For more information on how to unsubscribe & our privacy practises, please review our privacy policy. </p>
        </div>

        <div class="text-center mr-t-30 mr-t-20-s0">
          <button class="btn-submit">SUBMIT</button>
        </div>

      </form>
    </div>
    
    <?php
    get_template_part('template-parts/modal-thankyou',null,
        array(
        ));
    ?>

  </body>
</html>