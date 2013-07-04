<?php
require_once('../includes/initialize.php');
?>


<?php include_layout_template('../includes/user_header.php'); ?>

<form id="myform" name="theform" class="" action="#" method="POST">
	<fieldset id="Changes" title="Other Info">
		<legend>Registration Option</legend>
		<span id="formerror" class="error"></span>
		<ol>
			<li>
				<label for="reference">Register As</label>
				<select name="reference" id="reference">
					<option>Choose...</option>
					<option value="http://localhost/eventpanner_new/register/service_expert_user_reg.php">A Service Expert</option>
					<option value="http://localhost/eventpanner_new/register/customer_user_reg.php">A Customer</option>
					
				</select>
			</li>
			<!--<li>
				<button type="submit">send</button>
			</li>-->
		</ol>
	</fieldset>
</form>

<script>
	document.theform.reference.onchange = function() {
		var id = document.theform.reference.selectedIndex;
		var url = document.theform.reference[id].value;
		window.location.href = url;
	}
</script>
<?php include_layout_template('user_footer.php'); ?>