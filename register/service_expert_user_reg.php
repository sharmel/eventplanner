<?php

require_once('../includes/initialize.php');
?>
<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['myname'])) { $myname = $_POST['myname']; }
	if (isset($_POST['mypassword'])) { $mypassword = $_POST['mypassword']; }
	if (isset($_POST['mypasswordconf'])) { $mypasswordconf = $_POST['mypasswordconf']; }
	if (isset($_POST['mycomments'])) { $mycomments = $_POST['mycomments']; }
	if (isset($_POST['reference'])) { $reference = $_POST['reference']; }
	if (isset($_POST['favoritemusic'])) { $favoritemusic = $_POST['favoritemusic']; }
	if (isset($_POST['requesttype'])) { $requesttype = $_POST['requesttype']; }


	if ($myname === '') :
		$err_myname = '<div class="error">Sorry, your name is a required field</div>';
	endif; // input field empty

	if (strlen($mypassword) <= 6):
		$err_passlength = '<div class="error">Sorry, the password must be at least six characters</div>';
	endif; //password not long enough


	if ($mypassword !== $mypasswordconf) :
		$err_mypassconf = '<div class="error">Sorry, passwords must match</div>';
	endif; //passwords don't match


	if ( !(preg_match('/[A-Za-z]+, [A-Za-z]+/', $myname)) ) :
		$err_patternmatch = '<div class="error">Sorry, the name must be in the format: Last, First</div>';
	endif; // pattern doesn't match


endif; //form submitted
?>
<?php include_layout_template('user_header.php'); ?>

				

<form id="myform" name="theform" class="group" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<span id="formerror" class="error"></span>
		
		<div id="message"></div>
		
		<fieldset id="login" title="Registration Info">
		<legend>Registration Info</legend>
		
		<ol>
		<li>
				<label for="myname">National Id <font color="#FF0000">*</font></label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<label for="myname">First Name <font color="#FF0000">*</font></label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<label for="myname">Middle Name </label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<label for="myname">Last Name <font color="#FF0000">*</font></label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<label for="myname">Email <font color="#FF0000">*</font></label>
				<input type="email" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<label for="myname">Phone <font color="#FF0000">*</font></label>
				<input type="tel" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
		</ol>
			
			<div class="buttonnav next">next</div>
		</fieldset>
	<fieldset id="other" class="hidden" title="Contact Info">
		<legend>Contact Info</legend>
			
			<ol>
			<li>
				<label for="myname">Mailing Address <font color="#FF0000">*</font></label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<!--<label for="myname">National Id <font color="#FF0000">*</font></label>-->
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<label for="myname">City <font color="#FF0000">*</font></label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>
			
			<li>
				<label for="reference">Country <font color="#FF0000">*</font></label>
				<select name="reference" id="reference">
					<option value="">Choose...</option>
					<option value="friend"
					<?php if ((isset($reference)) && ($reference === 'friend')) { echo "selected"; } ?>>A friend</option>
					<option value="facebook"
					<?php if ((isset($reference)) && ($reference === 'facebook')) { echo "selected"; } ?>>Facebook</option>
					<option value="twitter"
					<?php if ((isset($reference)) && ($reference === 'twitter')) { echo "selected"; } ?>>Twitter</option>
				</select>
			</li>
			
			<li>
				<label for="myname">Zip/Postal Code <font color="#FF0000">*</font></label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
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
				<label for="mypasswordconf">Password (confirm)</label>
				<input type="password" name="mypasswordconf" id="mypasswordconf" value="<?php if (isset($mypasswordconf)) { echo $mypasswordconf; } ?>" />
				<?php if (isset($err_mypassconf)) { echo $err_mypassconf; } ?>
			</li>
			
		</ol>
		
		<div class="buttonnav prev">prev</div>
		<button type="submit" name="action" value="submit">send</button>
	</fieldset>
</form>

<?php include_layout_template('user_footer.php'); ?>
