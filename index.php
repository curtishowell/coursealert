<?php

	$to = "curtis@curtishowell.net";
	$subject = "course available!";


	$file = file_get_contents("https://ws.admin.washington.edu/student/v4/public/course/2013,winter,CSE,374/A.xml");


	$XMLdoc = new SimpleXMLElement($file);

	$CurrentEnrollment = $XMLdoc->CurrentEnrollment;

	$fullEnrollment = 65;

	//enrollment is full :(
	if($CurrentEnrollment <= $fullEnrollment){

		$message = "current enrollment is full at " . $CurrentEnrollment;

		echo $message;

	} else { //spot available!!!

		$message = "spot open! Currnetly there are $CurrentEnrollment students enrolled in CSE 374";
		$success = mail($to, $subject, $message);
		
		if($success){
			echo "mail was successful at sending " . $message;
		} else {
			echo "mail was UNsuccessful at sending " . $message;
		}
	}

?>