<!DOCTYPE html>
<html>
<head>
	<title>Daryl Browne</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="stylesheet" href="css/fontface.css"/>
	<link rel="stylesheet" href="css/print-typography.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/tablet.css" media="screen and (min-width: 600px)"/>
	<link rel="stylesheet" href="css/full.css" media="screen and (min-width: 800px)"/>

</head>
<body>	
<?php
$success = FALSE;

	function spamcheck($field){
	  //filter_var() sanitizes the e-mail
	  //address using FILTER_SANITIZE_EMAIL
	  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
	
	  //filter_var() validates the e-mail
	  //address using FILTER_VALIDATE_EMAIL
	  if(filter_var($field, FILTER_VALIDATE_EMAIL)){
	    return TRUE;
	   } else {
	    return FALSE;
	  }
  	}
  	if (isset($_REQUEST['email'])){
  		//if "email" is filled out, proceed
		//check if the email address is invalid
	  	$mailcheck = spamcheck($_REQUEST['email']);
	  	if ($mailcheck==FALSE){
	    	$success = FALSE;
	    	
	    }else{
	    	$success = TRUE;
	   	//send email
		   $email = $_REQUEST['email'] ;
		   $message = $_REQUEST['message'] ;
		   mail("daryl.browne@gmail.com; developer@darylmbrowne.com", "Subject: Enquiry from Portfolio Website",
		   $message, "From: $email" );		   
	   }
	}else{
		$success = FALSE;
	}
?>
	<nav id="mainmenu">
		<ul>
			<li id="home-button">home</li>
			<li>about</li>
			<li>work</li>
			<li>contact</li>		
		</ul>	
	</nav>
	<div id="hello"></div>
	<div class="hidden-field">
		<?php if ($success===true){
				echo "1";			
		 }else{ 
		 		echo "0";
		} ?>	
	</div>
	
	<div id="feedback">
		<?php if ($success===true){ ?>
			
			<header>
				<div class="circle-title">			
					SUCCESS!	
				</div>
			</header>
			<p>
				Thank you, your message has been sent.
				<br/>
				I should be in touch shortly!
			</p>
			
		<?php }else{ ?>
		 	
			<header>
				<div class="rectangle-title">			
					Error!	
				</div>
			</header>
			<p>
				Something is wrong...
				<br/>
				Go back and try again
			</p>
		<?php } ?>
		
		
	</div>	
</body>
</html>