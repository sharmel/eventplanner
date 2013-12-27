<?php
require_once('../includes/initialize.php');


if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['nationalId'])) { $nationalId = $_POST['nationalId']; } else { $myname = '';  } 
	if (isset($_POST['firstname'])) { $firstname = $_POST['firstname']; } else { $firstname = ''; }
	if (isset($_POST['middlename'])) { $middlename = $_POST['middlename']; } else { $middlename = ''; }
	if (isset($_POST['lastname'])) { $lastname = $_POST['lastname']; } else { $lastname = ''; }
	if (isset($_POST['email'])) { $email = $_POST['email']; } else { $email = ''; }
	if (isset($_POST['phone'])) { $phone = $_POST['phone']; } else { $phone = ''; }
	if (isset($_POST['address'])) { $address = $_POST['address']; } else { $address = ''; }
	if (isset($_POST['address2'])) { $address2 = $_POST['address2']; } else { $address2 = ''; }
	if (isset($_POST['reference'])) { $reference = $_POST['reference']; } else { $reference = ''; }
	if (isset($_POST['city'])) { $city = $_POST['city'];} else { $city = ''; }
	if (isset($_POST['postalcode'])) { $postalcode = $_POST['postalcode'];} else { $postalcode = ''; }
	if (isset($_POST['mypassword'])) { $mypassword = $_POST['mypassword']; } else { $mypassword = ''; }
	if (isset($_POST['mypasswordconf'])) { $mypasswordconf = $_POST['mypasswordconf']; } else { $mypasswordconf = ''; }
	if (isset($_POST['ajaxrequest'])) { $ajaxrequest = $_POST['ajaxrequest']; } else { $ajaxrequest = ''; }

$formerrors = false;


if ($firstname === '') :

		$err_firstname = '<div class="error">Sorry, your name is  required</div>';
	 $formerrors = true;
	endif; // input field empty
	if ($nationalId==='') :
		$err_nationalId = '<div class="error">Sorry, National Id is required</div>';
		$formerrors = true;
	endif;

	if ($lastname==='') :
		$err_lastname = '<div class="error">Sorry, your name is required</div>';
		$formerrors = true;
		endif;
		
	if ($phone==='') :
		$err_phone = '<div class="error">Sorry, Phone Number is required</div>';
		$formerrors = true;
		endif;
		
	if ($city==='') :
		$err_city = '<div class="error">Sorry, City is required</div>';
		$formerrors = true;
		endif;
	if ($postalcode==='') :
		$err_postalcode = '<div class="error">Sorry, Postal Code is required</div>';
		$formerrors = true;
		endif;
	if ($address==='') :
		$err_address = '<div class="error">Sorry, Address is required</div>';
		$formerrors = true;
		endif;
	if ($reference==='') :
		$err_reference = '<div class="error">Sorry, country is required</div>';
		$formerrors = true;
		endif;
	if (strlen($mypassword) <= 6):
		$err_passlength = '<div class="error">Sorry, the password must be at least six characters</div>';
		if ( $ajaxrequest ) { echo "<script>$('#mypassword').after('<div class=\"error\">Sorry, the password must be at least six characters</div>');</script>"; }
		$formerrors = true;
	endif; //password not long enough


	if ($mypassword !== $mypasswordconf) :
		$err_mypassconf = '<div class="error">Sorry, passwords must match</div>';
		if ( $ajaxrequest ) { echo "<script>$('#mypasswordconf').after('<div class=\"error\">Sorry, passwords must match</div>');</script>"; }
		$formerrors = true;
	endif; //passwords don't match


	if ( !(preg_match('/[A-Za-z]+, [A-Za-z]+/', $firstname)) ) :
		$err_patternmatch = '<div class="error">Sorry, the name must be in the format: Last, First</div>';
		$formerrors = true;
	endif; // pattern doesn't match

 $formdata = array (
    'nationalId' => $nationalId,
	'firstname' => $firstname,
	'middlename' => $middlename,
	'lastname' => $lastname,
	'email' => $email,
	'phone' => $phone,
	'address' => $address,
	'address2' => $address2,
	'reference' => $reference,
	'city' => $city,
	'postalcode' => $postalcode,
    'mypassword' => $mypassword,
    'mypasswordconf' => $mypasswordconf,
    
  );

  date_default_timezone_set('Helsinki/Finland');
  $currtime = time();
  $datefordb = date('Y-m-d H:i:s', $currtime);
  $salty = dechex($currtime).$mypassword;
  $salted = hash('sha1', $salty);


	if (!($formerrors)) :
		include("database_config.php");

		$forminfolink = mysqli_connect($host, $user, $password, $dbname);
		$forminfoquery = "(sFName, national_id, sMName, sLName, sAddr1, sAddr2, sCity, sState, sPCode, sPhone, sEmail, sPassword, ) 
		VALUES (
		'".$firstname."',
		  '".$nationalId."',
		  '".$middlename."',
		  '".$lastname."',
		  '".$address."',
		  '".$address2."',
		  '".$city."',
		  '".$reference."',
		  '".$postalcode."',
		  '".$phone."',
		  '".$email."',
		  '".$salted."',
		  
		)";

		if ($forminforesult = mysqli_query($forminfolink, $forminfoquery)):
		  $msg = "Your form data has been processed. Thanks.";
		  if ( $ajaxrequest ):
		    echo "<script>$('#myform').before('<div id=\"formmessage\"><p>",$msg,"</p></div>'); $('#myform').hide();</script>";
		  endif; // ajaxrequest
		else:
		  $msg = "Problem with database";
		  if ( $ajaxrequest ):
		    echo "<script>$('#myform').before('<div id=\"formmessage\"><p>",$msg,"</p></div>'); $('#myform').hide();</script>";
		  endif; // ajaxrequest
		endif; //write to database

		mysqli_close($forminfolink);

	endif; // check for form errors
	

endif; //form submitted
	
?>
