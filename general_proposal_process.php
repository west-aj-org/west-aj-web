<?php
	$the_email = "";
	if ( isset($_POST["name"]) && $_POST['name'] != "") {
		$the_email .= "Name:\t".$_POST['name']."\r\n";
		$the_email .= "Email:\t".$_POST['email']."\r\n";
		$the_email .= "Date Planned: ".$_POST['date']."\r\n";
		$the_email .= "Recurrence:\t".$_POST['recurrence']."\r\n";
		$the_email .= "Description:\t".$_POST['description']."\r\n";
		if (mail("wajsubmissions@gmail.com", "General Proposal", $the_email)) {
			header("Location: general_proposal.php?success=1");
			die();
		}
	} else {
			header("Location: general_proposal.php?error=1");
			die();
	}
	header ("Location: general_proposal.php?error=1");
	die();
?>