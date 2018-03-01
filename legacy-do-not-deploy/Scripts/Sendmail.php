<?php
	session_start();
	$eName = $_POST["eName"];
	$eMail = $_POST["eMail"];
	$eRegarding = $_POST["eRegarding"];
	$eMessage = $_POST["eMessage"];
	
	$errorcode = "";
	$recieve = null;
	$emailstring1 = "@";
	$emailstring2 = ".";
	$messagestring1 = "&lt;";
	
	$eName = htmlspecialchars($eName);
	$eMail = htmlspecialchars($eMail);
	$eMessage = htmlspecialchars($eMessage);
	
	if($eName == ""){
		$errorcode = $errorcode . "You Must Enter a Name <br />";
	}
	
	if($eMail == ""){
		$errorcode = $errorcode . "You Must Enter an Email <br />";
	}
	
	if($eMessage == ""){
		$errorcode = $errorcode . "You Must Enter a Message <br />";
	}
	
	$pos1 = strpos($eMail, $emailstring1);
	$pos2 = strpos($eMail, $emailstring2);
	$pos3 = strpos($eMessage, $messagestring1);
	
	if($pos1 === false || $pos2 === false){
		$errorcode = $errorcode . "You Must Enter a Valid Email <br />";
	}
	
	if($pos3 !== false){
		$errorcode = $errorcode . "You May Not Use &lt; or &gt; in Your Message <br />";
	}
	
	if($errorcode == ""){
	
	$eMessage = "
			This is an automated response. Someone has tried to contact us using the website:
			-------------------------------------------------
			Person's Name: $eName
			Person's Email: $eMail
			
			Reason: $eRegarding
			
			Details: $eMessage
			-------------------------------------------------
			Do Not Reply To This Email
			";

		if ($eRegarding == "GeneralInformation"){$recieve = "carol_alderman@hotmail.com";}
		if ($eRegarding == "ShilohHouseDirector"){$recieve = "carol_alderman@hotmail.com";}
		if ($eRegarding == "ProgramServicesDirector"){$recieve = "cindyrhudy@hotmail.com";}

		mail( $recieve, "Message from ShilohHomeOfHope.com", $eMessage, "From: donotreply@ShilohHomeOfHope.com" );
		$_SESSION['ErrorMSG'] = "Message Sent";
	} else {
		$_SESSION['ErrorMSG'] = $errorcode;
	}
	
	header( "Location: http://www.shilohhomeofhope.org/Contact/" );
		
?>

