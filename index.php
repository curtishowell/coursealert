<?php
	
	/*
	$to = "curtis@curtishowell.net";
	$subject = "course available!";
	$message = "your course is available, yay.";

	$success = mail($to, $subject, $message);
	*/


	$file = file_get_contents("https://ws.admin.washington.edu/student/v4/public/course/2013,winter,CSE,374/A.xml");


	$XMLdoc = new SimpleXMLElement($file);

	echo "result is " . $XMLdoc->Section[0]->CurrentEnrollment;

	//echo $success;

?>