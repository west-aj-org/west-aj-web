<?php
	$the_email = "";
	if ( isset($_POST["name"]) && $_POST['name'] != "") {
		$the_email .= "Name:\t".$_POST['name']."\r\n";
		$the_email .= "Email:\t".$_POST['email']."\r\n";
		$the_email .= "House:\t".$_POST['house']."\r\n";
		$the_email .= "Date Planned: ".$_POST['date']."\r\n";
		$the_email .= "Type:\t".$_POST['type']."\r\n";
		$the_email .= "Description:\t".$_POST['description']."\r\n";
		if (mail("brandonfosterjunkmail@gmail.com", "General Proposal", $the_email)) {
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