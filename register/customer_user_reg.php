<?php

require_once('../includes/initialize.php');
?>
<?php


	/*if ($firstname === '') :
		$err_firstname = '<div class="error">Sorry, your name is  required</div>';
	endif; // input field empty
	if ($nationalId==='') :
		$err_nationalId = '<div class="error">Sorry, National Id is required</div>';
	endif;

	if ($lastname==='') :
		$err_lastname = '<div class="error">Sorry, your name is required</div>';
		endif;
		
	if ($phone==='') :
		$err_phone = '<div class="error">Sorry, Phone Number is required</div>';
		endif;
		
	if ($city==='') :
		$err_city = '<div class="error">Sorry, City is required</div>';
		endif;
	if ($postalcode==='') :
		$err_postalcode = '<div class="error">Sorry, Postal Code is required</div>';
		endif;
	if ($address==='') :
		$err_address = '<div class="error">Sorry, Address is required</div>';
		endif;
	if ($reference==='') :
		$err_reference = '<div class="error">Sorry, country is required</div>';
		endif;
	if (strlen($mypassword) <= 6):
		$err_passlength = '<div class="error">Sorry, the password must be at least six characters</div>';
	endif; //password not long enough


	if ($mypassword !== $mypasswordconf) :
		$err_mypassconf = '<div class="error">Sorry, passwords must match</div>';
	endif; //passwords don't match


	if ( !(preg_match('/[A-Za-z]+/', $firstname)) ) :
		$err_patternmatch = '<div class="error">Sorry, the name must be an alphabet: First</div>';
	endif; // pattern doesn't match
	
*/
//endif; //form submitted
	

?>
<?php include_layout_template('user_header.php'); ?>

<?php 
if (isset($msg)) :
 echo '<div id="formmessage"><p>', $msg , '</p></div>';
else :
 ?>				

<form id="myform" name="theform" class="group" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<span id="formerror" class="error"></span>
		
		<div id="message"></div>
		
		<fieldset id="login" title="Registration Info">
		<legend>Registration Info</legend>
		
		<ol>
		<li>
				<label for="myname">National Id <font color="#FF0000">*</font></label>
				<input type="text" name="nationalId" id="nationalId" title="Please enter your Id" autofocus placeholder="National Id" value="<?php if (isset($nationalId)) { echo $nationalId; } ?>" />
				<?php if (isset($err_nationalId)) { echo $err_nationalId; } ?>
				
			</li>
			
			<li>
				<label for="myname">First Name <font color="#FF0000">*</font></label>
				<input type="text" name="firstname" id="firstname" title="Please enter your first name" autofocus placeholder="First Name" value="<?php if (isset($firstname)) { echo $firstname; } ?>" />
				<?php if (isset($err_firstname)) { echo $err_firstname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<label for="myname">Middle Name </label>
				<input type="text" name="middlename" id="middlename" title="Please enter your middle name" autofocus placeholder="Middle Name" value="<?php if (isset($middlename)) { echo $middlename; } ?>" />
				<?php /*?><?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?><?php */?>
			</li>
			
			<li>
				<label for="myname">Last Name <font color="#FF0000">*</font></label>
				<input type="text" name="lastname" id="lastname" title="Please enter your last name" autofocus placeholder="Last Name" value="<?php if (isset($lastname)) { echo $lastname; } ?>" />
				<?php if (isset($err_lastname)) { echo $err_lastname; } ?>
				
			</li>
			
			<li>
				<label for="myname">Email <font color="#FF0000">*</font></label>
				<input type="email" name="email" id="email" title="Please enter your email" autofocus placeholder="Email Address" value="<?php if (isset($email)) { echo $email; } ?>" />
				<?php if (isset($err_email)) { echo $err_email; } ?>
				
			</li>
			
			<li>
				<label for="myname">Phone <font color="#FF0000">*</font></label>
				<input type="tel" name="phone" id="phone" title="Please enter your phone number" autofocus placeholder="Phone Number" value="<?php if (isset($phone)) { echo $phone; } ?>" />
				<?php if (isset($err_phone)) { echo $err_phone; } ?>
				
			</li>
		</ol>
			
			<div class="buttonnav next">next</div>
		</fieldset>
	<fieldset id="other" class="hidden" title="Contact Info">
		<legend>Contact Info</legend>
			
			<ol>
			<li>
				<label for="myname">Mailing Address <font color="#FF0000">*</font></label>
				<input type="text" name="address" id="address" title="Please enter your address" autofocus placeholder="Address" value="<?php if (isset($address)) { echo $address; } ?>" />
				<?php if (isset($err_address)) { echo $err_address; } ?>
				
			</li>
			
			<li>
				<!--<label for="myname">National Id <font color="#FF0000">*</font></label>-->
				<input type="text" name="address2" id="address2" title="Please enter your address" autofocus placeholder="Address" value="<?php if (isset($address)) { echo $address; } ?>" />
				<?php /*?><?php if (isset($err_address)) { echo $err_address; } ?><?php */?>
				
			</li>
			
			<li>
				<label for="myname">Zip/Postal Code <font color="#FF0000">*</font></label>
				<input type="text" name="postalcode" id="postalcode" title="Please enter your postal code" autofocus placeholder="Postal Code" value="<?php if (isset($postalcode)) { echo $postalcode; } ?>" />
				<?php if (isset($err_postalcode)) { echo $err_postalcode; } ?>
				
			</li>
			
			<li>
				<label for="myname">City <font color="#FF0000">*</font></label>
				<input type="text" name="city" id="city" title="Please enter your city" autofocus placeholder="City" value="<?php if (isset($city)) { echo $city; } ?>" />
				<?php if (isset($err_city)) { echo $err_city; } ?>
				
			</li>
			
			<li>
				<label for="reference">Country <font color="#FF0000">*</font></label>
				<select name="reference" id="reference">
					<option value="">Choose...</option>
					<option value="United States" 
						<?php if ((isset($reference)) && ($reference === 'United States')) { echo "selected"; } ?>>United States</option> 
						<option value="United Kingdom" 
						<?php if ((isset($reference)) && ($reference === 'United Kingdom')) { echo "selected"; } ?>>United Kingdom</option> 
						<option value="Afghanistan"
						<?php if ((isset($reference)) && ($reference === 'Afghanistan')) { echo "selected"; } ?> >Afghanistan</option> 
						<option value="Albania" 
						<?php if ((isset($reference)) && ($reference === 'Albania')) { echo "selected"; } ?>>Albania</option> 
						<option value="Algeria"  >Algeria</option> 
						<option value="American Samoa"  >American Samoa</option> 
						<option value="Andorra"  >Andorra</option> 
						<option value="Angola"  >Angola</option> 
						<option value="Anguilla"  >Anguilla</option> 
						<option value="Antarctica"  >Antarctica</option> 
						<option value="Antigua and Barbuda"  >Antigua and Barbuda</option> 
						<option value="Argentina"  >Argentina</option> 
						<option value="Armenia"  >Armenia</option> 
						<option value="Aruba" >Aruba</option> 
						<option value="Australia"  >Australia</option> 
						<option value="Austria"  >Austria</option> 
						<option value="Azerbaijan"  >Azerbaijan</option> 
						<option value="Bahamas"  >Bahamas</option> 
						<option value="Bahrain"  >Bahrain</option> 
						<option value="Bangladesh"  >Bangladesh</option> 
						<option value="Barbados"  >Barbados</option> 
						<option value="Belarus"  >Belarus</option> 
						<option value="Belgium" >Belgium</option> 
						<option value="Belize"  >Belize</option> 
						<option value="Benin"  >Benin</option> 
						<option value="Bermuda"  >Bermuda</option> 
						<option value="Bhutan"  >Bhutan</option> 
						<option value="Bolivia"  >Bolivia</option> 
						<option value="Bosnia and Herzegovina"  >Bosnia and Herzegovina</option> 
						<option value="Botswana"  >Botswana</option> 
						<option value="Bouvet Island"  >Bouvet Island</option> 
						<option value="Brazil" >Brazil</option> 
						<option value="British Indian Ocean Territory"  >British Indian Ocean Territory</option> 
						<option value="Brunei Darussalam"  >Brunei Darussalam</option> 
						<option value="Bulgaria"  >Bulgaria</option> 
						<option value="Burkina Faso"  >Burkina Faso</option> 
						<option value="Burundi" >Burundi</option> 
						<option value="Cambodia" >Cambodia</option> 
						<option value="Cameroon"  >Cameroon</option> 
						<option value="Canada" >Canada</option> 
						<option value="Cape Verde"  >Cape Verde</option> 
						<option value="Cayman Islands"  >Cayman Islands</option> 
						<option value="Central African Republic"  >Central African Republic</option> 
						<option value="Chad"  >Chad</option> 
						<option value="Chile"  >Chile</option> 
						<option value="China" >China</option> 
						<option value="Christmas Island" >Christmas Island</option> 
						<option value="Cocos (Keeling) Islands"  >Cocos (Keeling) Islands</option> 
						<option value="Colombia" >Colombia</option> 
						<option value="Comoros" >Comoros</option> 
						<option value="Congo" >Congo</option> 
						<option value="Congo, The Democratic Republic of The" >Congo, The Democratic Republic of The</option> 
						<option value="Cook Islands"  >Cook Islands</option> 
						<option value="Costa Rica"  >Costa Rica</option> 
						<option value="Cote D`ivoire" >Cote D'ivoire</option> 
						<option value="Croatia"  >Croatia</option> 
						<option value="Cuba" >Cuba</option> 
						<option value="Cyprus" >Cyprus</option> 
						<option value="Czech Republic" >Czech Republic</option> 
						<option value="Denmark">Denmark</option> 
						<option value="Djibouti" >Djibouti</option> 
						<option value="Dominica" >Dominica</option> 
						<option value="Dominican Republic" >Dominican Republic</option> 
						<option value="Ecuador" >Ecuador</option> 
						<option value="Egypt" >Egypt</option> 
						<option value="El Salvador" >El Salvador</option> 
						<option value="Equatorial Guinea" >Equatorial Guinea</option> 
						<option value="Eritrea"  >Eritrea</option> 
						<option value="Estonia" >Estonia</option> 
						<option value="Ethiopia" >Ethiopia</option> 
						<option value="Falkland Islands (Malvinas)" >Falkland Islands (Malvinas)</option> 
						<option value="Faroe Islands" >Faroe Islands</option> 
						<option value="Fiji" >Fiji</option> 
						<option value="Finland" >Finland</option> 
						<option value="France" >France</option> 
						<option value="French Guiana" >French Guiana</option> 
						<option value="French Polynesia" >French Polynesia</option> 
						<option value="French Southern Territories" >French Southern Territories</option> 
						<option value="Gabon" >Gabon</option> 
						<option value="Gambia" >Gambia</option> 
						<option value="Georgia" >Georgia</option> 
						<option value="Germany" >Germany</option> 
						<option value="Ghana" >Ghana</option> 
						<option value="Gibraltar"  >Gibraltar</option> 
						<option value="Greece" >Greece</option> 
						<option value="Greenland" >Greenland</option> 
						<option value="Grenada" >Grenada</option> 
						<option value="Guadeloupe" >Guadeloupe</option> 
						<option value="Guam" >Guam</option> 
						<option value="Guatemala" >Guatemala</option> 
						<option value="Guinea" >Guinea</option> 
						<option value="Guinea-bissau" >Guinea-bissau</option> 
						<option value="Guyana" >Guyana</option> 
						<option value="Haiti" >Haiti</option> 
						<option value="Heard Island and Mcdonald Islands" >Heard Island and Mcdonald Islands</option> 
						<option value="Holy See (Vatican City State)" >Holy See (Vatican City State)</option> 
						<option value="Honduras" >Honduras</option> 
						<option value="Hong Kong" >Hong Kong</option> 
						<option value="Hungary"  >Hungary</option> 
						<option value="Iceland" >Iceland</option> 
						<option value="India" >India</option> 
						<option value="Indonesia" >Indonesia</option> 
						<option value="Iran, Islamic Republic of" >Iran, Islamic Republic of</option> 
						<option value="Iraq" >Iraq</option> 
						<option value="Ireland" >Ireland</option> 
						<option value="Israel" >Israel</option> 
						<option value="Italy" >Italy</option> 
						<option value="Jamaica" >Jamaica</option> 
						<option value="Japan" >Japan</option> 
						<option value="Jordan" >Jordan</option> 
						<option value="Kazakhstan" >Kazakhstan</option> 
						<option value="Kenya" >Kenya</option> 
						<option value="Kiribati" >Kiribati</option> 
						<option value="Korea, Democratic Peoples Republic of" >Korea, Democratic People's Republic of</option> 
						<option value="Korea, Republic of" >Korea, Republic of</option> 
						<option value="Kuwait" >Kuwait</option> 
						<option value="Kyrgyzstan" >Kyrgyzstan</option> 
						<option value="Lao Peoples Democratic Republic" >Lao People's Democratic Republic</option> 
						<option value="Latvia" >Latvia</option> 
						<option value="Lebanon" >Lebanon</option> 
						<option value="Lesotho" >Lesotho</option> 
						<option value="Liberia" >Liberia</option> 
						<option value="Libyan Arab Jamahiriya" >Libyan Arab Jamahiriya</option> 
						<option value="Liechtenstein" >Liechtenstein</option> 
						<option value="Lithuania" >Lithuania</option> 
						<option value="Luxembourg" >Luxembourg</option> 
						<option value="Macao" >Macao</option> 
						<option value="Macedonia, The Former Yugoslav Republic of" >Macedonia, The Former Yugoslav Republic of</option> 
						<option value="Madagascar" >Madagascar</option> 
						<option value="Malawi" >Malawi</option> 
						<option value="Malaysia" >Malaysia</option> 
						<option value="Maldives" >Maldives</option> 
						<option value="Mali">Mali</option> 
						<option value="Malta" >Malta</option> 
						<option value="Marshall Islands" >Marshall Islands</option> 
						<option value="Martinique" >Martinique</option> 
						<option value="Mauritania" >Mauritania</option> 
						<option value="Mauritius" >Mauritius</option> 
						<option value="Mayotte" >Mayotte</option> 
						<option value="Mexico" >Mexico</option> 
						<option value="Micronesia, Federated States of" >Micronesia, Federated States of</option> 
						<option value="Moldova, Republic of" >Moldova, Republic of</option> 
						<option value="Monaco" >Monaco</option> 
						<option value="Mongolia" >Mongolia</option> 
						<option value="Montserrat" >Montserrat</option> 
						<option value="Morocco" >Morocco</option> 
						<option value="Mozambique" >Mozambique</option> 
						<option value="Myanmar" >Myanmar</option> 
						<option value="Namibia" >Namibia</option> 
						<option value="Nauru"  >Nauru</option> 
						<option value="Nepal"  >Nepal</option> 
						<option value="Netherlands" >Netherlands</option> 
						<option value="Netherlands Antilles" >Netherlands Antilles</option> 
						<option value="New Caledonia" >New Caledonia</option> 
						<option value="New Zealand" >New Zealand</option> 
						<option value="Nicaragua" >Nicaragua</option> 
						<option value="Niger" >Niger</option> 
						<option value="Nigeria" >Nigeria</option> 
						<option value="Niue" >Niue</option> 
						<option value="Norfolk Island"  >Norfolk Island</option> 
						<option value="Northern Mariana Islands" >Northern Mariana Islands</option> 
						<option value="Norway" >Norway</option> 
						<option value="Oman" >Oman</option> 
						<option value="Pakistan" >Pakistan</option> 
						<option value="Palau" >Palau</option> 
						<option value="Palestinian Territory, Occupied" >Palestinian Territory, Occupied</option> 
						<option value="Panama" >Panama</option> 
						<option value="Papua New Guinea" >Papua New Guinea</option> 
						<option value="Paraguay" >Paraguay</option> 
						<option value="Peru" >Peru</option> 
						<option value="Philippines" >Philippines</option> 
						<option value="Pitcairn" >Pitcairn</option> 
						<option value="Poland" >Poland</option> 
						<option value="Portugal" >Portugal</option> 
						<option value="Puerto Rico" >Puerto Rico</option> 
						<option value="Qatar" >Qatar</option> 
						<option value="Reunion" >Reunion</option> 
						<option value="Romania" >Romania</option> 
						<option value="Russian Federation" >Russian Federation</option> 
						<option value="Rwanda" >Rwanda</option> 
						<option value="Saint Helena" >Saint Helena</option> 
						<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option> 
						<option value="Saint Lucia" >Saint Lucia</option> 
						<option value="Saint Pierre and Miquelon" >Saint Pierre and Miquelon</option> 
						<option value="Saint Vincent and The Grenadines" >Saint Vincent and The Grenadines</option> 
						<option value="Samoa" >Samoa</option> 
						<option value="San Marino" >San Marino</option> 
						<option value="Sao Tome and Principe" >Sao Tome and Principe</option> 
						<option value="Saudi Arabia" >Saudi Arabia</option> 
						<option value="Senegal" >Senegal</option> 
						<option value="Serbia and Montenegro" >Serbia and Montenegro</option> 
						<option value="Seychelles" >Seychelles</option> 
						<option value="Sierra Leone" >Sierra Leone</option> 
						<option value="Singapore" >Singapore</option> 
						<option value="Slovakia" >Slovakia</option> 
						<option value="Slovenia" >Slovenia</option> 
						<option value="Solomon Islands" >Solomon Islands</option> 
						<option value="Somalia" >Somalia</option> 
						<option value="South Africa" >South Africa</option> 
						<option value="South Georgia and The South Sandwich Islands" >South Georgia and The South Sandwich Islands</option> 
						<option value="Spain" >Spain</option> 
						<option value="Sri Lanka" >Sri Lanka</option> 
						<option value="Sudan" >Sudan</option> 
						<option value="Suriname" >Suriname</option> 
						<option value="Svalbard and Jan Mayen" >Svalbard and Jan Mayen</option> 
						<option value="Swaziland" >Swaziland</option> 
						<option value="Sweden" >Sweden</option> 
						<option value="Switzerland" >Switzerland</option> 
						<option value="Syrian Arab Republic" >Syrian Arab Republic</option> 
						<option value="Taiwan, Province of China" >Taiwan, Province of China</option> 
						<option value="Tajikistan" >Tajikistan</option> 
						<option value="Tanzania, United Republic of" >Tanzania, United Republic of</option> 
						<option value="Thailand" >Thailand</option> 
						<option value="Timor-leste" >Timor-leste</option> 
						<option value="Togo" >Togo</option> 
						<option value="Tokelau" >Tokelau</option> 
						<option value="Tonga" >Tonga</option> 
						<option value="Trinidad and Tobago" >Trinidad and Tobago</option> 
						<option value="Tunisia" >Tunisia</option> 
						<option value="Turkey" >Turkey</option> 
						<option value="Turkmenistan" >Turkmenistan</option> 
						<option value="Turks and Caicos Islands" >Turks and Caicos Islands</option> 
						<option value="Tuvalu" >Tuvalu</option> 
						<option value="Uganda" >Uganda</option> 
						<option value="Ukraine">Ukraine</option> 
						<option value="United Arab Emirates" >United Arab Emirates</option> 
						<option value="United Kingdom" >United Kingdom</option> 
						<option value="United States Minor Outlying Islands" >United States Minor Outlying Islands</option> 
						<option value="Uruguay" >Uruguay</option> 
						<option value="Uzbekistan">Uzbekistan</option> 
						<option value="Vanuatu" >Vanuatu</option> 
						<option value="Venezuela" >Venezuela</option> 
						<option value="Vietnam" >Vietnam</option> 
						<option value="Virgin Islands, British"  >Virgin Islands, British</option> 
						<option value="Virgin Islands, U.S." >Virgin Islands, U.S.</option> 
						<option value="Wallis and Futuna" >Wallis and Futuna</option> 
						<option value="Western Sahara" >Western Sahara</option> 
						<option value="Yemen"> Yemen</option> 
						<option value="Zambia" >Zambia</option> 
						<option value="Zimbabwe">Zimbabwe</option>
				</select>
				<?php if (isset($err_reference)) { echo $err_reference; } ?>
			</li>
			
			
		</ol>
		
			<div class="buttonnav prev">prev</div>
			<div class="buttonnav next">next</div>
		</fieldset>
	<fieldset id="comments"  class="hidden" title="Account Access">
	<legend>Account Access</legend>
		<ol>
			
			<li>
				<label for="mypassword">Password <font color="#FF0000">*</font></label>
				<input type="password" name="mypassword" id="mypassword" value="<?php if (isset($mypassword)) { echo $mypassword; } ?>" />
				<?php if (isset($err_passlength)) { echo $err_passlength; } ?>
			</li>
			<li>
				<label for="mypasswordconf">Password (confirm) <font color="#FF0000">*</label>
				<input type="password" name="mypasswordconf" id="mypasswordconf" value="<?php if (isset($mypasswordconf)) { echo $mypasswordconf; } ?>" />
				<?php if (isset($err_mypassconf)) { echo $err_mypassconf; } ?>
			</li>
			
		</ol>
		
		<div class="buttonnav prev">prev</div>
		<button type="submit" name="action" value="submit">send</button>
	</fieldset>
</form>
<?php endif; // output form ?>
<script src="../stylesheets/myscript.js"></script>
<?php include_layout_template('user_footer.php'); ?>

